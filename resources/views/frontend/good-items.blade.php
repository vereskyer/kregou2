@include('layouts.header')

<main class="mt-6">
    @include('layouts.hero')
    {{-- hero section end --}}

    <section class="text-gray-600 body-font">
        {{-- 可以当作hot items 模板来试试 --}}
        <div class="bg-white dark:bg-gray-800 flex relative z-20 items-center overflow-hidden">
            <div class="container mx-auto px-6 flex flex-col lg:flex-row relative py-16">
                <div class="lg:w-2/5 flex flex-col relative z-20 mb-10 lg:mb-0">
                    <span class="w-20 h-2 bg-gray-800 dark:bg-white mb-12"></span>
                    <h1 class="font-bebas-neue uppercase text-6xl sm:text-8xl font-black flex flex-col leading-none dark:text-white text-gray-800">
                        Be on
                        <span class="text-5xl sm:text-7xl">Time</span>
                    </h1>
                    <p class="text-sm sm:text-base text-gray-700 dark:text-white">
                        Dimension of reality that makes change possible and understandable. An indefinite and homogeneous environment in which natural events and human existence take place.
                    </p>
                    <div class="flex mt-8">
                        <a href="#" class="uppercase py-2 px-4 rounded-lg bg-pink-500 border-2 border-transparent text-white text-md mr-4 hover:bg-pink-400">
                            Get started
                        </a>
                        <a href="#" class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-pink-500 text-pink-500 dark:text-white hover:bg-pink-500 hover:text-white text-md">
                            Read more
                        </a>
                    </div>
                </div>
                <div class="lg:w-3/5 flex justify-center lg:justify-end relative mt-5">
                    <img src="https://www.tailwind-kit.com/images/object/10.png" class="max-w-xs md:max-w-sm lg:max-w-md m-auto"/>
                </div>
            </div>
        </div>

        <div class="mt-5" id="pagination">
            {{-- {{ $stores->links() }} --}}
        </div>
    </section>
</main>

@include('layouts.footer')
