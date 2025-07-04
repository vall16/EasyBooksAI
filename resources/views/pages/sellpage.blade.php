<!-- WILLY -->
<x-app-layout title="Price List 3" is-header-blur="true">
    <main class="main-content w-full place-items-center px-[var(--margin-x)] pb-12">
        <div class="py-5 text-center lg:py-6">
            <p class="text-sm uppercase">Are you new here?</p>
            <h3 class="mt-1 text-xl font-semibold text-slate-600 dark:text-navy-100">
                Welcome. Where do you like to Start?
            </h3>
        </div>
        <div class="grid max-w-4xl grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5 lg:gap-6">

            @foreach(config('pacchetti') as $codice => $pacchetto)
                <div class="rounded-xl p-1 bg-linear-to-br from-{{ $pacchetto['color_from'] }} to-{{ $pacchetto['color_to'] }}">
                    <div class="relative rounded-xl bg-slate-50 p-4 text-center dark:bg-navy-900 sm:p-5">
                        
                        @if(!empty($pacchetto['recommended']))
                            <div class="absolute top-0 right-0 p-3">
                                <div class="badge rounded-full bg-info/10 text-info dark:bg-info/15">
                                    Recommended 
                                </div>
                            </div>
                        @endif

                        <div class="mt-8">
                            {!! $pacchetto['icon'] !!}
                        </div>

                        <div class="mt-5">
                            <h4 class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                {{ $pacchetto['name'] }}
                            </h4>
                            <p class="text-sm text-slate-500 dark:text-navy-200">
                                {{ $pacchetto['short_description'] }}
                            </p>

                        </div>
                        <div class="mt-5">
                            <span class="text-4xl tracking-tight {{ $pacchetto['text_color'] }} dark:text-accent-light">$
                                {{ $pacchetto['price'] }}</span>
                        </div>
                        <div class="mt-8 space-y-4 text-left">
                            @foreach($pacchetto['description_lines'] as $line)
                            <div class="flex items-start space-x-3">
                                <div class="flex size-6 shrink-0 items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <span class="font-medium">{{ $line }}</span>
                            </div>
                            @endforeach
                        </div>
                        <div class="mt-8">
                            <!-- <button
                                class="btn rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                Choose Plan
                            </button> -->
                            <button
                                class="btn rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                @click.stop="
                                    window.location.href = '{{ Auth::check() ? url('/bookcreation?pack=' . $codice) : route('auth.google') }}'
                                ">
                                Choose Plan
                            </button>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </main>
</x-app-layout>


