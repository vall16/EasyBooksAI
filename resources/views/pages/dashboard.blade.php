<!-- WILLY -->
<x-app-layout title="Dashboard" is-header-blur="true">
  <!-- <main class="main-content w-full pb-8"> -->
    <main class="main-content w-full pb-8 min-h-screen"
      style="background-image: url('/images/book12.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">

      
    <div class="mt-4 grid grid-cols-12 gap-4 px-[var(--margin-x)] transition-all duration-[.25s] sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
      <div class="col-span-12 lg:col-span-8">
        
        <div class="flex items-center justify-between space-x-2">
          <h2 class="text-base font-medium tracking-wide text-slate-800 line-clamp-1 dark:text-navy-100">
            Books Overview
          </h2>
          <div x-data="{ activeTab: 'tabRecent' }"
               class="is-scrollbar-hidden overflow-x-auto rounded-lg bg-slate-200 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
            <div class="tabs-list flex p-1">
              <!-- Tabs Placeholder -->
            </div>
          </div>
        </div>

        <!-- Filters & Table Wrapper -->
        <div x-data="{ isFilterExpanded: false }">
          <div class="flex items-center justify-between">
            <div class="flex">
              <!-- Search Input -->
              <div class="flex items-center" x-data="{ isInputActive: false }">
                <label class="block">
                  <input
                    x-effect="isInputActive === true && $nextTick(() => { $el.focus() });"
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
                  <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
                </button>
              </div>

              <!-- Filter Toggle -->
              <button
                @click="isFilterExpanded = !isFilterExpanded"
                class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
              >
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18 11.5H6M21 4H3m6 15h6" />
                </svg>
              </button>
            </div>
          </div>

          <!-- Table & Modal -->
          <div x-data="bookModal()">
            <div class="card mt-3">
              <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                <table class="is-hoverable w-full text-left">
                  <thead>
                    <tr>
                      <th class="bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">Title</th>
                      <th class="bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">Author</th>
                      <th class="bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">Language</th>
                      <th class="bg-slate-200 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5">Book File</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($books as $book)
                      <tr class="border-t border-gray-600 hover:bg-gray-700">
                        <td @click="fetchDetails({{ $book['id'] }})" class="px-6 py-4 cursor-pointer text-primary hover:underline">
                          {{ $book['book_title'] ?? '-' }}
                        </td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $book['author_name'] ?? 'N/A' }}</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{ $book['book_language'] ?? '-' }}</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                          @if (!empty($book['processed']) && !empty($book['filename']))
                            <a href="{{ url('/download-book/' . $book['id']) }}" target="_blank" title="Scarica PDF">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400 hover:text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6 2a2 2 0 0 0-2 2v16c0 1.103.897 2 2 2h12a2 2 0 0 0 2-2V8.414A1.99 1.99 0 0 0 19.586 7L15 2.414A1.99 1.99 0 0 0 13.586 2H6zm7 1.414L18.586 9H14a1 1 0 0 1-1-1V3.414zM8 13h1.5a1.5 1.5 0 0 1 0 3H8v-3zm3 0h1v3h-1v-3zm2.5 0H15a1 1 0 0 1 0 2h-1v1h-1.5v-3z" />
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

              <!-- Pagination (Static) -->
              <div class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5">
                <div class="text-xs-plus">1 - 10 of 10 entries</div>
                <ol class="pagination space-x-1.5">
                  <!-- Pagination items -->
                </ol>
              </div>

              <!-- Modal -->
              <div x-show="open" class="fixed inset-0 bg-white bg-opacity-90 flex justify-center items-center z-50" x-transition style="display: none;" @click="open = false">
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
            </div>
          </div>
        </div>

        <!-- Footer Icon -->
        <div class="flex flex-col sm:flex-row sm:space-x-7">
          <div class="mt-4 flex shrink-0 flex-col items-center sm:items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-8 text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
            </svg>
          </div>
        </div>
      </div>
    </div>

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
        };
      }
    </script>
  </main>
</x-app-layout>
