@include('layouts.header')


<main class="mt-6">
    @include('layouts.hero')

    <!-- 悬浮按钮 -->
    <button class="fixed bottom-5 right-5 bg-yellow-500 text-white rounded-full p-4 shadow-lg z-50">
        +
    </button>
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

        <div class="grid mt-8 gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            <article
                class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2"
                data-testid="postItem">
                <button title="How to develop a smart contract on Berachain with Solidity"
                    class="focus-outline absolute inset-0 h-full w-full"></button>
                <div class="flex flex-1 flex-col">
                    <div class="flex flex-col mx-2">
                        <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                            <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline"
                                href="https://app.daily.dev/sources/coinsbench">
                                <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar"
                                    alt="coinsbench's profile"
                                    src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                            </a>
                            <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible"
                                data-testid="cardHeaderActions">
                                <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                    Read post
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                        <path
                                            d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <h3
                            class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                            How to develop a smart contract on Berachain with Solidity
                        </h3>
                    </div>
                    <div class="relative flex flex-1 flex-col">
                        <div class="pointer-events-none relative flex flex-1">
                            <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post"
                                alt="Post Cover image"
                                src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                        </div>
                        <div class="ml-3 flex flex-row items-center justify-between">
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                                <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-upvote-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                                <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-comment-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                                <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article
                class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2"
                data-testid="postItem">
                <button title="How to develop a smart contract on Berachain with Solidity"
                    class="focus-outline absolute inset-0 h-full w-full"></button>
                <div class="flex flex-1 flex-col">
                    <div class="flex flex-col mx-2">
                        <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                            <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline"
                                href="https://app.daily.dev/sources/coinsbench">
                                <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar"
                                    alt="coinsbench's profile"
                                    src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                            </a>
                            <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible"
                                data-testid="cardHeaderActions">
                                <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                    Read post
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                        <path
                                            d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <h3
                            class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                            How to develop a smart contract on Berachain with Solidity
                        </h3>
                    </div>
                    <div class="relative flex flex-1 flex-col">
                        <div class="pointer-events-none relative flex flex-1">
                            <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post"
                                alt="Post Cover image"
                                src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                        </div>
                        <div class="ml-3 flex flex-row items-center justify-between">
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                                <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-upvote-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                                <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-comment-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                                <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article
                class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2"
                data-testid="postItem">
                <button title="How to develop a smart contract on Berachain with Solidity"
                    class="focus-outline absolute inset-0 h-full w-full"></button>
                <div class="flex flex-1 flex-col">
                    <div class="flex flex-col mx-2">
                        <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                            <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline"
                                href="https://app.daily.dev/sources/coinsbench">
                                <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar"
                                    alt="coinsbench's profile"
                                    src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                            </a>
                            <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible"
                                data-testid="cardHeaderActions">
                                <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                    Read post
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                        <path
                                            d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <h3
                            class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                            How to develop a smart contract on Berachain with Solidity
                        </h3>
                    </div>
                    <div class="relative flex flex-1 flex-col">
                        <div class="pointer-events-none relative flex flex-1">
                            <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post"
                                alt="Post Cover image"
                                src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                        </div>
                        <div class="ml-3 flex flex-row items-center justify-between">
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                                <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-upvote-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                                <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-comment-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                                <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article
                class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2"
                data-testid="postItem">
                <button title="How to develop a smart contract on Berachain with Solidity"
                    class="focus-outline absolute inset-0 h-full w-full"></button>
                <div class="flex flex-1 flex-col">
                    <div class="flex flex-col mx-2">
                        <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                            <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline"
                                href="https://app.daily.dev/sources/coinsbench">
                                <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar"
                                    alt="coinsbench's profile"
                                    src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                            </a>
                            <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible"
                                data-testid="cardHeaderActions">
                                <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                    Read post
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                        <path
                                            d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <h3
                            class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                            How to develop a smart contract on Berachain with Solidity
                        </h3>
                    </div>
                    <div class="relative flex flex-1 flex-col">
                        <div class="pointer-events-none relative flex flex-1">
                            <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post"
                                alt="Post Cover image"
                                src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                        </div>
                        <div class="ml-3 flex flex-row items-center justify-between">
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                                <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-upvote-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                                <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-comment-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                                <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article
                class="group min-h-card snap-start relative max-h-cardLarge h-full flex flex-col p-2 rounded-16 bg-background-subtle border border-border-subtlest-tertiary hover:border-border-subtlest-secondary shadow-2"
                data-testid="postItem">
                <button title="How to develop a smart contract on Berachain with Solidity"
                    class="focus-outline absolute inset-0 h-full w-full"></button>
                <div class="flex flex-1 flex-col">
                    <div class="flex flex-col mx-2">
                        <div class="flex items-center h-8 my-1 mt-2 -mx-1.5">
                            <a aria-label="Coins Bench" class="ml-2 flex min-w-0 shrink items-center no-underline"
                                href="https://app.daily.dev/sources/coinsbench">
                                <img class="object-cover w-8 h-8 rounded-full" loading="lazy" type="avatar"
                                    alt="coinsbench's profile"
                                    src="https://cdn.pixabay.com/photo/2024/03/15/18/53/magnolia-flower-8635583_1280.jpg">
                            </a>
                            <span class="ml-auto flex flex-row laptop:mouse:invisible laptop:mouse:group-hover:visible"
                                data-testid="cardHeaderActions">
                                <a target="_blank" href="https://api.daily.dev/r/KEXlqdAPA"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold h-8 px-3 rounded-10 btn-primary mr-2">
                                    Read post
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 pointer-events-none text-base -mr-2 ml-1">
                                        <path
                                            d="M7.801 6.6c.66 0 1.196.535 1.196 1.196 0 .55-.376 1.02-.912 1.154l-.137.026-.145.009H6.89l-.118.003-.315.02c-.506.06-.92.434-1.028.917l-.022.134-.007.138V17.4c0 .57.399 1.052.927 1.17l.135.023.138.007h7.197c.57 0 1.052-.399 1.17-.917l.022-.131.008-1.352a1.2 1.2 0 012.392-.14l.008.14v1.2a3.602 3.602 0 01-3.18 3.575l-.21.019-.21.006H6.6a3.602 3.602 0 01-3.575-3.18l-.019-.21L3 17.4v-7.203a3.597 3.597 0 013.386-3.59l.211-.007h1.204zM19.797 3a1.2 1.2 0 011.192 1.06l.008.14v8.4a1.2 1.2 0 01-2.392.14l-.008-.14V7.094l-6.012 6.016a1.2 1.2 0 01-1.463.183l-.121-.084-.113-.1a1.2 1.2 0 01-.1-1.583l.1-.113L16.9 5.399l-5.503.001a1.2 1.2 0 01-1.168-.925l-.024-.135-.008-.14a1.2 1.2 0 011.06-1.192l.14-.008h8.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </span>
                        </div>
                        <h3
                            class="multi-truncate font-bold text-text-primary typo-title3 line-clamp-3 mt-2 break-words">
                            How to develop a smart contract on Berachain with Solidity
                        </h3>
                    </div>
                    <div class="relative flex flex-1 flex-col">
                        <div class="pointer-events-none relative flex flex-1">
                            <img loading="lazy" class="w-full my-2 rounded-12 h-40 object-cover" type="post"
                                alt="Post Cover image"
                                src="https://cdn.pixabay.com/photo/2024/05/18/15/41/teeth-8770514_1280.jpg">
                        </div>
                        <div class="ml-3 flex flex-row items-center justify-between">
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-avocado !min-w-[4.625rem]">
                                <button aria-label="Upvote" id="post-KEXlqdAPA-upvote-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M9.456 4.216l-5.985 7.851c-.456.637-.583 1.402-.371 2.108l.052.155a2.384 2.384 0 002.916 1.443l2.876-.864.578 4.042a2.384 2.384 0 002.36 2.047h.234l.161-.006a2.384 2.384 0 002.2-2.041l.576-4.042 2.877.864a2.384 2.384 0 002.625-3.668L14.63 4.33a3.268 3.268 0 00-5.174-.115zm3.57.613c.16.114.298.253.411.411l5.897 7.736a.884.884 0 01-.973 1.36l-3.563-1.069a.884.884 0 00-1.129.722l-.678 4.75a.884.884 0 01-.875.759h-.234a.884.884 0 01-.875-.76l-.679-4.75a.884.884 0 00-1.128-.72l-3.563 1.068a.884.884 0 01-.973-1.36L10.56 5.24a1.767 1.767 0 012.465-.41z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-upvote-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden">3</span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-blueCheese !min-w-[4.625rem]">
                                <button aria-label="Comments" id="post-KEXlqdAPA-comment-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M8.084 3.217a35.447 35.447 0 017.05-.078l.782.078.279.031c1.089.121 1.885.372 2.606.828a4.516 4.516 0 011.664 1.86c.336.69.5 1.423.53 2.361l.005.321v3.975a4.493 4.493 0 01-3.545 4.392l-.207.04-2.089.346-2.86 2.992-.147.135c-.986.789-2.399.623-3.205-.324-.532-.625-.616-1.34-.51-2.29l.029-.224.038-.254.033-.187-1.332-.189a5.011 5.011 0 01-1.677-.55l-.253-.146-.243-.16a4.777 4.777 0 01-1.491-1.721 4.935 4.935 0 01-.532-1.972l-.009-.3V8.618c0-1.096.162-1.915.535-2.683.375-.77.94-1.4 1.664-1.859.649-.41 1.359-.655 2.288-.788l.318-.04.28-.031zm7.666 1.491a33.948 33.948 0 00-6.752-.075l-.748.075-.28.031c-.915.102-1.481.297-1.97.606a3.016 3.016 0 00-1.116 1.247c-.228.468-.357.989-.38 1.76l-.004.266v3.563c0 .577.134 1.116.375 1.587.242.471.592.874 1.024 1.18.37.263.801.453 1.276.554l.242.043 1.98.283c.339.048.457.096.575.175.119.078.262.187.27.386l-.002.024-.013.08-.164.741-.064.333c-.111.63-.167 1.332.09 1.634.263.309.7.39 1.037.187l.089-.062 2.998-3.135.13-.101.092-.063.077-.04.08-.03.035-.01.087-.02L17 15.545a2.993 2.993 0 002.495-2.77l.005-.182V8.618c0-.921-.13-1.506-.384-2.026A3.016 3.016 0 0018 5.345c-.44-.278-.943-.464-1.706-.572l-.265-.034-.279-.03zm-.55 6.294l.093.005c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005c-.398-.044-.707-.36-.707-.745 0-.38.301-.694.691-.744l.109-.007h6.4zm0-3.5l.093.004c.398.044.707.36.707.746 0 .38-.301.693-.691.743l-.109.007H8.8l-.093-.005C8.309 8.953 8 8.637 8 8.252c0-.38.301-.694.691-.744l.109-.007h6.4z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <label for="post-KEXlqdAPA-comment-btn"
                                    class="cursor-pointer items-center font-bold typo-callout flex">
                                    <span class="flex h-5 min-w-[1ch] flex-col overflow-hidden"></span>
                                </label>
                            </div>
                            <div
                                class="small btn-quaternary flex flex-row items-stretch select-none btn-tertiary-bun !min-w-[4.625rem]">
                                <button aria-label="Bookmark" id="post-KEXlqdAPA-bookmark-btn" aria-pressed="false"
                                    class="btn shadow-none focus-outline inline-flex cursor-pointer select-none flex-row items-center border no-underline transition duration-200 ease-in-out typo-callout justify-center font-bold iconOnly h-8 w-8 p-0 rounded-10">
                                    <svg width="1em" height="1em" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 pointer-events-none">
                                        <path
                                            d="M15.874 3H8.126a3.357 3.357 0 00-3.35 3.152l-.772 12.77c-.028.459.106.915.38 1.286l.101.125c.666.764 1.818.9 2.647.287L12 17.023l4.868 3.597a1.964 1.964 0 003.128-1.7l-.771-12.767A3.358 3.358 0 0015.874 3zm0 1.5c.981 0 1.794.764 1.854 1.744l.771 12.768a.464.464 0 01-.74.402l-5.207-3.848a.929.929 0 00-1.104 0L6.24 19.414a.464.464 0 01-.74-.402l.773-12.768c.06-.98.872-1.744 1.853-1.744h7.748z"
                                            fill="currentcolor" fill-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>

    </section>

    <section class="sm:mt-5 lg:mt-5 mt-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border border-gray-300">

        <div
            class="my-10 mx-auto max-w-7xl px-4 sm:mt-5 sm:px-6 md:mt-5 lg:mt-5 lg:px-8 xl:mt-5 flex gap-3 lg:flex-justify lg:flex flex-col lg:flex-row">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Data to enrich your</span>
                    <span class="block text-indigo-600 xl:inline">online business</span>
                </h1>
                <p
                    class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt
                    amet
                    fugiat veniam occaecat fugiat aliqua.
                </p>
                <!-- Button Section -->
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-600 md:py-4 md:text-lg md:px-10">
                            Get started
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                            Live demo
                        </a>
                    </div>
                </div>
                <!-- End of Button Section -->
            </div>

            <!--   Image Section     -->
            <div class="lg:inset-y-0 lg:right-0 lg:w-1/2 my-4">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                    src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                    alt="">
            </div>
            <!--   End of Image Section     -->
        </div>

    </section>

    <section class="sm:mt-5 lg:mt-5 mt-5 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border border-gray-300">
        <div
            class="my-10 mx-auto max-w-7xl px-4 sm:mt-5 sm:px-6 md:mt-5 lg:mt-5 lg:px-8 xl:mt-5 flex gap-3 lg:flex-justify lg:flex flex-col lg:flex-row">
            <!-- Image Section -->
            <div class="lg:-ml-10 lg:inset-y-0 lg:left-0 lg:w-1/2 my-4">
                <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                    src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                    alt="">
            </div>
            <!-- End of Image Section -->

            <div class="ml-10 mt-10 sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                    給問答找的一個模板
                </h1>
                <p
                    class="mt-10 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    如果有其他可以提供參考的信息，可以放這裏Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat
                    commodo. Elit sunt amet fugiat veniam occaecat.
                </p>
                <!-- Button Section -->
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-600 md:py-4 md:text-lg md:px-10">
                            Get started
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                            Live demo
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
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

                    </div>


                </div>
                <!-- End of Button Section -->
            </div>
        </div>
    </section>

    {{-- 阿拉伯風格的一個組件 --}}
    <div dir="rtl">
        <div class="">
            <div
                class="mx-auto h-full px-4 py-10 sm:max-w-xl md:max-w-full md:px-24 md:py-36 lg:max-w-screen-xl lg:px-8">
                <div class="flex flex-col items-center justify-between lg:flex-row md:gap-10  gap-5">
                    <div class="relative  lg:block lg:w-1/2">
                        <div
                            class="relative my-10 flex h-full flex-col overflow-hidden rounded-2xl bg-white text-gray-600 shadow-lg ring-1 ring-gray-200">

                            <h2 class="m-5 bg-teal-500 p-3 rounded-xl text-center  text-xl font-bold">
                                和搜尋引擎一起使用</h2>

                            <div class="flex-auto p-6">
                                <div class="relative flex flex-col justify-center">
                                    <div class="absolute right-4 h-full border-l-2"></div>
                                    <div class="relative mb-4">
                                        <span
                                            class="absolute inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 p-4 text-center text-base font-semibold text-white shadow">
                                            1</span>
                                        <div class="mr-12 w-auto pt-1">
                                            <h6 class="text-sm font-semibold text-blue-900">111春末秋初</h6>
                                            <p class="mt-1 text-xs text-gray-500">韓國年代末，韓國在線
                                            </p>
                                        </div>
                                    </div>

                                    <div class="relative mb-4">
                                        <span
                                            class="absolute inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 p-4 text-center text-base font-semibold text-white shadow">
                                            2</span>
                                        <div class="mr-12 w-auto pt-1">
                                            <h6 class="text-sm font-semibold text-blue-900">發展韓國東大門
                                            </h6>
                                            <p class="mt-1 text-xs text-gray-500">韓國東大門是韓國最重要的大門</p>
                                        </div>
                                    </div>


                                    <div class="relative mb-4">
                                        <span
                                            class="absolute inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 p-4 text-center text-base font-semibold text-white shadow">
                                            3</span>
                                        <div class="mr-12 w-auto pt-1">
                                            <h6 class="text-sm font-semibold text-blue-900">porky童裝商場</h6>
                                            <p class="mt-1 text-xs text-gray-500">爲了更好的發展</p>
                                        </div>
                                    </div>

                                    <div class="relative mb-4">
                                        <span
                                            class="absolute inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 p-4 text-center text-base font-semibold text-white shadow">
                                            4</span>
                                        <div class="mr-12 w-auto pt-1">
                                            <h6 class="text-sm font-semibold text-blue-900">porky童裝商場</h6>
                                            <p class="mt-1 text-xs text-gray-500">爲了更好的發展</p>
                                        </div>
                                    </div>

                                    <div class="relative mb-4">
                                        <span
                                            class="absolute inline-flex h-6 w-6 items-center justify-center rounded-full bg-blue-500 p-4 text-center text-base font-semibold text-white shadow">
                                            5</span>
                                        <div class="mr-12 w-auto pt-1">
                                            <h6 class="text-sm font-semibold text-blue-900">porky童裝商場</h6>
                                            <p class="mt-1 text-xs text-gray-500">爲了更好的發展</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative  lg:block lg:w-1/2">

                        <img src="https://images.pexels.com/photos/23946968/pexels-photo-23946968/free-photo-of-two-people-standing-on-a-street-looking-at-a-map.png?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            class="w-5/6">

                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- source: https://flowrift.com/c/logo-cloud/atJUX?view=code -->


    {{-- 圖片輪播 --}}
    <!-- component -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <main class="grid min-h-screen w-full place-content-center bg-gray-900">
        <div x-data="imageSlider"
            class="relative mx-auto max-w-2xl overflow-hidden rounded-md bg-gray-100 p-2 sm:p-4">
            <div class="absolute right-5 top-5 z-10 rounded-full bg-gray-600 px-2 text-center text-sm text-white">
                <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
            </div>

            <button @click="previous()"
                class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                <i class="fas fa-chevron-left text-2xl font-bold text-gray-500"></i>
            </button>

            <button @click="forward()"
                class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                <i class="fas fa-chevron-right text-2xl font-bold text-gray-500"></i>
            </button>

            <div class="relative h-80" style="width: 30rem">
                <template x-for="(image, index) in images">
                    <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0" class="absolute top-0">
                        <img :src="image" alt="image" class="rounded-sm" />
                    </div>
                </template>
            </div>
        </div>
    </main>


    <!-- Third Party Authentication Options 分享到社群 -->
    <div id="third-party-auth" class="flex items-center justify-center mt-5 flex-wrap">
        <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
            <img class="max-w-[25px]" src="https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/"
                alt="Google" />
        </button>
        <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
            <img class="max-w-[25px]" src="https://ucarecdn.com/95eebb9c-85cf-4d12-942f-3c40d7044dc6/"
                alt="Linkedin" />
        </button>
        <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
            <img class="max-w-[25px] filter dark:invert"
                src="https://ucarecdn.com/be5b0ffd-85e8-4639-83a6-5162dfa15a16/" alt="Github" />
        </button>
        <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
            <img class="max-w-[25px]" src="https://ucarecdn.com/6f56c0f1-c9c0-4d72-b44d-51a79ff38ea9/"
                alt="Facebook" />
        </button>
        <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
            <img class="max-w-[25px] dark:gray-100" src="https://ucarecdn.com/82d7ca0a-c380-44c4-ba24-658723e2ab07/"
                alt="twitter" />
        </button>

        <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
            <img class="max-w-[25px]" src="https://ucarecdn.com/3277d952-8e21-4aad-a2b7-d484dad531fb/"
                alt="apple" />
        </button>
    </div>


  
    {{-- 顏色漸變按鈕 --}}
    <div class="flex justify-center items-center dark:bg-gray-800">
        <div class="flex gap-2 flex-wrap justify-center p-4 md:p-12 max-w-3xl">
            <button type="button" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Purple to Blue</button>
            <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Cyan to Blue</button>
            <button type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Green to Blue</button>
            <button type="button" class="text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Purple to Pink</button>
            <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Pink to Orange</button>
            <button type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Teal to Lime</button>
            <button type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Red to Yellow</button>
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
