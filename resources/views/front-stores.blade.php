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
                        <button class="btn btn-primary btn-md">詳細信息</button>
                    </div>
                    <div class="stat-value text-lg">{{ $store->store_name }}</div>
                    <div class="stat-title">{{ $store->building->name }}. {{ $store->floor }} 樓 {{ $store->position }}
                    </div>
                    <div class="stat-desc text-secondary flex items-center space-x-2 mt-1">
                        <div class="flex items-center flex-grow"> <!-- Updated this line -->
                            {{-- handphone  --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                            {{-- kakao --}}
                            <svg class="w-5 h-5" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
                                fill="#000000">
                                <path
                                    d="M128 36C70.562 36 24 72.713 24 118c0 29.279 19.466 54.97 48.748 69.477-1.593 5.494-10.237 35.344-10.581 37.689 0 0-.207 1.762.934 2.434s2.483.15 2.483.15c3.272-.457 37.943-24.811 43.944-29.04 5.995.849 12.168 1.29 18.472 1.29 57.438 0 104-36.712 104-82 0-45.287-46.562-82-104-82z">
                                </path>
                                <path fill="#FFE812"
                                    d="M70.5 146.625c-3.309 0-6-2.57-6-5.73V105.25h-9.362c-3.247 0-5.888-2.636-5.888-5.875s2.642-5.875 5.888-5.875h30.724c3.247 0 5.888 2.636 5.888 5.875s-2.642 5.875-5.888 5.875H76.5v35.645c0 3.16-2.691 5.73-6 5.73zM123.112 146.547c-2.502 0-4.416-1.016-4.993-2.65l-2.971-7.778-18.296-.001-2.973 7.783c-.575 1.631-2.488 2.646-4.99 2.646a9.155 9.155 0 0 1-3.814-.828c-1.654-.763-3.244-2.861-1.422-8.52l14.352-37.776c1.011-2.873 4.082-5.833 7.99-5.922 3.919.088 6.99 3.049 8.003 5.928l14.346 37.759c1.826 5.672.236 7.771-1.418 8.532a9.176 9.176 0 0 1-3.814.827c-.001 0 0 0 0 0zm-11.119-21.056L106 108.466l-5.993 17.025h11.986zM138 145.75c-3.171 0-5.75-2.468-5.75-5.5V99.5c0-3.309 2.748-6 6.125-6s6.125 2.691 6.125 6v35.25h12.75c3.171 0 5.75 2.468 5.75 5.5s-2.579 5.5-5.75 5.5H138zM171.334 146.547c-3.309 0-6-2.691-6-6V99.5c0-3.309 2.691-6 6-6s6 2.691 6 6v12.896l16.74-16.74c.861-.861 2.044-1.335 3.328-1.335 1.498 0 3.002.646 4.129 1.772 1.051 1.05 1.678 2.401 1.764 3.804.087 1.415-.384 2.712-1.324 3.653l-13.673 13.671 14.769 19.566a5.951 5.951 0 0 1 1.152 4.445 5.956 5.956 0 0 1-2.328 3.957 5.94 5.94 0 0 1-3.609 1.211 5.953 5.953 0 0 1-4.793-2.385l-14.071-18.644-2.082 2.082v13.091a6.01 6.01 0 0 1-6.002 6.003z">
                                </path>
                                </g>
                            </svg>
                            {{-- wechat  --}}
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" aria-label="WeChat" role="img"
                                viewBox="0 0 512 512" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect width="512" height="512" rx="15%" fill="#00c70a"></rect>
                                    <path
                                        d="M402 369c23-17 38 -42 38 -70c0-51 -50 -92 -111 -92s-110 41-110 92s49 92 110 92c13 0 25-2 36 -5c4-1 8 0 9 1l25 14c3 2 6 0 5-4l-6-22c0-3 2 -5 4 -6m-110-85a15 15 0 110-29a15 15 0 010 29m74 0a15 15 0 110-29a15 15 0 010 29">
                                    </path>
                                    <path
                                        d="m205 105c-73 0-132 50-132 111 0 33 17 63 45 83 3 2 5 5 4 10l-7 24c-1 5 3 7 6 6l30-17c3-2 7-3 11-2 26 8 48 6 51 6-24-84 59-132 123-128-10-52-65-93-131-93m-44 93a18 18 0 1 1 0-35 18 18 0 0 1 0 35m89 0a18 18 0 1 1 0-35 18 18 0 0 1 0 35">
                                    </path>
                                </g>
                            </svg>
                            {{-- instagram --}}
                            <svg class="w-5 h-5" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <rect x="2" y="2" width="28" height="28" rx="6"
                                        fill="url(#paint0_radial_87_7153)"></rect>
                                    <rect x="2" y="2" width="28" height="28" rx="6"
                                        fill="url(#paint1_radial_87_7153)"></rect>
                                    <rect x="2" y="2" width="28" height="28" rx="6"
                                        fill="url(#paint2_radial_87_7153)"></rect>
                                    <path
                                        d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z"
                                        fill="white"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z"
                                        fill="white"></path>
                                    <defs>
                                        <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)">
                                            <stop stop-color="#B13589"></stop>
                                            <stop offset="0.79309" stop-color="#C62F94"></stop>
                                            <stop offset="1" stop-color="#8A3AC8"></stop>
                                        </radialGradient>
                                        <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)">
                                            <stop stop-color="#E0E8B7"></stop>
                                            <stop offset="0.444662" stop-color="#FB8A2E"></stop>
                                            <stop offset="0.71474" stop-color="#E2425C"></stop>
                                            <stop offset="1" stop-color="#E2425C" stop-opacity="0"></stop>
                                        </radialGradient>
                                        <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1"
                                            gradientUnits="userSpaceOnUse"
                                            gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)">
                                            <stop offset="0.156701" stop-color="#406ADC"></stop>
                                            <stop offset="0.467799" stop-color="#6A45BE"></stop>
                                            <stop offset="1" stop-color="#6A45BE" stop-opacity="0"></stop>
                                        </radialGradient>
                                    </defs>
                                </g>
                            </svg>
                            {{-- site      --}}
                            <svg class="w-5 h-5" fill="orange" height="200px" version="1.1"
                                id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 360" xml:space="preserve"
                                stroke="#0e1ce1">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M352.163,163.115L198.919,9.871c-10.449-10.449-27.389-10.449-37.838,0L7.837,163.115c-7.652,7.652-9.94,19.16-5.8,29.158 c4.142,9.998,13.898,16.516,24.719,16.516h20.762v114.574c0,19.112,15.493,34.603,34.603,34.603h195.758 c19.11,0,34.603-15.492,34.603-34.603V208.789h20.762c10.821,0,20.578-6.519,24.719-16.516 C362.103,182.275,359.815,170.767,352.163,163.115z M220.431,307.785h-80.862v-45.583c0-22.33,18.102-40.431,40.431-40.431 s40.431,18.1,40.431,40.431V307.785z">
                                    </path>
                                </g>
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
