@extends('layouts.header')

@section('title', "{{ $product->name }}")

@section('content')

    <div class="bg-gray-100 dark:bg-gray-800 py-8">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ url()->previous() }}"
                        class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                            </svg>
                            返回上一頁
                        </div>
                    </a>
                </li>
            </ol>
        </nav>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4 items-center"> <!-- 添加 items-center -->
                <div class="md:flex-1 px-4">
                    <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                        <img class="w-full h-full object-cover" src="{{ asset($product->image) }}" alt="Product Image">
                    </div>
                </div>
                <div class="md:flex-1 px-4 md:px-8"> <!-- 增加左侧内边距 -->
                    <div class="flex flex-col justify-center h-full"> <!-- 添加此 div 来居中内容 -->
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $product->name }}
                            @if ($product->specification)
                                <span class="text-gray-600 dark:text-gray-300 text-sm"> {{ $product->specification }}
                                </span>
                            @endif
                        </h2>
                        @if ($product->korean_name)
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">{{ $product->korean_name }}</p>
                        @endif


                        <div class="flex mb-4">
                            @auth
                                <div class="mr-4">
                                    <span class="text-2xl font-bold text-indigo-600 dark:text-white mb-2"> ₩
                                        {{ number_format($product->wholesale_price, 0, '.', ',') }}</span>
                                </div>
                            @else
                                <div class="mr-4">
                                    <span class="text-2xl font-bold text-indigo-600 dark:text-white mb-2">
                                        <a href="{{ route('login') }}">價格請登陸查看</a></span>
                                </div>
                            @endauth

                        </div>

                        <div class="flex -mx-2 mb-4">
                            <div class="w-1/2 px-2">
                                <a href="{{ route('cart.add', $product->id) }}"
                                    class="button w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700">Add
                                    to Cart</a>
                            </div>
                        </div>
                        {{-- <div class="flex -mx-2 mb-4">
                            <div class="w-1/2 px-2">
                                <button
                                    class="w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Add
                                    to Wishlist</button>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="divider divider-info">商品介紹：</div>
        <div class="mt-8 px-4 sm:px-6 lg:px-8"> <!-- 添加上边距和内边距 -->
            <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                {!! $product->description !!}
            </p>
        </div>
    </div>


@endsection
