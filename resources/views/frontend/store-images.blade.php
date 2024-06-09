<!-- resources/views/frontend/store-images.blade.php -->

@extends('layouts.header')

@section('title', '韓國東大門|南大門檔口新款圖片')

@section('content')


<div class="mt-5 mb-5">
    <form method="GET" action="{{ route('store-images') }}" class="mb-4 w-1/3 flex">
        <input type="text" name="search" placeholder="Search store by name" class="p-2 border rounded-l w-full"
            value="{{ request('search') }}">
        <button type="submit" class="ml-2 p-2 bg-blue-500 text-white rounded-r">Search</button>
    </form>
</div>



<div class="flex justify-center w-full px-4 max-w-xl mb-5">
    <form method="GET" action="{{ route('store-images') }}" class="flex w-full">
        <input type="text" name="search" placeholder="可以根據檔口名稱搜索..." 
            placeholder="Button, Footer, etc" value="{{ request('search') }}"
            class="w-full p-3 rounded-l-md border-2 border-gray-300 placeholder-gray-500 dark:placeholder-gray-300 dark:bg-gray-500 dark:text-gray-300 dark:border-none" />
        <button
            class="inline-flex items-center gap-2 bg-violet-700 text-white text-lg font-semibold py-3 px-6 rounded-r-md">
            <span>search</span>
            <span class="hidden md:block">
                <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                        d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </span>
        </button>
    </form>
</div>






<div class="flex flex-col md:grid md:grid-cols-3 gap-3">
    @foreach ($storeImages as $storeImage)
        <div class="relative rounded overflow-hidden">
            <img src="{{ asset($storeImage->image_path) }}" alt="Store Image" class="w-full">
            <div
                class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center group-hover:bg-opacity-60 transition">
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

@endsection
