<!-- WILLY -->
<x-base-layout>
    <div class="flex items-center justify-center min-h-screen bg-white text-black">
        <div class="text-center max-w-xl">
            <p class="lead mt-4"></p>
            <p class="lead mt-4"></p>

            <h1 class="text-2xl font-bold text-purple-600">Payment completed successfully!!!</h1>

            <p class="lead mt-4">
                Thank you for your purchase! Your book is currently being generated.
            </p>

            <p class="mt-3">
                You will receive a notification via email (<strong>{{ auth()->user()->email }}</strong>) as soon as it's ready.
            </p>

            <!-- <a href="{{ route('dashboards/crm-analytics') }}" -->
            <a href="{{ /dashboard }}"
               class="inline-block mt-4 px-6 py-2 bg-purple-600 text-white rounded hover:bg-purple-700 transition">
                Go to your books
            </a>
        </div>
    </div>
</x-base-layout>
