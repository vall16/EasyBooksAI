<x-app-layout title="Crypto Dashboard v1" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 lg:col-span-8">
                <div class="card bg-linear-to-br from-purple-500 to-indigo-600 px-4 pb-4 sm:px-5">
                    <div class="flex items-center justify-between py-3 text-white">
                        <h2 class="text-sm-plus font-medium tracking-wide">Your Balance</h2>
                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-white/20 focus:bg-white/20 active:bg-white/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>

                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div
                                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6">
                        <div>
                            <div class="flex w-9/12 items-center space-x-1">
                                <p class="text-xs text-indigo-100 line-clamp-1">
                                    0x9CDBC28F0A6C13BB42ACBD3A3B366BFCAB07B8B1
                                </p>
                                <button
                                    class="btn size-5 shrink-0 rounded-full p-0 text-white hover:bg-white/20 focus:bg-white/20 active:bg-white/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z" />
                                        <path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mt-3 text-3xl font-semibold text-white">
                                $5,566.00
                            </div>
                            <p class="mt-3 text-xs-plus text-indigo-100">11.159849849 BTC</p>
                        </div>

                        <div class="grid grid-cols-2 gap-4 sm:gap-5 lg:gap-6">
                            <div>
                                <p class="text-indigo-100">Income</p>
                                <div class="mt-1 flex items-center space-x-2">
                                    <div
                                        class="flex size-7 items-center justify-center rounded-full bg-black/20 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                        </svg>
                                    </div>
                                    <p class="text-base font-medium text-white">$2,225.22</p>
                                </div>

                                <button
                                    class="btn mt-3 w-full border border-white/10 bg-white/20 text-white hover:bg-white/30 focus:bg-white/30">
                                    Receive
                                </button>
                            </div>
                            <div>
                                <p class="text-indigo-100">Expense</p>
                                <div class="mt-1 flex items-center space-x-2">
                                    <div
                                        class="flex size-7 items-center justify-center rounded-full bg-black/20 text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                        </svg>
                                    </div>
                                    <p class="text-base font-medium text-white">$225.22</p>
                                </div>
                                <button
                                    class="btn mt-3 w-full border border-white/10 bg-white/20 text-white hover:bg-white/30 focus:bg-white/30">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-4 pb-1 sm:mt-5 lg:mt-6">
                    <div class="my-3 flex items-center justify-between px-4 sm:px-5">
                        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Watchlist
                        </h2>
                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>

                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div
                                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar-sm flex space-x-4 overflow-x-auto overflow-y-hidden px-4 pb-2 sm:px-5">
                        <div class="flex w-72 shrink-0 flex-col">
                            <div class="flex items-center space-x-2">
                                <img class="size-6" src="{{ asset('images/logos/bitcoin.svg') }}" alt="flag" />
                                <div>
                                    <span>Bitcoin</span>
                                    <span class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                        btc
                                    </span>
                                </div>
                            </div>

                            <div class="mt-2.5 flex justify-between rounded-lg bg-slate-50 py-3 pr-3 dark:bg-navy-600">
                                <div class="ax-transparent-gridline">
                                    <div x-init="$nextTick(() => {
                                        $el._x_chart = new ApexCharts($el, pages.charts.cryptoWatchlist1);
                                        $el._x_chart.render()
                                    });"></div>
                                </div>
                                <div
                                    class="flex w-36 flex-col items-center rounded-lg bg-slate-100 py-2 font-inter dark:bg-navy-500">
                                    <p class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        $31,566.11
                                    </p>
                                    <p class="mt-1 flex items-center space-x-0.5 text-xs text-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                        </svg>
                                        <span>4.3%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-72 shrink-0 flex-col">
                            <div class="flex items-center space-x-2">
                                <img class="size-6" src="{{ asset('images/logos/ethereum.svg') }}" alt="flag" />
                                <div>
                                    <span>Ethereum</span>
                                    <span class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                        ETH
                                    </span>
                                </div>
                            </div>

                            <div class="mt-2.5 flex justify-between rounded-lg bg-slate-50 py-3 pr-3 dark:bg-navy-600">
                                <div class="ax-transparent-gridline">
                                    <div x-init="$nextTick(() => {
                                        $el._x_chart = new ApexCharts($el, pages.charts.cryptoWatchlist2);
                                        $el._x_chart.render()
                                    });"></div>
                                </div>
                                <div
                                    class="flex w-36 flex-col items-center rounded-lg bg-slate-100 py-2 font-inter dark:bg-navy-500">
                                    <p class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        $7,668.56
                                    </p>
                                    <p class="mt-1 flex items-center space-x-0.5 text-xs text-error">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 13l-5 5m0 0l-5-5m5 5V6" />
                                        </svg>
                                        <span>6.53%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-72 shrink-0 flex-col">
                            <div class="flex items-center space-x-2">
                                <img class="size-6" src="{{ asset('images/logos/solana.svg') }}" alt="flag" />
                                <div>
                                    <span>Solana</span>
                                    <span class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                        SOl
                                    </span>
                                </div>
                            </div>

                            <div class="mt-2.5 flex justify-between rounded-lg bg-slate-50 py-3 pr-3 dark:bg-navy-600">
                                <div class="ax-transparent-gridline">
                                    <div x-init="$nextTick(() => {
                                        $el._x_chart = new ApexCharts($el, pages.charts.cryptoWatchlist3);
                                        $el._x_chart.render()
                                    });"></div>
                                </div>
                                <div
                                    class="flex w-36 flex-col items-center rounded-lg bg-slate-100 py-2 font-inter dark:bg-navy-500">
                                    <p class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        $1,956.11
                                    </p>
                                    <p class="mt-1 flex items-center space-x-0.5 text-xs text-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                        </svg>
                                        <span>3.6%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-72 shrink-0 flex-col">
                            <div class="flex items-center space-x-2">
                                <img class="size-6" src="{{ asset('images/logos/litecoin.svg') }}" alt="flag" />
                                <div>
                                    <span>Litecoin</span>
                                    <span class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                        LTC
                                    </span>
                                </div>
                            </div>

                            <div class="mt-2.5 flex justify-between rounded-lg bg-slate-50 py-3 pr-3 dark:bg-navy-600">
                                <div class="ax-transparent-gridline">
                                    <div x-init="$nextTick(() => {
                                        $el._x_chart = new ApexCharts($el, pages.charts.cryptoWatchlist4);
                                        $el._x_chart.render()
                                    });"></div>
                                </div>
                                <div
                                    class="flex w-36 flex-col items-center rounded-lg bg-slate-100 py-2 font-inter dark:bg-navy-500">
                                    <p class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-100">
                                        $487.76
                                    </p>
                                    <p class="mt-1 flex items-center space-x-0.5 text-xs text-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                        </svg>
                                        <span>7.98%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 sm:mt-5 lg:mt-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                            Latest Activities
                        </h2>
                        <div class="flex">
                            <div class="flex items-center" x-data="{ isInputActive: false }">
                                <label class="block">
                                    <input x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                                        :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                                        class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                                        placeholder="Search here..." type="text" />
                                </label>
                                <button @click="isInputActive = !isInputActive"
                                    class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                            </div>
                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                                class="inline-flex">
                                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                    class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                    </svg>
                                </button>
                                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                    <div
                                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                    Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                    else</a>
                                            </li>
                                        </ul>
                                        <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                    Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                            <table class="is-hoverable w-full text-left">
                                <thead>
                                    <tr>
                                        <th
                                            class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Activity
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Account
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Last Payment
                                        </th>
                                        <th
                                            class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                            Balance
                                        </th>

                                        <th
                                            class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary dark:bg-accent dark:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-700 dark:text-navy-100">
                                                        Insurance
                                                    </p>
                                                    <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                        Property Coverage
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-medium text-slate-700 dark:text-navy-100">
                                                LTC Wallet
                                            </p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p>Mon, 12 May - 09:00</p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-semibold text-error">-7.55 LTC</p>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <button
                                                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-info/10 text-info dark:bg-info dark:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-700 dark:text-navy-100">
                                                        Electricity
                                                    </p>
                                                    <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                        Utility Payment
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-medium text-slate-700 dark:text-navy-100">
                                                BTC Wallet
                                            </p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p>Wed, 14 May - 12:47</p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-semibold text-error">-0.0255 BTC</p>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <button
                                                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-warning/10 text-warning dark:bg-warning dark:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-700 dark:text-navy-100">
                                                        Konnor Guzman
                                                    </p>
                                                    <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                        Personal
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-medium text-slate-700 dark:text-navy-100">
                                                BTC Wallet
                                            </p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p>SUN, 20 May - 10:16</p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-semibold text-success">+0.55 BTC</p>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <button
                                                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-warning/10 text-warning dark:bg-warning dark:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-700 dark:text-navy-100">
                                                        Alfredo Elliott
                                                    </p>
                                                    <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                        Personal
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-medium text-slate-700 dark:text-navy-100">
                                                ETH Wallet
                                            </p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p>THU, 23 May - 15:09</p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-semibold text-success">+3.25 ETH</p>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <button
                                                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-warning/10 text-warning dark:bg-warning dark:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-700 dark:text-navy-100">
                                                        Henry Curtis
                                                    </p>
                                                    <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                        Personal
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-medium text-slate-700 dark:text-navy-100">
                                                BTC Wallet
                                            </p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p>Wed, 26 May - 12:22</p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-semibold text-success">+0.0086 BTC</p>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <button
                                                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-info/10 text-info dark:bg-info dark:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-700 dark:text-navy-100">
                                                        Electricity
                                                    </p>
                                                    <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                        Utility Payment
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-medium text-slate-700 dark:text-navy-100">
                                                ETH Wallet
                                            </p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p>Sun, 30 May - 13:17</p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-semibold text-error">-2.894 ETH</p>
                                        </td>

                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <button
                                                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="border-y border-transparent">
                                        <td class="whitespace-nowrap rounded-bl-lg px-4 py-3 sm:px-5">
                                            <div class="flex items-center space-x-4">
                                                <div
                                                    class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary dark:bg-accent dark:text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-700 dark:text-navy-100">
                                                        Insurance
                                                    </p>
                                                    <p class="mt-0.5 text-xs text-slate-400 dark:text-navy-300">
                                                        Property Coverage
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-medium text-slate-700 dark:text-navy-100">
                                                LTC Wallet
                                            </p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p>Mon, 12 May - 09:00</p>
                                        </td>
                                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                            <p class="font-semibold text-error">-7.55 LTC</p>
                                        </td>
                                        <td class="whitespace-nowrap rounded-br-lg px-4 py-3 sm:px-5">
                                            <button
                                                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 grid grid-cols-1 gap-4 sm:gap-5 lg:col-span-4 lg:gap-6">
                <div class="card pb-4">
                    <div class="flex items-center justify-between px-4 py-3 sm:px-5">
                        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Accounts
                        </h2>
                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>

                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div
                                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="scrollbar-sm flex space-x-3 overflow-x-auto px-4 pb-3 sm:px-5">
                        <div class="w-48 shrink-0 rounded-lg bg-linear-to-br from-amber-400 to-orange-600 p-[3px]">
                            <div class="rounded-lg bg-white p-3 dark:bg-navy-700">
                                <div class="flex items-center justify-between">
                                    <p>Bitcoin</p>
                                    <img src="{{ asset('images/logos/bitcoin.svg') }}" class="size-6"
                                        alt="logo" />
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                                        .739
                                    </p>
                                    <p>$7,946.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-48 shrink-0 rounded-lg bg-linear-to-br from-purple-500 to-indigo-600 p-[3px]">
                            <div class="rounded-lg bg-white p-3 dark:bg-navy-700">
                                <div class="flex items-center justify-between">
                                    <p>Litecoin</p>
                                    <img src="{{ asset('images/logos/litecoin.svg') }}" class="size-6"
                                        alt="logo" />
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                                        3.545
                                    </p>
                                    <p>$2,589.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-48 shrink-0 rounded-lg bg-linear-to-br from-info to-info-focus p-[3px]">
                            <div class="rounded-lg bg-white p-3 dark:bg-navy-700">
                                <div class="flex items-center justify-between">
                                    <p>Ethereum</p>
                                    <img src="{{ asset('images/logos/ethereum.svg') }}" class="size-6"
                                        alt="logo" />
                                </div>

                                <div class="mt-4 flex items-end justify-between">
                                    <p class="text-xl font-medium text-slate-700 dark:text-navy-100">
                                        5.589
                                    </p>
                                    <p>$11,499.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-1 px-4 sm:px-5">
                        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Send Money
                        </h2>
                        <div class="mt-3 flex space-x-2">
                            <div class="avatar size-8 hover:z-10">
                                <img class="rounded-full ring-3 ring-white dark:ring-navy-700"
                                    src="{{ asset('images/200x200.png') }}" alt="avatar" />
                            </div>

                            <div class="avatar size-8 hover:z-10">
                                <div
                                    class="is-initial rounded-full bg-info text-xs-plus uppercase text-white ring-3 ring-white dark:ring-navy-700">
                                    jd
                                </div>
                            </div>

                            <div class="avatar size-8 hover:z-10">
                                <img class="rounded-full ring-3 ring-white dark:ring-navy-700"
                                    src="{{ asset('images/200x200.png') }}" alt="avatar" />
                            </div>

                            <div class="avatar size-8 hover:z-10">
                                <img class="rounded-full ring-3 ring-white dark:ring-navy-700"
                                    src="{{ asset('images/200x200.png') }}" alt="avatar" />
                            </div>
                        </div>
                        <div class="mt-2 flex items-center justify-between">
                            <p class="text-xs-plus">View All Contacts</p>

                            <button
                                class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="mx-4 my-3 h-px bg-slate-200 dark:bg-navy-500 sm:mx-5"></div>

                    <div class="px-4 sm:px-5">
                        <div class="flex items-center justify-between">
                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                Exchange
                            </h2>
                            <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                                class="inline-flex">
                                <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                    class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                    </svg>
                                </button>

                                <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                    <div
                                        class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                    Action</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                    else</a>
                                            </li>
                                        </ul>
                                        <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                        <ul>
                                            <li>
                                                <a href="#"
                                                    class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                    Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ activeTab: 'tabReceive' }" class="tabs mt-3 flex flex-col">
                            <div
                                class="is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-150 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                                <div class="tabs-list flex px-1.5 py-1">
                                    <button @click="activeTab = 'tabReceive'"
                                        :class="activeTab === 'tabReceive' ?
                                            'bg-white shadow-sm dark:bg-navy-500 dark:text-navy-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn flex-1 space-x-2 px-3 py-2 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span> Receive </span>
                                    </button>
                                    <button @click="activeTab = 'tabSend'"
                                        :class="activeTab === 'tabSend' ?
                                            'bg-white shadow-sm dark:bg-navy-500 dark:text-navy-100' :
                                            'hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                        class="btn flex-1 space-x-2 px-3 py-2 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Send</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <div class="pt-4">
                                <p class="text-xs-plus">You send</p>
                                <div
                                    class="mt-1 flex justify-between space-x-2 rounded-2xl bg-slate-150 p-1.5 dark:bg-navy-800">
                                    <select
                                        class="form-select h-8 rounded-2xl border border-transparent bg-white px-4 py-0 pr-9 text-xs-plus hover:border-slate-400 focus:border-primary dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                        <option>Bitcoin</option>
                                        <option>Ethereum</option>
                                        <option>Solana</option>
                                        <option>Litecoin</option>
                                    </select>
                                    <input
                                        class="form-input w-full bg-transparent px-2 text-right placeholder:text-slate-400/70"
                                        placeholder="Amount" type="text" />
                                </div>
                            </div>
                            <div class="pt-4">
                                <p class="text-xs-plus">You receive</p>
                                <div
                                    class="mt-1 flex justify-between space-x-2 rounded-2xl bg-slate-150 p-1.5 dark:bg-navy-800">
                                    <select
                                        class="form-select h-8 rounded-2xl border border-transparent bg-white px-4 py-0 pr-9 text-xs-plus hover:border-slate-400 focus:border-primary dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                                        <option>Dollar</option>
                                        <option>Ethereum</option>
                                        <option>Solana</option>
                                        <option>Litecoin</option>
                                    </select>
                                    <input
                                        class="form-input w-full bg-transparent px-2 text-right placeholder:text-slate-400/70"
                                        placeholder="Amount" type="text" />
                                </div>
                            </div>
                            <div class="absolute right-0 top-1/2 mt-1">
                                <button
                                    class="btn mask is-hexagon size-7 bg-primary p-0 font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <button
                            class="btn mt-6 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                            Buy BTC
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="mt-3 flex items-center justify-between px-4 sm:px-5">
                        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            Transactions
                        </h2>
                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                            class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                class="btn -mr-1.5 size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>

                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div
                                    class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#"
                                                class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-hidden transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ax-transparent-gridline pr-2">
                        <div x-init="$nextTick(() => {
                            $el._x_chart = new ApexCharts($el, pages.charts.cryptoTransactions);
                            $el._x_chart.render()
                        });"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
