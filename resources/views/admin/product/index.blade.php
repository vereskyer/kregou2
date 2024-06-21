@extends('admin.layouts.master')

@section('head')

@endsection

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                商品管理
            </h2>

            <a href="{{ route('admin.products.create') }}"
                                class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                                添加新的商品
                        </a>

            <div class="mt-6 w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">


                    <!-- Table -->
                    <table class="w-full whitespace-no-wrap table-auto">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Image</th>
                                <th class="px-4 py-3">商品名稱</th>
                                <th class="px-4 py-3">韓語名稱</th>
                                <th class="px-4 py-3">Url</th>
                                <th class="px-4 py-3">Buy Url</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse ($products as $product)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-xs w-60 flex">
                                        <div class="h-min overflow-hidden rounded-md">
                                            <img src="{{ asset($product->image) }}" alt="" 
                                                class="h-60 w-80 hover:scale-150 image-large transition-all duration-500 cursor-pointer">
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">{{ $product->name }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $product->korean_name }}</td>
                                    <td class="px-4 py-3 text-sm">
                                        <a href="{{ $product->url }}" target="_blank">{{ $product->url }}</a></td>
                                    <td class="px-4 py-3 text-sm"><a href="{{ $product->admin_url }}" target="_blank">{{ $product->admin_url }}</a></td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <a href="#"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </a>

                                            <a href="#"
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                  </svg>
                                                  
                                            </a>
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-4 py-3 text-center text-gray-500 dark:text-gray-400">No
                                        products found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div>
                    <!-- Pagination -->
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </main>
    {{-- @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush --}}
@endsection
