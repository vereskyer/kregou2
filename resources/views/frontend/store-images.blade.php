<!-- resources/views/frontend/store-images.blade.php -->

@include('layouts.header')


<div class="mt-5 mb-5">
    <form method="GET" action="{{ route('store-images') }}" class="mb-4">
        <input type="text" name="search" placeholder="Search store by name" class="p-2 border rounded" value="{{ request('search') }}">
        <button type="submit" class="p-2 bg-blue-500 text-white rounded">Search</button>
    </form>
</div>


<div class="flex flex-col md:grid md:grid-cols-3 gap-3">
    @foreach ($storeImages as $storeImage)
        <div class="relative rounded overflow-hidden">
            <img src="{{ asset($storeImage->image_path) }}" alt="Store Image" class="w-full">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center group-hover:bg-opacity-60 transition">
                <p class="cursor-pointer text-2xl text-center text-white font-roboto font-medium">
                    {{ $storeImage->store->store_name }}
                </p>
                <p class="cursor-pointer text-2xl text-center text-orange-500 font-roboto font-medium">
                    Line: bizkorea
                </p>
                <p class="cursor-pointer text-sm text-center text-white font-roboto font-medium">
                    {{ $storeImage->created_at }}
                </p>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-5">
    {{ $storeImages->links() }}
</div>

@include('layouts.footer')
