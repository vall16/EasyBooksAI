<x-app-layout title="Form Datetimepicker" is-sidebar-open="true" is-header-blur="true">
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
            <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
                Datetimepicker
            </h2>
            <div class="hidden h-full py-1 sm:flex">
                <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
            </div>
            <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
                <li class="flex items-center space-x-2">
                    <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                        href="#">Forms</a>
                    <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
                <li>Datetimepicker</li>
            </ul>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
            <!-- Basic Datetimepicker -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Basic Datetimepicker
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        The Datetimepicker is used to allow the user to select a date
                        and time, and to display that date and time in the specified
                        format.
                        <a class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="https://github.com/flatpickr/flatpickr">Flatpickr</a>
                        is a lightweight and powerful datetime picker.
                    </p>
                    <div class="mt-5">
                        <label class="relative flex">
                            <input x-init="$el._x_flatpickr = flatpickr($el, { enableTime: true })"
                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Choose datetime..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;label class=&quot;relative flex&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      x-init=&quot;$el._x_flatpickr = flatpickr($el,{enableTime: true})&quot;&#13;&#10;      class=&quot;form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;      placeholder=&quot;Choose datetime...&quot;&#13;&#10;      type=&quot;text&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;svg&#13;&#10;        xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;        class=&quot;size-5&quot;&#13;&#10;        fill=&quot;none&quot;&#13;&#10;        viewBox=&quot;0 0 24 24&quot;&#13;&#10;        stroke=&quot;currentColor&quot;&#13;&#10;        stroke-width=&quot;1.5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;path&#13;&#10;          stroke-linecap=&quot;round&quot;&#13;&#10;          stroke-linejoin=&quot;round&quot;&#13;&#10;          d=&quot;M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/svg&gt;&#13;&#10;    &lt;/span&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>

            <!-- Limit Time -->
            <div class="card px-4 pb-4 sm:px-5">
                <div class="my-3 flex h-8 items-center justify-between">
                    <h2 class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base">
                        Limit Time
                    </h2>
                    <label class="inline-flex items-center space-x-2">
                        <span class="text-xs text-slate-400 dark:text-navy-300">Code</span>
                        <input @change="helpers.toggleCode"
                            class="form-switch h-5 w-10 rounded-full bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-primary checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-accent dark:checked:before:bg-white"
                            type="checkbox" />
                    </label>
                </div>
                <div class="max-w-xl">
                    <p>
                        The Datetimepicker is used to allow the user to select a date
                        and time, and to display that date and time in the specified
                        format.
                        <a class="font-normal text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="https://github.com/flatpickr/flatpickr">Flatpickr</a>
                        is a lightweight and powerful datetime picker.
                    </p>
                    <div class="mt-5">
                        <label class="relative flex">
                            <input x-init="$el._x_flatpickr = flatpickr($el, { enableTime: true, minTime: '16:00', maxTime: '22:00' })"
                                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                placeholder="Choose datetime..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="code-wrapper hidden pt-4">
                    <pre class="is-scrollbar-hidden max-h-96 overflow-auto rounded-lg" x-init="hljs.highlightElement($el)">
            <code class="language-html" x-ignore>
&lt;label class=&quot;relative flex&quot;&gt;&#13;&#10;    &lt;input&#13;&#10;      x-init=&quot;$el._x_flatpickr = flatpickr($el,{enableTime: true,minTime: &apos;16:00&apos;,maxTime: &apos;22:00&apos;})&quot;&#13;&#10;      class=&quot;form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent&quot;&#13;&#10;      placeholder=&quot;Choose datetime...&quot;&#13;&#10;      type=&quot;text&quot;&#13;&#10;    /&gt;&#13;&#10;    &lt;span&#13;&#10;      class=&quot;pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent&quot;&#13;&#10;    &gt;&#13;&#10;      &lt;svg&#13;&#10;        xmlns=&quot;http://www.w3.org/2000/svg&quot;&#13;&#10;        class=&quot;size-5&quot;&#13;&#10;        fill=&quot;none&quot;&#13;&#10;        viewBox=&quot;0 0 24 24&quot;&#13;&#10;        stroke=&quot;currentColor&quot;&#13;&#10;        stroke-width=&quot;1.5&quot;&#13;&#10;      &gt;&#13;&#10;        &lt;path&#13;&#10;          stroke-linecap=&quot;round&quot;&#13;&#10;          stroke-linejoin=&quot;round&quot;&#13;&#10;          d=&quot;M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z&quot;&#13;&#10;        /&gt;&#13;&#10;      &lt;/svg&gt;&#13;&#10;    &lt;/span&gt;&#13;&#10;  &lt;/label&gt;&#13;&#10;                </code>
          </pre>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
