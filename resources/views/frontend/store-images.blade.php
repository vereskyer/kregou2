@include('layouts.header')

<div class="flex flex-col md:grid md:grid-cols-3 gap-3">
    @foreach ($storeImages as $storeImage)
        <div class="relative rounded overflow-hidden">
            <img src="{{ asset($storeImage->image_path) }}" alt="Store Image" class="w-full">
            <div
                class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center group-hover:bg-opacity-60 transition">
                <p class="cursor-pointer text-2xl text-center text-white font-roboto font-medium">
                    {{ $storeImage->store->store_name }}  <!-- 确保store表里有name字段 -->
                </p>
                {{-- <p class="cursor-pointer text-2xl text-center text-orange-500 font-roboto font-medium">
                    <a href="http://www.baidu.com">Additional Text</a>
                </p> --}}
            </div>
        </div>
    @endforeach
</div>

<div class="mt-5">
    {{ $storeImages->links() }}
</div>

@include('layouts.footer')
