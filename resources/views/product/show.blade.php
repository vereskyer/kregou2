@extends('layouts.header')

@section('title', "{{ $product->name }}")

@section('content')

    <div class="bg-gray-100 dark:bg-gray-800 py-8">
        <nav aria-label="Breadcrumb" role="navigation">
            <ul class="flex flex-wrap items-center my-1 pt-8">
                <li class="inline-flex items-center">
                    <a href="/" aria-label="home" class="inline-flex items-center font-medium text-gray-700">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>

                <li class="flex items-center">
                    <span class="px-1 text-lg text-gray-400">→</span>
                    <a href="{{ route('products.index') }}" class="font-medium text-gray-700">
                        所有商品
                    </a>
                </li>

                <li class="flex items-center" aria-current="page">
                    <span class="px-1 text-lg text-gray-400">→</span>
                    <span class="font-medium text-gray-600">
                        {{ $product->name }}
                    </span>
                </li>
            </ul>
        </nav>
        <div class="mt-8 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
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
