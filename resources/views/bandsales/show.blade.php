@extends('layouts.header')

@section('content')
    <main class="mt-6">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('band-sales.index') }}"
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
                    <h1 class="text-3xl font-bold mb-2">{{ $bandsale->title }}</h1>
                    <p class="text-gray-500 text-sm">Published on <time
                            datetime="2022-04-05">{{ $bandsale->created_at }}</time></p>
                </div>

                <!-- Featured image -->
                <img src="{{ asset($bandsale->image) }}" alt="Featured image" class="w-full h-auto mb-8 items-center">

                <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                   <p class="text-gray-500 text-large mb-4 bg-lime-300 font-bold">
                    批發說明： {{ $bandsale->wholesale_condition }}
                   </p>
                </div>

                <!-- Blog post content -->
                <div class="prose prose-sm sm:prose lg:prose-lg xl:prose-xl mx-auto">
                    {!! $bandsale->description !!}
                </div>

    
                    
            </div>
            
        </div>

    </main>
@endsection
