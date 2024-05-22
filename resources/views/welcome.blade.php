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
    <figure><img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.jpg" alt="Movie"/></figure>
    <div class="card-body">
      <h2 class="card-title">New movie is released!</h2>
      <p>Click the button to watch on Jetflix app.</p>
      <div class="card-actions justify-end">
        <button class="btn btn-primary">Watch</button>
      </div>
    </div>
  </div>

    </section>
</main>

@include('layouts.footer')
