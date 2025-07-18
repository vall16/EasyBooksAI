<x-app-layout title="Influencer Dashboard" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-4 grid grid-cols-1 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-4 lg:gap-6">
                <div class="card flex-row justify-between p-4">
                    <div>
                        <p class="text-xs-plus uppercase">New Followers</p>
                        <div class="mt-8 flex items-baseline space-x-1">
                            <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                1.3k
                            </p>
                            <p class="text-xs text-success">+21%</p>
                        </div>
                    </div>
                    <div class="mask is-squircle flex size-10 items-center justify-center bg-warning/10">
                        <i class="fa-solid fa-user text-xl text-warning"></i>
                    </div>
                    <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                        <i class="fa-solid fa-user translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                    </div>
                </div>
                <div class="card flex-row justify-between p-4">
                    <div>
                        <p class="text-xs-plus uppercase">Views</p>
                        <div class="mt-8 flex items-baseline space-x-1">
                            <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                30.6m
                            </p>
                            <p class="text-xs text-success">+4%</p>
                        </div>
                    </div>
                    <div class="mask is-squircle flex size-10 items-center justify-center bg-info/10">
                        <i class="fa-solid fa-eye text-xl text-info"></i>
                    </div>
                    <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                        <i class="fa-solid fa-eye translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                    </div>
                </div>
                <div class="card flex-row justify-between p-4">
                    <div>
                        <p class="text-xs-plus uppercase">Likes</p>
                        <div class="mt-8 flex items-baseline space-x-1">
                            <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                4.3m
                            </p>
                            <p class="text-xs text-success">+8%</p>
                        </div>
                    </div>
                    <div class="mask is-squircle flex size-10 items-center justify-center bg-success/10">
                        <i class="fa-solid fa-thumbs-up text-xl text-success"></i>
                    </div>
                    <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                        <i class="fa-solid fa-thumbs-up translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                    </div>
                </div>
                <div class="card flex-row justify-between p-4">
                    <div>
                        <p class="text-xs-plus uppercase">Reports</p>
                        <div class="mt-8 flex items-baseline space-x-1">
                            <p class="text-2xl font-semibold text-slate-700 dark:text-navy-100">
                                11.6k
                            </p>
                            <p class="text-xs text-error">-2.3%</p>
                        </div>
                    </div>
                    <div class="mask is-squircle flex size-10 items-center justify-center bg-error/10">
                        <i class="fa-solid fa-bug text-xl text-error"></i>
                    </div>
                    <div class="absolute bottom-0 right-0 overflow-hidden rounded-lg">
                        <i class="fa-solid fa-bug translate-x-1/4 translate-y-1/4 text-5xl opacity-15"></i>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:grid-cols-2 lg:gap-6">
                <div>
                    <div class="flex h-8 items-center justify-between">
                        <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                            Activity
                        </h2>

                        <select
                            class="form-select h-8 rounded-full border border-slate-300 bg-slate-50 px-2.5 pr-9 text-xs-plus hover:border-slate-400 focus:border-primary dark:border-navy-600 dark:bg-navy-900 dark:hover:border-navy-400 dark:focus:border-accent">
                            <option>05 - 12 May</option>
                            <option>12 - 19 May</option>
                            <option>19 - 26 May</option>
                            <option>26 - 02 June</option>
                            <option>02 - 09 June</option>
                        </select>
                    </div>

                    <div>
                        <div x-init="$nextTick(() => {
                            $el._x_chart = new ApexCharts($el, pages.charts.influencerActivity);
                            $el._x_chart.render()
                        });"></div>
                    </div>
                </div>
                <div>
                    <div class="flex h-8 items-center justify-between">
                        <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                            Top Perfrormers
                        </h2>

                        <a href="#"
                            class="border-b border-dotted border-current pb-0.5 text-xs-plus font-medium text-primary outline-hidden transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">
                            View All
                        </a>
                    </div>

                    <table class="w-full">
                        <tbody>
                            <tr>
                                <td class="whitespace-nowrap pt-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar size-9">
                                            <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                            Konnor Guzman
                                        </h3>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-2 pt-4">
                                    <a href="#"
                                        class="font-inter tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@konnor721
                                    </a>
                                </td>
                                <td class="whitespace-nowrap pt-4">
                                    <p class="text-right font-medium text-slate-700 dark:text-navy-100">
                                        25%
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap pt-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar size-9">
                                            <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                            Alfredo Elliott
                                        </h3>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-2 pt-4">
                                    <a href="#"
                                        class="font-inter tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@Alfredoe
                                    </a>
                                </td>
                                <td class="whitespace-nowrap pt-4">
                                    <p class="text-right font-medium text-slate-700 dark:text-navy-100">
                                        36%
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap pt-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar size-9">
                                            <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                            Henry Curtis
                                        </h3>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-2 pt-4">
                                    <a href="#"
                                        class="font-inter tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@Henry2001
                                    </a>
                                </td>
                                <td class="whitespace-nowrap pt-4">
                                    <p class="text-right font-medium text-slate-700 dark:text-navy-100">
                                        65%
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap pt-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar size-9">
                                            <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                            Katrina West
                                        </h3>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-2 pt-4">
                                    <a href="#"
                                        class="font-inter tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@Katrinlady
                                    </a>
                                </td>
                                <td class="whitespace-nowrap pt-4">
                                    <p class="text-right font-medium text-slate-700 dark:text-navy-100">
                                        69%
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="whitespace-nowrap pt-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="avatar size-9">
                                            <img class="rounded-full" src="{{ asset('images/200x200.png') }}"
                                                alt="avatar" />
                                        </div>
                                        <h3 class="font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                            Lance Tucker
                                        </h3>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-2 pt-4">
                                    <a href="#"
                                        class="font-inter tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@Lanc11
                                    </a>
                                </td>
                                <td class="whitespace-nowrap pt-4">
                                    <p class="text-right font-medium text-slate-700 dark:text-navy-100">
                                        86%
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="flex flex-col rounded-xl bg-info/10 py-5 dark:bg-navy-800 lg:flex-row">
                <div class="flex flex-col px-4 sm:px-5 lg:w-48 lg:shrink-0 lg:py-3">
                    <h3
                        class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-lg">
                        Channels
                    </h3>
                    <p class="mt-3 grow">
                        Channels analytics calculated based on your activity
                    </p>
                    <div class="mt-3 flex items-center space-x-2">
                        <div class="flex size-7 items-center justify-center rounded-full bg-success/15 text-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 11l5-5m0 0l5 5m-5-5v12" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-slate-700 dark:text-navy-100">
                            3.3%
                        </p>
                    </div>
                </div>
                <div class="scrollbar-sm mt-5 flex space-x-4 overflow-x-auto px-4 sm:px-5 lg:mt-0 lg:pl-0">
                    <div class="flex w-36 shrink-0 flex-col items-center">
                        <img class="z-10 size-10" src="{{ asset('images/logos/instagram-round.svg') }}"
                            alt="flag" />

                        <div class="card -mt-5 w-full rounded-2xl px-3 py-5 text-center">
                            <p class="mt-3 text-base font-medium text-slate-700 dark:text-navy-100">
                                Instagram
                            </p>
                            <a href="#"
                                class="mt-1 font-inter text-xs-plus tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@theapp721
                            </a>
                            <div class="mt-6 flex justify-center space-x-1 font-inter">
                                <p class="text-4xl font-medium text-slate-700 dark:text-navy-100">
                                    +2
                                </p>
                                <p class="mt-1 font-medium text-slate-700 dark:text-navy-100">
                                    %
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-36 shrink-0 flex-col items-center">
                        <img class="z-10 size-10" src="{{ asset('images/logos/facebook-round.svg') }}"
                            alt="flag" />

                        <div class="card -mt-5 w-full rounded-2xl px-3 py-5 text-center">
                            <p class="mt-3 text-base font-medium text-slate-700 dark:text-navy-100">
                                Facebook
                            </p>
                            <a href="#"
                                class="mt-1 font-inter text-xs-plus tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@theapp721
                            </a>
                            <div class="mt-6 flex justify-center space-x-1 font-inter">
                                <p class="text-4xl font-medium text-slate-700 dark:text-navy-100">
                                    +3
                                </p>
                                <p class="mt-1 font-medium text-slate-700 dark:text-navy-100">
                                    %
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-36 shrink-0 flex-col items-center">
                        <img class="z-10 size-10" src="{{ asset('images/logos/tik_tok-round.svg') }}"
                            alt="flag" />

                        <div class="card -mt-5 w-full rounded-2xl px-3 py-5 text-center">
                            <p class="mt-3 text-base font-medium text-slate-700 dark:text-navy-100">
                                Tik Tok
                            </p>
                            <a href="#"
                                class="mt-1 font-inter text-xs-plus tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@theapptik
                            </a>
                            <div class="mt-6 flex justify-center space-x-1 font-inter">
                                <p class="text-4xl font-medium text-slate-700 dark:text-navy-100">
                                    +1
                                </p>
                                <p class="mt-1 font-medium text-slate-700 dark:text-navy-100">
                                    %
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-36 shrink-0 flex-col items-center">
                        <img class="z-10 size-10" src="{{ asset('images/logos/twitter-round.svg') }}"
                            alt="flag" />

                        <div class="card -mt-5 w-full rounded-2xl px-3 py-5 text-center">
                            <p class="mt-3 text-base font-medium text-slate-700 dark:text-navy-100">
                                Twitter
                            </p>
                            <a href="#"
                                class="mt-1 font-inter text-xs-plus tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@theapporg
                            </a>
                            <div class="mt-6 flex justify-center space-x-1 font-inter">
                                <p class="text-4xl font-medium text-slate-700 dark:text-navy-100">
                                    +1
                                </p>
                                <p class="mt-1 font-medium text-slate-700 dark:text-navy-100">
                                    %
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-36 shrink-0 flex-col items-center">
                        <img class="z-10 size-10" src="{{ asset('images/logos/pinterest-round.svg') }}"
                            alt="flag" />

                        <div class="card -mt-5 w-full rounded-2xl px-3 py-5 text-center">
                            <p class="mt-3 text-base font-medium text-slate-700 dark:text-navy-100">
                                Pinterest
                            </p>
                            <a href="#"
                                class="mt-1 font-inter text-xs-plus tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@theapporg
                            </a>
                            <div class="mt-6 flex justify-center space-x-1 font-inter">
                                <p class="text-4xl font-medium text-slate-700 dark:text-navy-100">
                                    +2
                                </p>
                                <p class="mt-1 font-medium text-slate-700 dark:text-navy-100">
                                    %
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-36 shrink-0 flex-col items-center">
                        <img class="z-10 size-10" src="{{ asset('images/logos/discord-round.svg') }}"
                            alt="flag" />

                        <div class="card -mt-5 w-full rounded-2xl px-3 py-5 text-center">
                            <p class="mt-3 text-base font-medium text-slate-700 dark:text-navy-100">
                                Discord
                            </p>
                            <a href="#"
                                class="mt-1 font-inter text-xs-plus tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@theapp2
                            </a>
                            <div class="mt-6 flex justify-center space-x-1 font-inter">
                                <p class="text-4xl font-medium text-slate-700 dark:text-navy-100">
                                    +1
                                </p>
                                <p class="mt-1 font-medium text-slate-700 dark:text-navy-100">
                                    %
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-36 shrink-0 flex-col items-center">
                        <img class="z-10 size-10" src="{{ asset('images/logos/youtube-round.svg') }}"
                            alt="flag" />

                        <div class="card -mt-5 w-full rounded-2xl px-3 py-5 text-center">
                            <p class="mt-3 text-base font-medium text-slate-700 dark:text-navy-100">
                                Youtube
                            </p>
                            <a href="#"
                                class="mt-1 font-inter text-xs-plus tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@theapp
                            </a>
                            <div class="mt-6 flex justify-center space-x-1 font-inter">
                                <p class="text-4xl font-medium text-slate-700 dark:text-navy-100">
                                    +2
                                </p>
                                <p class="mt-1 font-medium text-slate-700 dark:text-navy-100">
                                    %
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-36 shrink-0 flex-col items-center">
                        <img class="z-10 size-10" src="{{ asset('images/logos/tumblr-round.svg') }}"
                            alt="flag" />

                        <div class="card -mt-5 w-full rounded-2xl px-3 py-5 text-center">
                            <p class="mt-3 text-base font-medium text-slate-700 dark:text-navy-100">
                                Tumblr
                            </p>
                            <a href="#"
                                class="mt-1 font-inter text-xs-plus tracking-wide text-slate-400 hover:text-primary focus:text-primary dark:hover:text-accent-light dark:focus:text-accent-light">@theapp
                            </a>
                            <div class="mt-6 flex justify-center space-x-1 font-inter">
                                <p class="text-4xl font-medium text-slate-700 dark:text-navy-100">
                                    +1
                                </p>
                                <p class="mt-1 font-medium text-slate-700 dark:text-navy-100">
                                    %
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
