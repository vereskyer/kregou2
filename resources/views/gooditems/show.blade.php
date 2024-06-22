@extends('layouts.header')

@section('content')
    <main class="mt-6">
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
        <!-- Blog post with featured image -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <!-- Blog post header -->
                <div class="py-8">
                    <h1 class="text-3xl font-bold mb-2">{{ $gooditem->title }}</h1>
                    <p class="text-gray-500 text-sm">Published on <time
                            datetime="2022-04-05">{{ $gooditem->created_at }}</time></p>
                </div>

                <!-- Featured image -->
                <img src="{{ asset($gooditem->image) }}" alt="Featured image" class="w-full h-auto mb-8 items-center">

                <!-- Blog post content -->
                <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                    {!! $gooditem->detail_description !!}
                </div>

                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        @if ($gooditem->url)
                            <a href="{{ $gooditem->url }}" target="_blank"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-600 md:py-4 md:text-lg md:px-10">
                                官網鏈接
                            </a>
                        @endif
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        @if ($gooditem->buy_url)
                            <a href="{{ $gooditem->buy_url }}" target="_blank"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                購買鏈接
                            </a>
                        @endif

                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        @if ($gooditem->detail_description)
                            <a href="{{ route('good-items.show', $gooditem->id) }}" target="_blank"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-800 bg-blue-200 hover:bg-indigo-500 md:py-4 md:text-lg md:px-10">
                                詳細介紹
                            </a>
                        @endif

                    </div>
            </div>
            
        </div>

    </main>
@endsection
