@extends('layouts.header')

@section('title', '韓國發臺灣/香港空運/海運運費說明')

@section('script')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

@endsection

@section('content')
    <main class="mt-10">

        {{-- 測試運費圖片 --}}


        <section class="bg-white">
            <div class="w-full h-full mx-auto max-w-xl flex flex-col lg:h-svh justify-center py-24 lg:py-96 relative p-8 mt-10">
                <div class="prose text-gray-500 prose-sm prose-headings:font-normal prose-headings:text-xl">
                    <div>
                        <p class="tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                            韓國->臺灣/香港->空運/海運</p>
                        <p class="text-balance mt-3">
                            韓國發往臺灣以及香港空運服務。相比較來說，會比東大門包裝店的運費便宜點點。
                        </p>
                        <p class="text-balance mt-3">
                            同時我們還提供韓國發往臺灣海快運服務。一般來說，每週會發一次。相比較空運，海快的價格比空運的價格便宜很多。對於比較有重量的產品，
                            海快比較有優勢。
                        </p>
                        <p class="text-balance mt-3">
                            韓國發臺灣/香港空運/海運的運費，經常會隨着航空公司的價格調整而改動。所以具體運費價格請諮詢客服。
                        </p>
                    </div>
                </div>
                <div class="mt-6 border-t pt-12">
                    <!-- Starts component -->
                    <div x-data="{ currentImage: null }" x-init="() => {
                        window.addEventListener('keydown', (event) => {
                            if (event.key === 'Escape') {
                                currentImage = null;
                            }
                        });
                    }">
                        <div class="grid grid-cols-5 gap-4">
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-2.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-2.png') }}" alt="Image 1"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-3.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-2.png') }}" alt="Image 2"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-3.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-3.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>

                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-4.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-4.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>

                            

                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-5.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-5.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>

                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-6.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-6.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-7.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-7.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-8.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-8.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-9.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-9.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-10.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-10.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-11.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-11.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-12.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-12.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-13.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-13.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-14.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-14.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-15.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-15.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-16.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-16.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-17.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-17.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-18.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-18.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-19.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-19.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <div x-on:click="currentImage = '/images/yunfei/韓國-臺灣香港-空運海運-集韻-20.png'" class="cursor-pointer">
                                <img src="{{ asset('images/yunfei/韓國-臺灣香港-空運海運-集韻-20.png') }}" alt="Image 3"
                                    class="w-full h-auto aspect-[3/4] object-cover">
                            </div>
                            <!-- Add more image placeholders as needed -->
                        </div> <!-- Modal -->
                        <div x-show="currentImage"
                            class="fixed inset-0 flex items-center justify-center bg-gray-200 bg-opacity-80 transition-opacity duration-300"
                            role="dialog" aria-modal="true" aria-labelledby="modal-title" style="display: none;">
                            <div @click.away="currentImage = null" class="max-w-full max-h-full overflow-auto py-12"
                                tabindex="-1" aria-labelledby="modal-title" aria-describedby="modal-description">
                                <div
                                    class="prose text-gray-500 mx-auto prose-sm prose-headings:font-normal prose-headings:text-xl">
                                    <div class="text-center max-w-sm mx-auto">
                                        {{-- <h1>The modal</h1> --}}
                                        {{-- <p class="text-balance">
                                            To close the modal, click outside the modal, press ESC, or
                                            click the close button.
                                        </p> --}}
                                    </div>
                                </div>
                                <button @click="currentImage = null"
                                    class="rounded-full bg-orange-600 px-8 py-2 h-12 text-sm font-semibold flex items-center
                                    text-white hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 justify-center mx-auto w-auto
                                    focus:ring-offset-2">
                                    Close
                                </button>
                                <img :src="currentImage" alt="Full Size Image"
                                    class="max-w-full max-h-full mx-auto mt-12">
                            </div>
                        </div>
                    </div> <!-- Ends component -->

                </div>
            </div>
        </section>





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
