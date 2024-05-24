@extends('admin.layouts.master')

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                檔口列表
            </h2>

            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">

                    <!-- Search Form -->
                    <form method="GET" action="{{ route('admin.store.index') }}">
                        <div class="flex items-center mb-4">
                            <input type="text" name="search" placeholder="Search by Store Name"
                                class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                value="{{ request()->input('search') }}">
                            <button type="submit"
                                class="ml-2 px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">
                                Search
                            </button>

                            <a href="{{ route('admin.articles.create') }}"
                                class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                                添加新的article
                            </a>
                        </div>
                    </form>

                    <!-- Table -->
                    @forelse ($articles as $article)
                        <p>{{ $article->content }}</p>
                    @empty
                        <tr>
                            <td colspan="8" class="px-4 py-3 text-center text-gray-500 dark:text-gray-400">No
                                stores found</td>
                        </tr>
                    @endforelse
                </div>
                
                <div>
                    <!-- Pagination -->
                    {{-- {{ $shoporders->links() }} --}}
                </div>
            </div>
        </div>
    </main>
    {{-- @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush --}}
@endsection
