@extends('layouts.header')

@section('title', '韓國網站導航')

@section('content')


    <main class="mt-6">
        @include('layouts.hero')

        {{-- hero section end --}}


        <!-- source: https://flowrift.com/c/logo-cloud/atJUX?view=code -->

        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mb-4 flex flex-col items-center md:mb-8 lg:flex-row lg:justify-between">
                <div class="mt-10 flex flex-col items-center lg:items-start lg:flex-row lg:justify-between w-full">
                    <h2 class="mb-2 text-center text-2xl font-bold text-gray-800 lg:mb-0 lg:text-3xl">
                        韓國網站導航
                    </h2>
                    <a href="{{ route('user.siteorder.create') }}" class="btn btn-outline btn-secondary lg:ml-auto mt-4 lg:mt-0 flex items-center justify-center whitespace-nowrap">
                        提交韓國網站代購表單，韓國零售網站均可代購
                    </a>
                </div>
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

@endsection
