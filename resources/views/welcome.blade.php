@extends('layouts.header')

@section('title', 'Home')


@section('content')
    <main class="mt-6">
        @include('layouts.hero')
        {{-- hero section end --}}
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    @foreach ($gooditems as $gooditem)
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                    src="{{ $gooditem->image }}">
                            </a>
                            <div class="mt-4">
                                <div class="inline-flex">
                                    <a href="{{ route('good-items.index') }}">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">更多好物推薦</h3>
                                    </a>
                                </div>

                                <h2 class="text-gray-900 title-font text-lg font-medium">{{ $gooditem->title }}</h2>
                                {{-- <p class="mt-1">$16.00</p> --}}
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

        </section>

    @endsection
