<?php
// WILLY
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    

    public function startCheckout(Request $request)
    {
        Log::info('🚀 [startCheckout] Inizio procedura checkout.');

        $validated = $request->validate([
            'user_email' => 'required|email',
            'author_name' => 'required|string',
            'book_title' => 'required|string',
            'book_description' => 'required|string',
            'book_language' => 'required|string',
            'min_chapters' => 'required|integer|min:1',
            'min_words_per_chapter' => 'required|integer|min:1',
            'pack' => 'required|string|in:base,plus,premium',
        ]);

        Log::info('✅ [startCheckout] Dati validati correttamente.', $validated);

        $packCode = $validated['pack'];
        $pacchetti = config('pacchetti');

        if (!array_key_exists($packCode, $pacchetti)) {
            Log::warning("❌ [startCheckout] Pacchetto non valido: $packCode");
            return redirect()->back()->withErrors(['pack' => 'Pacchetto non valido']);
        }

        $packData = $pacchetti[$packCode];
        Log::info("📦 [startCheckout] Pacchetto selezionato: $packCode", $packData);

        $token = Str::uuid()->toString();
        Log::info("🔐 [startCheckout] Token generato: $token");

        cache()->put("book_data_$token", array_merge($validated, [
            'price' => $packData['price'],
            'name' => $packData['name'],
        ]), now()->addMinutes(15));

        Log::info("💾 [startCheckout] Dati salvati in cache per 15 minuti con chiave: book_data_$token");

        session(['temp_token' => $token]);
        Log::info("📎 [startCheckout] Token salvato in sessione utente.");

        if (!auth()->check()) {
            Log::info("🔑 [startCheckout] Utente non autenticato. Reindirizzamento a Google OAuth.");
            return redirect()->route('auth.google', ['token' => $token, 'next_action' => 'stripe']);
        }

        Log::info("➡️ [startCheckout] Utente autenticato. Reindirizzamento a stripe.checkout con token.");
        return redirect()->route('stripe.checkout', ['token' => $token]);
    }

    
    public function create(Request $request)
    {
        $packCode = $request->query('pack'); // esempio: "base"

        $pacchetti = config('pacchetti');

        if (!array_key_exists($packCode, $pacchetti)) {
            abort(404, 'Pacchetto non valido');
        }

        $pacchetto = $pacchetti[$packCode];

        // Salva il pacchetto nella sessione attiva
        session()->put('book_data.pack', $packCode);

        
        return view('crea-libro', compact('pacchetto', 'packCode'));

    }


    private function generateBook(array $data)
    {
        $payload = [
            'user_email' => $data['user_email'],
            'author_name' => $data['author_name'],
            'book_title' => $data['book_title'],
            'book_description' => $data['book_description'],
            'book_language' => $data['book_language'],
            'min_chapters' => (string) $data['min_chapters'],
            'min_words_per_chapter' => (string) $data['min_words_per_chapter'],
        ];

        //chiama l' APi di generazione del libro
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => 'Bearer ' . config('services.vibes_api.token'),
            'Content-Type' => 'application/json',
        ])->post('https://api.vibesrl.com/schedule_book', $payload);

        return $response;
    }

    

    private function processGeneration(array $validatedData): void
    {
        $response = $this->generateBook($validatedData);

        Log::info('📘 Risposta API schedule_book', [
            'status' => $response->status(),
            'body' => $response->body(),
            'json' => $response->json(),
        ]);

        if (!$response->successful()) {
            Log::error('Errore nella generazione del libro.', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            throw new \Exception('Errore API: ' . $response->body());
        }

        Log::info('Libro generato con successo.', [
            'status' => $response->status(),
            'body' => $response->body()
        ]);
    }




    public function userBooks(string $email)
    {
        // Codifica dell'email per l'URL
        $encodedEmail = urlencode($email);

        // Chiamata all'API
        $response = Http::withHeaders([
            'accept' => 'application/json',
            'Authorization' => 'Bearer ' . config('services.vibes_api.token'),
        ])->get("https://api.vibesrl.com/user_books?user_id={$encodedEmail}");

        // Controlla la risposta
        if ($response->successful()) {
            $books = $response->json();
            return view('libri-utente', compact('books', 'email'));
        } else {
            return back()->withErrors(['api_error' => 'Errore recupero libri: ' . $response->body()]);
        }
    }



    public function complete2(Request $request)
    {
        $token = $request->query('token');

        Log::info("COMPLETE.Token ricevuto: $token");
        Log::info("COMPLETE.Esiste in cache: ", ['exists' => cache()->has("book_data_$token")]);

        if (!$token) {
            Log::warning('Token mancante nella richiesta di completamento Stripe');
            return redirect()->route('error')->with('message', '⚠️ Token mancante');
        }

        $bookData = cache("book_data_$token");

        if (!$bookData) {
            Log::warning("Dati libro non trovati o cache scaduta per token: $token");
            return redirect()->route('error')->with('message', '⚠️ Sessione scaduta o dati non trovati.');
        }

        Log::info('Token ricevuto da Stripe:', ['token' => $token]);
        Log::debug('Dati recuperati dalla cache per generazione libro:', $bookData);

        try {
            Log::info('Inizio chiamata a processGeneration()');

            $this->processGeneration($bookData);

            cache()->forget("book_data_$token");
            Log::info('Cache rimossa per token: ' . $token);

            return view('bookscomplete')->with('success', '✅ Libro generato con successo!');
        } catch (\Exception $e) {
            Log::error('Errore durante la generazione del libro: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'token' => $token
            ]);

            $message  = "❌ Something went wrong while generating your book.\n";
            $message .= "But don't worry — your payment was successful, and we're working on it.\n";
            $message .= 'Technical details: ' . $e->getMessage();


            return redirect()->route('error')->with('message', $message);
        }
    }



}
    