
<!-- WILLY -->
<x-app-layout title="Dashboard" is-header-blur="true">
  <main class="main-content w-full pb-8">

    <h2 class="text-center text-2xl font-semibold text-slate-800 dark:text-navy-100 mb-6 mt-8">
      Books Overview
    </h2>

    <script>
      window.booksData = @json($books);
    </script>

    <div x-data="bookApp({ books: window.booksData })" class="max-w-4xl mx-auto">
      <div class="card mt-3">
        <div class="is-scrollbar-hidden overflow-x-auto">
          <!-- <table class="is-hoverable w-full text-left">
            <thead>
              <tr>
                <th class="bg-slate-200 px-4 py-3 text-slate-800">Title</th>
                <th class="bg-slate-200 px-4 py-3 text-slate-800">Author</th>
                <th class="bg-slate-200 px-4 py-3 text-slate-800">Language</th>
                <th class="bg-slate-200 px-4 py-3 text-slate-800">Book File</th>
              </tr>
            </thead>
            <tbody>
              <template x-for="book in paginatedBooks" :key="book.id">
                <tr class="border-t border-gray-600 hover:bg-gray-700">
                  <td
                    class="px-6 py-4 cursor-pointer text-primary hover:underline"
                    @click="fetchDetails(book.id)"
                    x-text="book.book_title"
                  ></td>
                  <td class="whitespace-nowrap px-4 py-3" x-text="book.author_name ?? 'N/A'"></td>
                  <td class="whitespace-nowrap px-4 py-3" x-text="book.book_language ?? '-'"></td>
                  <td class="whitespace-nowrap px-4 py-3">
                    <template x-if="book.processed && book.filename">
                      <a :href="`/download-book/${book.id}`" target="_blank" title="Download PDF">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-400 hover:text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                          <path d="M6 2a2 2 0 0 0-2 2v16c0 1.103.897 2 2 2h12a2 2 0 0 0 2-2V8.414A1.99 1.99 0 0 0 19.586 7L15 2.414A1.99 1.99 0 0 0 13.586 2H6zm7 1.414L18.586 9H14a1 1 0 0 1-1-1V3.414zM8 13h1.5a1.5 1.5 0 0 1 0 3H8v-3zm3 0h1v3h-1v-3zm2.5 0H15a1 1 0 0 1 0 2h-1v1h-1.5v-3z"/>
                        </svg>
                      </a>
                    </template>
                    <template x-if="!(book.processed && book.filename)">
                      <span class="text-yellow-400 font-semibold">Not Ready</span>
                    </template>
                  </td>
                </tr>
              </template>
            </tbody>
          </table> -->
          <!-- Griglia card -->
            <!-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
            <template x-for="book in paginatedBooks" :key="book.id">
                <div
                class="bg-white dark:bg-navy-700 rounded-xl shadow-md p-4 transition hover:shadow-lg hover:ring-1 hover:ring-primary cursor-pointer"
                @click="fetchDetails(book.id)"
                >
                <h3 class="text-lg font-semibold text-primary mb-1" x-text="book.book_title"></h3>
                <p class="text-sm text-slate-500 dark:text-navy-200 mb-2" x-text="'by ' + (book.author_name ?? 'N/A')"></p>
                <p class="text-xs mb-2">
                    <span class="inline-block rounded-full bg-slate-100 dark:bg-navy-600 text-slate-600 dark:text-navy-100 px-2 py-0.5 text-[11px] font-medium"
                        x-text="book.book_language ?? '-'"></span>
                </p>
                <div>
                    <template x-if="book.processed && book.filename">
                    <a :href="`/download-book/${book.id}`"
                        target="_blank"
                        class="inline-flex items-center space-x-1 text-orange-600 hover:text-orange-800 text-sm font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M6 2a2 2 0 0 0-2 2v16c0 1.103.897 2 2 2h12a2 2 0 0 0 2-2V8.414A1.99 1.99 0 0 0 19.586 7L15 2.414A1.99 1.99 0 0 0 13.586 2H6zm7 1.414L18.586 9H14a1 1 0 0 1-1-1V3.414zM8 13h1.5a1.5 1.5 0 0 1 0 3H8v-3zm3 0h1v3h-1v-3zm2.5 0H15a1 1 0 0 1 0 2h-1v1h-1.5v-3z" />
                        </svg>
                        <span>Download PDF</span>
                    </a>
                    </template>
                    <template x-if="!(book.processed && book.filename)">
                    <span class="text-yellow-500 font-semibold text-sm">Not Ready</span>
                    </template>
                </div>
                </div>
            </template>
            </div> -->
        <!-- Griglia card -->
         <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
            <template x-for="book in paginatedBooks" :key="book.id">
              
              <div
                class="relative bg-white dark:bg-navy-700 rounded-lg shadow-md p-0 transition hover:shadow-xl hover:scale-[1.02] hover:ring-2 hover:ring-primary cursor-pointer overflow-hidden group"
                @click="fetchDetails(book.id)"
                style="aspect-ratio: 2 / 3;"
              >

              <!-- 👇 Copertina del libro -->
              <div class="w-full mb-3">
              <!-- finta rilegatura laterale -->
              <div class="absolute top-0 left-0 h-full w-2 bg-slate-300 dark:bg-slate-600 z-10"></div>

            
              <!-- //copertina fake in attesa di db -->
              <img
              :src="book.cover_url || `https://picsum.photos/seed/book${book.id}/300/400`"
              alt="Book Cover"
              class="rounded-md w-full h-48 object-cover"
              />

      </div>

      <h3 class="text-lg font-semibold text-primary mb-1" x-text="book.book_title"></h3>
      <p class="text-sm text-slate-500 dark:text-navy-200 mb-2" x-text="'by ' + (book.author_name ?? 'N/A')"></p>
      <p class="text-xs mb-2">
        <span class="inline-block rounded-full bg-slate-100 dark:bg-navy-600 text-slate-600 dark:text-navy-100 px-2 py-0.5 text-[11px] font-medium"
              x-text="book.book_language ?? '-'"></span>
      </p>
      <div>
        <template x-if="book.processed && book.filename">
          <a :href="`/download-book/${book.id}`"
             target="_blank"
             class="inline-flex items-center space-x-1 text-orange-600 hover:text-orange-800 text-sm font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M6 2a2 2 0 0 0-2 2v16c0 1.103.897 2 2 2h12a2 2 0 0 0 2-2V8.414A1.99 1.99 0 0 0 19.586 7L15 2.414A1.99 1.99 0 0 0 13.586 2H6zm7 1.414L18.586 9H14a1 1 0 0 1-1-1V3.414zM8 13h1.5a1.5 1.5 0 0 1 0 3H8v-3zm3 0h1v3h-1v-3zm2.5 0H15a1 1 0 0 1 0 2h-1v1h-1.5v-3z" />
            </svg>
            <span>Download PDF</span>
          </a>
        </template>
        <template x-if="!(book.processed && book.filename)">
          <span class="text-yellow-500 font-semibold text-sm">Not Ready</span>
        </template>
      </div>
    </div>
  </template>
