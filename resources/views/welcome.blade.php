@include('layouts.header')


<main class="mt-6">
    @include('layouts.hero')
    {{-- hero section end --}}
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/420x260">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/421x261">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                        <p class="mt-1">$21.15</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/422x262">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                        <p class="mt-1">$12.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/423x263">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                        <p class="mt-1">$18.40</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/424x264">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/425x265">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                        <p class="mt-1">$21.15</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/427x267">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                        <p class="mt-1">$12.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                            src="https://dummyimage.com/428x268">
                    </a>
                    <div class="mt-4">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                        <p class="mt-1">$18.40</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- buttons -->
        <div class="p-4">
            <button class="btn btn-primary">primary</button>
            <button class="btn btn-secondary">secondary</button>
            <button class="btn btn-accent">accent</button>
        </div>

        <!-- same buttons with another theme! -->
        <div class="p-4" data-theme="cupcake">
            <button class="btn btn-primary">Primary</button>
            <button class="btn btn-secondary">Secondary</button>
            <button class="btn btn-accent">Accent</button>
        </div>

        <!-- Open the modal using ID.showModal() method -->
        <button class="btn" onclick="my_modal_1.showModal()">open modal</button>
        <dialog id="my_modal_1" class="modal">
            <form method="dialog" class="modal-box">
                <p class="py-4">Press ESC key or click the button below to close</p>
                <div class="modal-action">
                    <button class="btn">Close</button>
                </div>
            </form>
        </dialog>


        <div class="card card-side bg-base-100 shadow-xl">
            <figure><img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg"
                    alt="Movie" /></figure>
            <div class="card-body">
                <h2 class="card-title">New movie is released!</h2>
                <p>Click the button to watch on Jetflix app.</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Watch</button>
                </div>
            </div>
        </div>







        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-5">

            <div
                class="stat border border-gray-300 rounded-lg p-4 hover:bg-gray-100 hover:border-gray-400 hover:shadow-lg transition-all duration-200">
                <div class="stat-figure text-secondary">
                    <button class="btn btn-primary btn-sm">Follow</button>
                </div>
                <div class="stat-value">Howluk 하우룩</div>
                <div class="stat-title">apm 2F 202</div>
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


            <div
                class="stat border border-gray-300 rounded-lg p-4 hover:bg-gray-100 hover:border-gray-400 hover:shadow-lg transition-all duration-200">
                <div class="stat-figure text-secondary">
                    <button class="btn btn-primary btn-sm">Follow</button>
                </div>
                <div class="stat-value">Howluk 하우룩</div>
                <div class="stat-title">apm 2F 202</div>
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


            <div
                class="stat border border-gray-300 rounded-lg p-4 hover:bg-gray-100 hover:border-gray-400 hover:shadow-lg transition-all duration-200">
                <div class="stat-figure text-secondary">
                    <button class="btn btn-primary btn-sm">Follow</button>
                </div>
                <div class="stat-value">Howluk 하우룩</div>
                <div class="stat-title">apm 2F 202</div>
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


            <div
                class="stat border border-gray-300 rounded-lg p-4 hover:bg-gray-100 hover:border-gray-400 hover:shadow-lg transition-all duration-200">
                <div class="stat-figure text-secondary">
                    <button class="btn btn-primary btn-sm">Follow</button>
                </div>
                <div class="stat-value">Howluk 하우룩</div>
                <div class="stat-title">apm 2F 202</div>
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

        </div>

        {{-- button  --}}
        <div class="relative inline-flex group mt-5">
            <div
                class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-[#44BCFF] via-[#FF44EC] to-[#FF675E] blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
            </div>
            <a href="#" title="Get quote now"
                class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-purple-900 font-pj focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                role="button"> Code Eating Ants
            </a>
        </div>

    </section>

    <div class="grid mt-8 gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
        <article class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2" data-testid="postItem">
            <button title="How to develop a smart contract on Berachain with Solidity" class="focus-outline absolute inset-0 h-full w-full"></button>
            <div class="flex flex-1 flex-col">
                <div class="flex flex-col mx-2">
                    <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                        <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline" href="https://app.daily.dev/sources/coinsbench">
                            <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar" alt="coinsbench's profile" src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                        </a>
                        <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible" data-testid="cardHeaderActions">
                            <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                Read post
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                    <path d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    <h3 class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                        How to develop a smart contract on Berachain with Solidity
                    </h3>
                </div>
                <div class="relative flex flex-1 flex-col">
                    <div class="pointer-events-none relative flex flex-1">
                        <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post" alt="Post Cover image" src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                    </div>
                    <div class="ml-3 flex flex-row items-center justify-between">
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                            <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-upvote-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                            <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-comment-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                            <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2" data-testid="postItem">
            <button title="How to develop a smart contract on Berachain with Solidity" class="focus-outline absolute inset-0 h-full w-full"></button>
            <div class="flex flex-1 flex-col">
                <div class="flex flex-col mx-2">
                    <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                        <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline" href="https://app.daily.dev/sources/coinsbench">
                            <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar" alt="coinsbench's profile" src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                        </a>
                        <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible" data-testid="cardHeaderActions">
                            <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                Read post
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                    <path d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    <h3 class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                        How to develop a smart contract on Berachain with Solidity
                    </h3>
                </div>
                <div class="relative flex flex-1 flex-col">
                    <div class="pointer-events-none relative flex flex-1">
                        <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post" alt="Post Cover image" src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                    </div>
                    <div class="ml-3 flex flex-row items-center justify-between">
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                            <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-upvote-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                            <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-comment-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                            <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2" data-testid="postItem">
            <button title="How to develop a smart contract on Berachain with Solidity" class="focus-outline absolute inset-0 h-full w-full"></button>
            <div class="flex flex-1 flex-col">
                <div class="flex flex-col mx-2">
                    <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                        <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline" href="https://app.daily.dev/sources/coinsbench">
                            <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar" alt="coinsbench's profile" src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                        </a>
                        <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible" data-testid="cardHeaderActions">
                            <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                Read post
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                    <path d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    <h3 class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                        How to develop a smart contract on Berachain with Solidity
                    </h3>
                </div>
                <div class="relative flex flex-1 flex-col">
                    <div class="pointer-events-none relative flex flex-1">
                        <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post" alt="Post Cover image" src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                    </div>
                    <div class="ml-3 flex flex-row items-center justify-between">
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                            <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-upvote-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                            <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-comment-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                            <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2" data-testid="postItem">
            <button title="How to develop a smart contract on Berachain with Solidity" class="focus-outline absolute inset-0 h-full w-full"></button>
            <div class="flex flex-1 flex-col">
                <div class="flex flex-col mx-2">
                    <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                        <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline" href="https://app.daily.dev/sources/coinsbench">
                            <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar" alt="coinsbench's profile" src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                        </a>
                        <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible" data-testid="cardHeaderActions">
                            <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                Read post
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                    <path d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    <h3 class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                        How to develop a smart contract on Berachain with Solidity
                    </h3>
                </div>
                <div class="relative flex flex-1 flex-col">
                    <div class="pointer-events-none relative flex flex-1">
                        <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post" alt="Post Cover image" src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                    </div>
                    <div class="ml-3 flex flex-row items-center justify-between">
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                            <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-upvote-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                            <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-comment-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                            <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2" data-testid="postItem">
            <button title="How to develop a smart contract on Berachain with Solidity" class="focus-outline absolute inset-0 h-full w-full"></button>
            <div class="flex flex-1 flex-col">
                <div class="flex flex-col mx-2">
                    <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                        <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline" href="https://app.daily.dev/sources/coinsbench">
                            <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar" alt="coinsbench's profile" src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                        </a>
                        <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible" data-testid="cardHeaderActions">
                            <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                Read post
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                    <path d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </span>
                    </div>
                    <h3 class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                        How to develop a smart contract on Berachain with Solidity
                    </h3>
                </div>
                <div class="relative flex flex-1 flex-col">
                    <div class="pointer-events-none relative flex flex-1">
                        <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post" alt="Post Cover image" src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                    </div>
                    <div class="ml-3 flex flex-row items-center justify-between">
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                            <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-upvote-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                            <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <label for="post-KEXlqdAPA-comment-btn" class="cursor-pointer items-center font-bold typo-callout flex">
                                <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                            </label>
                        </div>
                        <div class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                            <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false" class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                    <path d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z" fill="currentcolor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    


    @include('layouts.footer')
