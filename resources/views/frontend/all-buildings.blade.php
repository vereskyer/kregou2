@include('layouts.header')


<main class="mt-6">
    @include('layouts.hero')
    {{-- hero section end --}}

    {{-- buildings 展示頁面 --}}
    <div class="w-full dark:bg-gray-800">

        <div class="mx-auto max-w-7xl px-6 lg:px-8 pt-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    韓國東大門女裝，南大門童裝
                </h2>
                <p class="mt-2 text-lg leading-8 text-gray-600 dark:text-gray-300">
                    韓國東大門女裝，南大門童裝批發，玩具街兒童文具玩具雜貨批發
                </p>
            </div>
            <div
                class="mx-auto mt-8 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-12 lg:mx-0 lg:max-w-none lg:grid-cols-3 ">
                <!-- First blog post -->
                @foreach ($buildings as $building)
                    <article
                        class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 dark:bg-gray-700 px-8 py-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
                        <img src="{{ asset($building->image) }}"
                            alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        <div
                            class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-gray-300">
                            <time datetime="2023-10-11" class="mr-8">{{ $building->name }}</time>
                            <div class="-ml-4 flex items-center gap-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                                </svg>


                                <div class="flex gap-x-2.5">
                                    {{ $building->tag }}
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                            <span class="absolute inset-0"></span>
                            {{ $building->description }}
                        </h3>
                    </article>
                @endforeach


                <!-- Second blog post -->

            </div>
        </div>

    </div>
    <div class="mt-5" id="pagination">
        {{ $buildings->links() }}
    </div>
</main>

@include('layouts.footer')