</div>


        </div>

        <div class="flex justify-between items-center px-4 py-4">
          <div x-text="`${start + 1} - ${end} of books.length entries`"></div>
          <div class="space-x-2">
            <button @click="prevPage" :disabled="currentPage === 0" class="btn">Prev</button>
            <button @click="nextPage" :disabled="end >= books.length" class="btn">Next</button>
          </div>
        </div>
      </div>

      <!-- Modale -->
      <div
        x-show="modalOpen"
        style="display: none;"
        class="fixed inset-0 flex justify-center items-center z-50"
        @click.self="modalOpen = false"
      >
        <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 text-black relative">
          <button @click="modalOpen = false" class="absolute top-2 right-2 text-2xl font-bold">&times;</button>

          <template x-if="modalDetails">
            <div>
              <p><strong>Title:</strong> <span x-text="modalDetails.book_title"></span></p>
              <p><strong>Description:</strong> <span x-text="modalDetails.book_description"></span></p>
              <p><strong>Author:</strong> <span x-text="modalDetails.author_name"></span></p>
              <p><strong>Language:</strong> <span x-text="modalDetails.book_language"></span></p>
              <p><strong>Processed:</strong> <span x-text="modalDetails.processed ? 'Yes' : 'No'"></span></p>
              <p><strong>Filename:</strong> <span x-text="modalDetails.filename || 'N/A'"></span></p>
              <p><strong>Creation Date:</strong> <span x-text="new Date(modalDetails.created_at).toLocaleString()"></span></p>
              <p><strong>Error Message:</strong> <span x-text="modalDetails.error_message || 'None'"></span></p>
            </div>
          </template>

          <template x-if="!modalDetails">
            <p>Loading details...</p>
          </template>
        </div>
      </div>
    </div>

    <script>
      function bookApp({ books }) {
        return {
          books,
          currentPage: 0,
          perPage: 9,
          modalOpen: false,
          modalDetails: null,

          get paginatedBooks() {
            return this.books.slice(this.start, this.end);
          },
          get start() {
            return this.currentPage * this.perPage;
          },
          get end() {
            return Math.min(this.start + this.perPage, this.books.length);
          },
          nextPage() {
            if (this.end < this.books.length) this.currentPage++;
          },
          prevPage() {
            if (this.currentPage > 0) this.currentPage--;
          },

          async fetchDetails(bookId) {
            this.modalOpen = true;
            this.modalDetails = null;
            try {
              const res = await fetch(`/api/books/${bookId}`);
              if (!res.ok) throw new Error('Errore nella richiesta');
              const data = await res.json();
              this.modalDetails = data;
            } catch (e) {
              this.modalDetails = { error_message: 'Errore nel caricamento dei dettagli.' };
            }
          }
        }
      }
    </script>

  </main>
</x-app-layout>
