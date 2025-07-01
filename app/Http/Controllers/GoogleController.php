<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Cerca l'utente nel DB via email
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                // Se non esiste, creane uno nuovo
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt(str()->random(16)), // password casuale, non usata
                ]);
            }

            Auth::login($user);

            return redirect()->intended(route('dashboard')); // O altra rotta dopo login

        } catch (\Exception $e) {
            return redirect('/login')->withErrors('Login Google fallito');
        }
    }
}
