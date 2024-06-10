@extends('layouts.header')

@section('title', '韓國代購好物推薦')

@section('content')

    <main class="mt-6">

        <!-- 悬浮按钮 -->
        {{-- <button class="fixed bottom-5 right-5 bg-yellow-500 text-white rounded-full p-4 shadow-lg z-50">
        +
    </button> --}}

        @foreach ($gooditems as $gooditem)
            <section class="sm:mt-5 lg:mt-5 mt-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border border-gray-300">
                <div
                    class="my-10 mx-auto max-w-7xl px-4 sm:mt-5 sm:px-6 md:mt-5 lg:mt-5 lg:px-8 xl:mt-5 flex gap-3 lg:flex-justify lg:flex flex-col lg:flex-row">
                    <!-- Image Section -->
                    <div class="lg:-ml-10 lg:inset-y-0 lg:left-0 lg:w-1/2 my-4">
                        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                            src="{{ asset($gooditem->image) }}" alt="">
                    </div>
                    <!-- End of Image Section -->

                    <div class="ml-10 mt-10 sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                            {{ $gooditem->title }}
                        </h1>
                        <p
                            class="mt-10 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            {{ $gooditem->content }}
                        </p>
                        <!-- Button Section -->
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                @if ($gooditem->url)
                                    <a href="{{ $gooditem->url }}" target="_blank"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-600 md:py-4 md:text-lg md:px-10">
                                        官網鏈接
                                    </a>
                                @endif
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                @if ($gooditem->buy_url)
                                    <a href="{{ $gooditem->buy_url }}" target="_blank"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                        購買鏈接
                                    </a>
                                @endif

                            </div>
                            {{-- <div class="mt-3 sm:mt-0 sm:ml-3">
                                <!-- Open the modal using ID.showModal() method -->
                                <button
                                    class="btn w-full h-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10"
                                    onclick="my_modal_2.showModal()">open modal</button>
                                <dialog id="my_modal_2" class="modal">
                                    <div class="modal-box">
                                        <h3 class="font-bold text-lg">Hello!</h3>
                                        <p class="py-4">Press ESC key or click outside to close</p>
                                    </div>
                                    <form method="dialog" class="modal-backdrop">
                                        <button>close</button>
                                    </form>
                                </dialog>

                            </div> --}}


                        </div>
                        <!-- End of Button Section -->
                    </div>
                </div>

                
            </section>

            
        @endforeach
        <div class="mt-5" id="pagination">
            {{ $gooditems->links() }}
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

    @endsection
