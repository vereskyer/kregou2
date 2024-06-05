@include('layouts.header')


<main class="mt-6">
    @include('layouts.hero')

    {{-- hero section end --}}


    <!-- source: https://flowrift.com/c/logo-cloud/atJUX?view=code -->

    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="mb-4 flex flex-col items-center md:mb-8 lg:flex-row lg:justify-between">
                <h2 class="mb-2 text-center text-2xl font-bold text-gray-800 lg:mb-0 lg:text-3xl">
                    韓國網站導航
                </h2>

                <p class="max-w-md text-center text-gray-400 lg:text-right">
                    我們將平時常常用到的韓國網站收集整合，方便大家使用
                </p>
            </div>

            <div class="grid grid-cols-2 gap-4 rounded-lg md:grid-cols-3 lg:gap-6">
                <!-- logo - start -->
                @foreach ($websites as $website)
                    <div
                        class="flex flex-col items-center justify-center h-16 p-4 text-gray-400 bg-gray-100 rounded-lg sm:h-32">
                        <a href="{{ $website->url }}" class="text-center cursor-pointer" target="_blank">
                            <h1 class="text-xl font-bold text-gray-900 sm:text-3xl">{{ $website->name }}</h1>
                            <h3 class="text-md font-medium text-gray-900 sm:text-lg">{{ $website->description }}</h3>
                        </a>
                    </div>
                @endforeach
                <!-- logo - end -->

            </div>
        </div>
    </div>

    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        {{ $websites->links() }}
    </div>


    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("imageSlider", () => ({
                currentIndex: 1,
                images: [
                    "https://unsplash.it/640/425?image=30",
                    "https://unsplash.it/640/425?image=40",
                    "https://unsplash.it/640/425?image=50",
                ],
                previous() {
                    if (this.currentIndex > 1) {
                        this.currentIndex = this.currentIndex - 1;
                    }
                },
                forward() {
                    if (this.currentIndex < this.images.length) {
                        this.currentIndex = this.currentIndex + 1;
                    }
                },
            }));
        });
    </script>

</main>




    @include('layouts.footer')
