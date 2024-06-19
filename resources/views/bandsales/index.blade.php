@extends('layouts.header')

@section('title', '韓國代購好物推薦')

@section('content')

    <main class="mt-6">

        <!-- 悬浮按钮 -->
        {{-- <button class="fixed bottom-5 right-5 bg-yellow-500 text-white rounded-full p-4 shadow-lg z-50">
        +
    </button> --}}

        @foreach ($bandsales as $bandsale)
        <section class="sm:mt-5 lg:mt-5 mt-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border border-gray-300">
            <div class="my-10 mx-auto max-w-7xl px-4 sm:mt-5 sm:px-6 md:mt-5 lg:mt-5 lg:px-8 xl:mt-5 flex gap-3 lg:flex-justify lg:flex flex-col lg:flex-row">
                <!-- Image Section -->
                <div class="lg:-ml-10 lg:inset-y-0 lg:left-0 lg:w-1/2 my-4">
                    <img class="w-[360px] h-56 object-cover sm:h-72 md:h-96 lg:h-full" src="{{ asset($bandsale->image) }}" alt="">
                </div>
                <!-- End of Image Section -->
        
                <div class="ml-10 mt-10 sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                        {{ $bandsale->title }}
                    </h1>
        
                    <!-- Button Section -->
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            @if ($bandsale->url)
                                <a href="{{ $bandsale->url }}" target="_blank" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-600 md:py-4 md:text-lg md:px-10">
                                    參考網站
                                </a>
                            @endif
                        </div>
        
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="{{ route('band-sales.show', $bandsale->id) }}" target="_blank" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-blue-200 hover:bg-indigo-500 md:py-4 md:text-lg md:px-10">
                                詳細介紹
                            </a>
                        </div>

                        
        
                        {{-- <div class="mt-3 sm:mt-0 sm:ml-3">
                            <!-- Open the modal using ID.showModal() method -->
                            <button class="btn w-full h-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10" onclick="my_modal_2.showModal()">open modal</button>
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

                    <div class="bg-blue-100 rounded-lg py-5 px-6 text-base text-blue-700 mt-3 mb-3" role="alert">
                        詳細介紹中會標註拿貨條件，但是每個單品一般都需要一些數量。所以只是開放給能大量拿貨的朋友。
                    </div>
                   
                </div>
            </div>
        </section>
        
        @endforeach
        <div class="mt-5" id="pagination">
            {{ $bandsales->links() }}
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
