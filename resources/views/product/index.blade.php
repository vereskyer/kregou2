@extends('layouts.header')

@section('title', '韓國代購商品')

@section('content')


    <section class="container mx-auto p-10 md:py-12 px-0 md:p-8 md:px-0">
        <section
            class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-3 gap-10 items-start">
            @foreach ($products as $product)
                <a href="{{ route('products.show', $product->id) }}">
                    <section
                        class="p-5 py-10 bg-blue-50 text-center transform duration-500 hover:-translate-y-2 cursor-pointer">
                        <div class="w-full h-64 overflow-hidden">
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-full object-cover object-center">
                        </div>

                        <h1 class="text-3xl my-5">{{ $product->name }}</h1>
                        <p class="mb-5">{{ $product->korean_name }}</p>
                        @if ($product->specification)
                            <p class="mb-5 bg-lime-300">{{ $product->specification }}</p>
                        @endif
                        <h2 class="font-semibold mb-5">
                            ₩ {{ number_format($product->wholesale_price, 0, '.', ',') }}
                        </h2>
                        {{-- <button class="p-2 px-6 bg-blue-500 text-white rounded-md hover:bg-blue-600">Add To Cart

                        </button> --}}
                    </section>
                </a>
            @endforeach
        </section>
    </section>

@endsection
