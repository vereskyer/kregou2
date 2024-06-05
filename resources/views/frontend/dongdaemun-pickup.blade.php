@include('layouts.header')


<main class="mt-6">
    @include('layouts.hero')
    {{-- hero section end --}}
 
    {{-- 視頻播放器-steps --}}
    <div class="p-4 max-w-xl mx-auto dark:bg-gray-800">

        <h3 class="font-heading dark:text-gray-100 mb-8 text-xl font-bold lg:text-2xl">
            東大門女裝，南大門童裝檔口訂貨取貨說明
        </h3>
    
        <div class="flex">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-6 w-6 text-blue-800 dark:text-slate-200">
                            <path d="M12 5v14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="h-full w-px bg-gray-300 dark:bg-slate-500"></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">
                    <span class="text-blue-600">➊</span>
                    首先需要在我們的buy系統，FB登陸（賬戶資金管理都在buy系統）-->
                    <a href="https://s9.buyplus1.com.tw/b/10214181515192392/" target="_blank" class="text-blue-600">
                        點擊註冊</a>
                </p>
    
                <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">
                    Buy系統登陸以後，請聯繫我們開通賬號。
                </p>
            </div>
        </div>
    
        <div class="flex">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-6 w-6 text-blue-800 dark:text-slate-200">
                            <path d="M12 5v14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="h-full w-px bg-gray-300 dark:bg-slate-500"></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">
                    <span class="text-blue-600">➋</span>
                    其次，需要註冊這個網站的賬號（取貨訂單提交會這裏管理） -->
                    <a href="https://www.daigou82.com/register" target="_blank" class="text-blue-600">
                        點擊註冊</a>
                </p>
            </div>
        </div>
    
        <div class="flex">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-6 w-6 text-blue-800 dark:text-slate-200">
                            <path d="M12 5v14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="h-full w-px bg-gray-300 dark:bg-slate-500"></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">
                    <span class="text-blue-600">➌</span>
                    第二步註冊以後 -->
                    <a href="https://www.daigou82.com/login" target="_blank" class="text-blue-600">
                        點擊登陸</a>
                </p>
                <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">
                    在用戶中心，點擊 Shop Orders，就可以看到"添加新的取貨"
                </p>
    
                <img src="{{ asset('uploads/shoporder.png') }}" alt="daigou82.com" class="w-full mt-5">
    
            </div>
        </div>
    
        <div class="flex">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-6 w-6 text-blue-800 dark:text-slate-200">
                            <path d="M12 5v14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="h-full w-px bg-gray-300 dark:bg-slate-500"></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">
                    <span class="text-blue-600">➍</span>
                    添加新的取貨，如果我們數據庫中已經保存了相關的檔口。那麼只要輸入部分檔口的名稱，就可以自動填入表格。
                    如果沒有的話，需要手工添加表格相關的內容。或者也可以聯繫我們添加相關的檔口。
                </p>
    
                <video class="w-full rounded-lg" style="height: 80%;" controls>
                    <source src="{{ asset('uploads/pickup-dongdaemun.webm') }}" type="video/webm" />
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    
        <div class="flex">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-6 w-6 text-blue-800 dark:text-slate-200">
                            <path d="M12 5v14"></path>
                            <path d="M18 13l-6 6"></path>
                            <path d="M6 13l6 6"></path>
                        </svg>
                    </div>
                </div>
                <div class="h-full w-px bg-gray-300 dark:bg-slate-500"></div>
            </div>
            <div class="pt-1 pb-8">
                <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">
                    <span class="text-blue-600">➎</span>
                    第二天可以查看取貨訂單的狀態。沒有標註狀態的，即代表已經正常取貨。
                </p>
    
                <img src="{{ asset('uploads/shoporder-status.png') }}" alt="daigou82.com" class="w-full mt-5">

            </div>
        </div>
    
        <div class="flex">
            <div class="mr-4 flex flex-col items-center">
                <div>
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-blue-900 bg-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="h-6 w-6 text-white dark:text-slate-200">
                            <path d="M5 12l5 5l10 -10"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="pt-1">
                <p class="mb-2 text-xl font-bold text-gray-900 dark:text-slate-300">
                    <span class="text-blue-600">➏</span>
                    正常取貨成功的，會入單在buy系統，進行扣款部分的處理。-->
                    <a href="https://s9.buyplus1.com.tw/b/10214181515192392/" target="_blank" class="text-blue-600">
                        登陸buy查看賬戶明細</a>
                </p>
            </div>
        </div>
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






    @include('layouts.footer')
