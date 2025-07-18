<!-- WILLY -->
<x-app-layout title="Book Creation" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full px-[var(--margin-x)] pb-8">
        <div class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6">
            <div class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h2 class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                    Book Creation
                </h2>
            </div>
         
        {{-- Riepilogo pacchetto selezionato --}}
        <div class="bg-white dark:bg-navy-700 border border-slate-200 dark:border-navy-600 rounded-lg shadow p-4 max-w-lg mx-auto mt-4 text-center">
            <div class="flex items-center justify-center space-x-2 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary dark:text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2 9 3.343 9 5s1.343 3 3 3zm0 2c-2.21 0-4 1.79-4 4v1h8v-1c0-2.21-1.79-4-4-4zm-7 7h14v2H5v-2z"/>
                </svg>
                <h3 class="text-lg font-semibold text-slate-700 dark:text-navy-100">Package Summary</h3>
            </div>
            <p class="text-slate-600 dark:text-navy-100 mb-1">
                You selected: <span class="font-semibold text-primary dark:text-accent-light">{{ $pacchetto['name'] }}</span>
            </p>
            <p class="text-slate-500 dark:text-navy-200">
                Price: <span class="font-bold text-slate-800 dark:text-white">€{{ number_format($pacchetto['price'], 2, ',', '.') }}</span>
            </p>
        </div>



<form method="POST" action="{{ route('book.startCheckout') }}">
    @csrf
    <input type="hidden" name="pack" value="{{ $packCode }}">
        <div class="flex justify-center space-x-2">
                <button
                    class="btn min-w-[7rem] border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                    Preview
                </button>
                <button type="submit"
                    class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    Purchase and Create Book
                </button>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
            <div class="col-span-12 lg:col-span-8">
                <div class="card">
                    <div class="tabs flex flex-col">
                        <div class="is-scrollbar-hidden overflow-x-auto">
                            <div class="border-b-2 border-slate-150 dark:border-navy-500">
                                <div class="tabs-list -mb-0.5 flex">
                                    <button
                                        class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-primary px-4 font-medium text-primary dark:border-accent dark:text-accent-light sm:px-5">
                                        <i class="fa-solid fa-layer-group text-base"></i>
                                        <span>General</span>
                                    </button>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-content p-4 sm:p-5">
                            <div class="space-y-5">
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">Title</span>
                                    <input
                                    name="book_title"
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Enter book title" type="text" 
                                        required
                                        />
                                </label>
                                <label class="block">
                                    <span class="font-medium text-slate-600 dark:text-navy-100">Language</span>
                                    <select
                                        name="book_language"
                                        class="form-select mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 text-slate-700 dark:text-white placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        required
                                    >
                                        <option value="">-- Select a language --</option>
                                        <option value="ENGLISH">English</option>
                                        <option value="ITALIAN">Italiano</option>
                                        <option value="FRENCH">Français</option>
                                        <option value="SPANISH">Español</option>
                                        <option value="GERMAN">Deutsch</option>

                                    </select>
                                </label>

                                <div>
                                    <span class="font-medium text-slate-600 dark:text-navy-100">Content Description</span>
                                    
                                   <textarea
                                        name="book_description"
                                        id="book_description"
                                        rows="10"
                                        class="form-textarea mt-2 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 text-slate-700 dark:text-white placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent">
                                    </textarea>


                                </div>
                                <!-- <div>
                                    <span class="font-medium text-slate-600 dark:text-navy-100">Post Images</span>
                                    <div class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]">
                                        <input type="file" x-init="$el._x_filepond = FilePond.create($el)" multiple />
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-4">
                <div class="card space-y-5 p-4 sm:p-5">
                    <label class="block">
                    <span class="font-medium font-bold text-slate-600 dark:text-navy-100">Author</span>
                        <input
                            type="text"
                            name="author_name"
                            class="form-input mt-1.5 w-full"
                            value="{{ Auth::user()->name ?? '' }}"
                            required
                           
                        />
                    </label>

                   <label class="block">
                    <span class="font-medium font-bold text-slate-600 dark:text-navy-100">Author's Email</span>
                    <input
                        type="text"
                        name="user_email"
                        class="form-input mt-1.5 w-full"
                        value="{{ Auth::user()->email ?? '' }}"
                        readonly
                        required
                    />
                    </label>

                    <label class="block">
                            <span class="font-medium text-slate-600 dark:text-navy-100">Category</span>
                            <select 
                                name="category"
                                required
                                class="mt-1.5 w-full"
                                x-init="$el._x_tom = new Tom($el, { create: false, sortField: { field: 'text', direction: 'asc' } })">
                                
                                <option value="">Select the category</option>
                                <option value="Essay">Essay</option>
                                <option value="Fairy Tale">Fairy Tale</option>   
                                <option value="History">History</option>
                                <option value="Short Novel">Short Novel</option>
                                
                            </select>
                        </label>

                    
                       <!-- Max Chapters -->
                        <div>
                        <label class="block">
                            <span class="font-medium text-slate-600 dark:text-navy-100">Max. Chapters</span>
                            <input
                                type="number"
                                id="min_chapters"
                                name="min_chapters"
                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 text-slate-700 dark:text-white placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                max="{{ $pacchetto['chapters'] }}"
                                value="{{ $pacchetto['chapters'] }}"
                                required
                            />
                        </label>
                             </div>

                        
                        <!-- Max Words per Chapter -->
                        <label class="block">
                            <span class="font-medium text-slate-600 dark:text-navy-100">Max. Words / Chapter</span>
                            <input
                                type="number"
                                id="min_words_per_chapter"
                                name="min_words_per_chapter"
                                class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 text-slate-700 dark:text-white placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                max="{{ $pacchetto['words_per_chapter'] }}"
                                value="{{ $pacchetto['words_per_chapter'] }}"
                                required
                            />
                        </label>


               
                    
                </div>
            </div>
        </div>
    </main>
</form>

</x-app-layout>
