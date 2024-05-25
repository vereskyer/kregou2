@include('layouts.header')


<main class="mt-6">
    @include('layouts.hero')
    {{-- hero section end --}}


    <div class="w-11/12 md:w-3/4 lg:max-w-3xl m-auto">
        <div class="relative z-30 text-base text-black">
            <input type="text" value="" placeholder="搜索心儀檔口..."
                class="mt-2 shadow-md focus:outline-none rounded-2xl py-3 px-6 block w-full">
            <div
                class="text-left absolute top-10 rounded-t-none rounded-b-2xl shadow bg-white divide-y w-full max-h-40 overflow-auto">
            </div>
        </div>
    </div>


    <section class="text-gray-600 body-font">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-5">

            @foreach ($stores as $store)
                <div
                    class="stat border border-gray-300 rounded-lg p-4 hover:bg-gray-100 hover:border-gray-400 hover:shadow-lg transition-all duration-200">
                    <div class="stat-figure text-secondary">
                        <button class="btn btn-primary btn-sm">Follow</button>
                    </div>
                    <div class="stat-value text-lg">{{ $store->store_name }}</div>
                    <div class="stat-title">{{ $store->building->name }}. {{ $store->floor }} 樓 {{ $store->position }}
                    </div>
                    <div class="stat-desc text-secondary flex items-center space-x-2 mt-1">
                        <div class="flex items-center flex-grow"> <!-- Updated this line -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <p class="text-sm">查看详细信息会扣1000韩币</p>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="mt-5" id="pagination">
            {{ $stores->links() }}
        </div>

    </section>
</main>

@include('layouts.footer')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if scroll position is stored in local storage
        if (localStorage.getItem('scrollPosition')) {
            // Restore the scroll position
            window.scrollTo(0, localStorage.getItem('scrollPosition'));
            // Remove the scroll position from local storage
            localStorage.removeItem('scrollPosition');
        }

        // Add click event listener to pagination links
        document.querySelectorAll('#pagination a').forEach(function(paginationLink) {
            paginationLink.addEventListener('click', function(event) {
                // Save the current scroll position in local storage
                localStorage.setItem('scrollPosition', window.scrollY);
            });
        });
    });
</script>
