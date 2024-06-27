@extends('layouts.header')

@section('title', '韓國代購商品')

@section('content')
    <div class="container mx-auto p-10 md:py-12 px-0 md:p-8 md:px-0">
        <!-- 分类列表 -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">商品分類</h2>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('products.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 {{ !$selectedCategoryId ? 'font-bold' : '' }}">
                    全部
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('products.index', ['category_id' => $category->id]) }}" 
                       class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 {{ $selectedCategoryId == $category->id ? 'font-bold' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- 商品列表 -->
        <section class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-10 items-start">
            @foreach($products as $product)
                <a href="{{ route('products.show', $product->id) }}">
                    <section class="p-5 py-10 bg-blue-50 text-center transform duration-500 hover:-translate-y-2 cursor-pointer">
                        <div class="w-full h-64 overflow-hidden">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-full object-cover object-center">
                        </div>

                        <h1 class="text-3xl my-5">{{ $product->name }}</h1>
                        <p class="mb-5">{{ $product->korean_name }}</p>
                        @if ($product->specification)
                            <p class="mb-5 bg-lime-300">{{ $product->specification }}</p>
                        @endif
                        @auth
                            <h2 class="font-semibold mb-5">
                                ₩ {{ number_format($product->wholesale_price, 0, '.', ',') }}
                            </h2>
                        @else
                            <h2 class="font-semibold mb-5">
                                價格請登陸查看
                            </h2>
                        @endauth
                    </section>
                </a>
            @endforeach
        </section>
    </div>

    <!-- 分页 -->
    <div class="mt-8">
        {{ $products->links() }}
    </div>
@endsection
