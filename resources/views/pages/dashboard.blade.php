<!-- WILLY -->
<x-app-layout title="Dashboard" is-header-blur="true">
    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        <div
            class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            <div class="col-span-12 lg:col-span-8">
                <div class="flex items-center justify-between space-x-2">
                    <h2 class="text-base font-medium tracking-wide text-slate-800 line-clamp-1 dark:text-navy-100">
                        Books Overview
                    </h2>
                    <div x-data="{ activeTab: 'tabRecent' }"
                        class="is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-200 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                        <div class="tabs-list flex p-1">
                            
                        </div>
                    </div>
                </div>
                <!-- Table With Filter -->
          <div x-data="{isFilterExpanded:false}">
            <div class="flex items-center justify-between">
              
              <div class="flex">
                <div class="flex items-center" x-data="{isInputActive:false}">
                  <label class="block">
                    <input
                      x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                      :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                      class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                      placeholder="Search here..."
                      type="text"
                    />
                  </label>
                  <button
                    @click="isInputActive = !isInputActive"
                    class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="size-4.5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                      />
                    </svg>
                  </button>
                </div>

                <button
                  @click="isFilterExpanded = !isFilterExpanded"
                  class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-4.5"
                    fill="none"
                    viewBox="0 0 24 24"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-width="2"
                      d="M18 11.5H6M21 4H3m6 15h6"
                    />
                  </svg>
                </button>
              </div>
            </div>
            <!-- <div x-show="isFilterExpanded" x-collapse>
              <div class="max-w-2xl py-3">
                <div
                  class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:gap-6"
                >
                  <label class="block">
                    <span>Employer name:</span>
                    <div class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Enter Employer Name"
                        type="text"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="size-4.5 transition-colors duration-200"
                          fill="none"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke="currentColor"
                            stroke-width="1.5"
                            d="M5 19.111c0-2.413 1.697-4.468 4.004-4.848l.208-.035a17.134 17.134 0 015.576 0l.208.035c2.307.38 4.004 2.435 4.004 4.848C19 20.154 18.181 21 17.172 21H6.828C5.818 21 5 20.154 5 19.111zM16.083 6.938c0 2.174-1.828 3.937-4.083 3.937S7.917 9.112 7.917 6.937C7.917 4.764 9.745 3 12 3s4.083 1.763 4.083 3.938z"
                          />
                        </svg>
                      </span>
                    </div>
                  </label>
                  <label class="block">
                    <span>Project name:</span>
                    <div class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Enter Project Name"
                        type="text"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="size-4.5 transition-colors duration-200"
                          fill="none"
                          viewBox="0 0 24 24"
                        >
                          <path
                            stroke="currentColor"
                            stroke-width="1.5"
                            d="M3.082 13.944c-.529-.95-.793-1.425-.793-1.944 0-.519.264-.994.793-1.944L4.43 7.63l1.426-2.381c.559-.933.838-1.4 1.287-1.66.45-.259.993-.267 2.08-.285L12 3.26l2.775.044c1.088.018 1.631.026 2.08.286.45.26.73.726 1.288 1.659L19.57 7.63l1.35 2.426c.528.95.792 1.425.792 1.944 0 .519-.264.994-.793 1.944L19.57 16.37l-1.426 2.381c-.559.933-.838 1.4-1.287 1.66-.45.259-.993.267-2.08.285L12 20.74l-2.775-.044c-1.088-.018-1.631-.026-2.08-.286-.45-.26-.73-.726-1.288-1.659L4.43 16.37l-1.35-2.426z"
                          />
                          <circle
                            cx="12"
                            cy="12"
                            r="3"
                            stroke="currentColor"
                            stroke-width="1.5"
                          />
                        </svg>
                      </span>
                    </div>
                  </label>
                  <label class="block">
                    <span>From:</span>
                    <div class="relative mt-1.5 flex">
                      <input
                      x-init="$el._x_flatpickr = flatpickr($el)"
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Choose start date..."
                        type="text"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="size-5 transition-colors duration-200"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="1.5"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                          />
                        </svg>
                      </span>
                    </div>
                  </label>
                  <label class="block">
                    <span>To:</span>
                    <div class="relative mt-1.5 flex">
                      <input
                      x-init="$el._x_flatpickr = flatpickr($el)"
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Choose start date..."
                        type="text"
                      />
                      <div
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="size-5 transition-colors duration-200"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          stroke-width="1.5"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                          />
                        </svg>
                      </div>
                    </div>
                  </label>
                  <div class="sm:col-span-2">
                    <span>Project Status:</span>
                    <div
                      class="mt-2 grid grid-cols-1 gap-4 sm:grid-cols-4 sm:gap-5 lg:gap-6"
                    >
                      <label class="inline-flex items-center space-x-2">
                        <input
                          class="form-checkbox is-basic size-5 rounded-sm border-slate-400/70 checked:border-secondary checked:bg-secondary hover:border-secondary focus:border-secondary dark:border-navy-400 dark:checked:border-secondary-light dark:checked:bg-secondary-light dark:hover:border-secondary-light dark:focus:border-secondary-light"
                          type="checkbox"
                        />
                        <span>Upcoming</span>
                      </label>
                      <label class="inline-flex items-center space-x-2">
                        <input
                          class="form-checkbox is-basic size-5 rounded-sm border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                          type="checkbox"
                        />
                        <span>In Progress</span>
                      </label>
                      <label class="inline-flex items-center space-x-2">
                        <input
                          checked
                          class="form-checkbox is-basic size-5 rounded-sm border-slate-400/70 checked:border-success! checked:bg-success hover:border-success! focus:border-success! dark:border-navy-400"
                          type="checkbox"
                        />
                        <span>Complete</span>
                      </label>
                      <label class="inline-flex items-center space-x-2">
                        <input
                          checked
                          class="form-checkbox is-basic size-5 rounded-sm border-slate-400/70 checked:border-error! checked:bg-error hover:border-error! focus:border-error! dark:border-navy-400"
                          type="checkbox"
                        />
                        <span>Cancelled</span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="mt-4 space-x-1 text-right">
                  <button
                    @click="isFilterExpanded = ! isFilterExpanded"
                    class="btn font-medium text-slate-700 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    Cancel
                  </button>

                  <button
                    @click="isFilterExpanded = ! isFilterExpanded"
                    class="btn bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                  >
                    Apply
                  </button>
                </div>
              </div>
            </div> -->
            <div x-data="bookModal()">

            <div class="card mt-3">
              <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                <table class="is-hoverable w-full text-left">
                  <thead>
                    <tr>
                      <!-- <th
                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        #
                      </th> -->
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Title
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Author
                      </th>

                      <!-- <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Progress
                      </th> -->
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Language
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Status
                      </th>
                      
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($books as $book)
                    <tr class="border-t border-gray-600 hover:bg-gray-700">
                    <!-- <tr
                      class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                    > -->
                        <td @click="fetchDetails({{ $book['id'] }})"
                            class="px-6 py-4 cursor-pointer text-primary hover:underline">
                            {{ $book['book_title'] ?? '-' }}
                        </td>
                        <!-- <td class="px-6 py-4"> -->
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                            {{ $book['author_name'] ?? 'N/A' }}
                        </td>
                        <!-- <td class="px-6 py-4"> -->
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                            {{ $book['book_language'] ?? '-' }}
                        </td>
                        <!-- <td class="px-6 py-4"> -->
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                            @if (!empty($book['processed']) && !empty($book['filename']))
                                <a href="{{ url('/download-book/' . $book['id']) }}" target="_blank" title="Scarica PDF">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400 hover:text-orange-600"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M6 2a2 2 0 0 0-2 2v16c0 1.103.897 2 2 2h12a2 2 0 0 0 2-2V8.414A1.99 1.99 0 0 0 19.586 7L15 2.414A1.99 1.99 0 0 0 13.586 2H6zm7 1.414L18.586 9H14a1 1 0 0 1-1-1V3.414zM8 13h1.5a1.5 1.5 0 0 1 0 3H8v-3zm3 0h1v3h-1v-3zm2.5 0H15a1 1 0 0 1 0 2h-1v1h-1.5v-3z" />
                                    </svg>
                                </a>
                            @else
                                <span class="text-yellow-400 font-semibold">Not Ready</span>
                            @endif
                        </td>
                    </tr>
                @endforeach

                    </tbody>
                </table>
              </div>

              <!-- Modal di dettaglio-->
                        <div 
                            x-show="open" 
                           
                            class="fixed inset-0 bg-white bg-opacity-90 flex justify-center items-center z-50"

                            x-transition
                            style="display: none;"
                            @click="open = false"
                        >
                            <div class="bg-white p-6 rounded shadow-lg max-w-lg w-full relative text-black">
                                <button @click="open = false" class="absolute top-2 right-2 text-white font-bold text-xl">&times;</button>
                                <template x-if="details">
                                    <div>
                                        <p><strong>Description:</strong> <span x-text="details.book_description"></span></p>
                                        <p><strong>Maximum chapters:</strong> <span x-text="details.min_chapters"></span></p>
                                        <p><strong>Maximum words per chapter:</strong> <span x-text="details.min_words_per_chapter"></span></p>
                                        <p><strong>Processed:</strong> <span x-text="details.processed ? 'Yes' : 'No'"></span></p>
                                        <p><strong>Ready:</strong> <span x-text="details.ready ? 'Yes' : 'No'"></span></p>
                                        <p><strong>Sent:</strong> <span x-text="details.sent ? 'Yes' : 'No'"></span></p>
                                        <p><strong>Filename:</strong> <span x-text="details.filename"></span></p>
                                        <p><strong>Creation date:</strong> <span x-text="new Date(details.created_at).toLocaleString()"></span></p>
                                        <p><strong>Referrer IP:</strong> <span x-text="details.referrer_ip"></span></p>
                                        <p><strong>User email:</strong> <span x-text="details.user_email"></span></p>
                                        <p><strong>Book ID:</strong> <span x-text="details.id"></span></p>
                                        <p><strong>User ID:</strong> <span x-text="details.user_id"></span></p>
                                        <p><strong>Error message:</strong> <span x-text="details.error_message || 'None'"></span></p>
                                    </div>
                                </template>
                                <template x-if="!details">
                                    <p>Loading details...</p>
                                </template>
                            </div>
                        </div>

              <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
              >
                <div class="text-xs-plus">1 - 10 of 10 entries</div>
                <ol class="pagination space-x-1.5">
                  <li>
                    <a
                      href="#"
                      class="flex size-8 items-center justify-center rounded-full bg-slate-150 text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15 19l-7-7 7-7"
                        />
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-slate-150 px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                      >1</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                      >2</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-slate-150 px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                      >3</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-slate-150 px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                      >4</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-slate-150 px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                      >5</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="flex size-8 items-center justify-center rounded-full bg-slate-150 text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:bg-navy-500 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="size-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5l7 7-7 7"
                        />
                      </svg>
                    </a>
                  </li>
                </ol>
              </div>
            </div>
            </div>
          </div>

                <div class="flex flex-col sm:flex-row sm:space-x-7">
                    <div class="mt-4 flex shrink-0 flex-col items-center sm:items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-info" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                        
                        
                    </div>
                </div>
            </div>
            
        </div>
        <div class="mt-4 grid grid-cols-12 gap-4 bg-slate-150 py-5 dark:bg-navy-800 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
            
            
        </div>
        
    </main>
    <script>
        function bookModal() {
            return {
                open: false,
                details: null,

                async fetchDetails(bookId) {
                    this.open = true;
                    this.details = null;

                    try {
                        const response = await fetch(`/api/books/${bookId}`);
                        if (!response.ok) throw new Error('Errore nella richiesta');

                        const data = await response.json();
                        this.details = data;
                    } catch (error) {
                        console.error(error);
                        this.details = { error_message: 'Errore nel caricamento dei dettagli.' };
                    }
                }
            }
        }
    </script>
</x-app-layout>
