<!-- WILLY - pagina di login -->
<x-base-layout title="Login">
    <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
        <a href="#" class="flex items-center space-x-2">
            <img class="size-12" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
            <p class="text-3xl font-semibold uppercase text-slate-700 dark:text-navy-100">
                {{ config('app.name') }}
            </p>
        </a>
    </div>
    
<div class="hidden lg:grid lg:grid-cols-2 w-full max-w-6xl mx-auto px-6 min-h-screen">
  <!-- Testo a sinistra -->
   <div class="flex flex-col justify-center text-left pr-6">

  <div class="flex flex-col justify-start mt-[30vh]">
    <p class="mb-6 text-black text-lg leading-relaxed font-light tracking-wide">
      <span class="text-2xl font-extrabold text-black-400 block mb-2">
        Create your next bestseller in minutes
      </span>
      <span class="block mb-2">
        <em class="text-gray-600 text-sm">No writing skills required</em>
      </span>
      <span class="block">
        With the power of <span class="font-semibold text-black-400">generative AI</span>, 
        <strong class="text-black">Easy Books AI</strong> helps you turn your raw ideas into polished, 
        ready-to-publish books on <span class="font-semibold text-black-400">Amazon KDP</span>.
      </span>
      <br class="hidden md:block" />
      <span class="block mt-3 text-gray-600">
        Focus on your vision. 
        <span class="font-semibold text-black">We’ll handle the words, formatting, and structure — instantly.</span>
      </span>
    </p>
  </div>
  </div>

  <!-- Immagine a destra -->
  <!-- <div class="w-full max-w-lg p-6 mt-[30vh]">
    <img
      class="w-full"
      x-show="!$store.global.isDarkModeEnabled"
      src="{{ asset('images/book3.png') }}"
      alt="image"
    />
    <img
      class="w-full"
      x-show="$store.global.isDarkModeEnabled"
      src="{{ asset('images/illustrations/dashboard-check-dark.svg') }}"
      alt="image"
    />
  </div> -->
  <div class="w-full max-w-lg p-6 flex justify-center">
    <img
      class="w-full max-w-[400px]"
      x-show="!$store.global.isDarkModeEnabled"
      src="{{ asset('images/welcome.png') }}"
      alt="image"
    />
    <img
      class="w-full max-w-[400px]"
      x-show="$store.global.isDarkModeEnabled"
      src="{{ asset('images/illustrations/dashboard-check-dark.svg') }}"
      alt="image"
    />
  </div>

</div>

    
    <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md"
        
        >
        <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
            <div class="text-center">
                <img class="mx-auto size-16 lg:hidden" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                        Welcome !
                    </h2>
                    <p class="text-slate-400 dark:text-navy-300">
                        Please sign in to continue
                    </p>
                </div>
            </div>
            <form class="mt-16" action="{{ route('login') }}" method="post">
                @method('POST') @csrf
                <div>
                    <label class="relative flex">
                        <!-- <input
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring-3 dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Username or email" type="text" name="email"
                            value="{{ old('email') ?? 'help@piniastudio.com' }}" /> -->
                        <!-- <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span> -->
                    </label>
                    @error('email')
                        <span class="text-tiny-plus text-error">{{ $message }}</span>
                    @enderror
                </div>
                <!-- <div class="mt-4">
                    <label class="relative flex">
                        <input
                            class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring-3 dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Password" type="password" name="password"
                            value="{{ old('password') ?? 'password' }}" />
                        <span
                            class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                    </label>
                    @error('password')
                        <span class="text-tiny-plus text-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-4 flex items-center justify-between space-x-2">
                    <label class="inline-flex items-center space-x-2">
                        <input
                            class="form-checkbox is-outline size-5 rounded-sm border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                            type="checkbox" />
                        <span class="line-clamp-1">Remember me</span>
                    </label>
                    <a href="#"
                        class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100">Forgot
                        Password?</a>
                </div>
                <button type="submit"
                    class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    Sign In
                </button> -->
                <!-- <div class="mt-4 text-center text-xs-plus">
                    <p class="line-clamp-1">
                        <span>Dont have Account?</span>

                        <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="{{ route('registerView') }}">Create account</a>
                    </p>
                </div> -->
                <!-- <div class="my-7 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p>OR</p>
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div> -->
                <div class="flex space-x-4">
                    

                    <a href="{{ route('auth.google') }}"
   
                        class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"> 
                        <img class="size-5.5" src="{{ asset('images/logos/google.svg') }}" alt="logo" />
                            <span>Google</span>
                    </a>


                </div>
            </form>
        </div>
        <div class="my-5 flex justify-center text-xs text-slate-400 dark:text-navy-300">
            <a href="/privacy">Privacy Notice</a>
        <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
             <a href="/conditions" class="text-blue-600 hover:underline">Term of Service</a>

        </div>
    </main>
</x-base-layout>
