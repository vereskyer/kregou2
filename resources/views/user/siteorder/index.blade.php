@extends('user.layouts.master')

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                我的韓國網站代購訂單
            </h2>

            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">

                    <label class="block mt-4 text-sm">
                        <a href="{{ route('user.siteorder.create') }}"
                            class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                            添加新的網站代購
                        </a>
                    </label>
                    <!-- Table -->
                    <table class="w-full whitespace-no-wrap table-auto mt-5">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Image</th>
                                <th class="px-4 py-3">代購描述</th>
                                <th class="px-4 py-3">Url</th>
                                <th class="px-4 py-3">管理員備註</th>
                                <th class="px-4 py-3">created at</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse ($siteorders as $siteorder)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <img class="object-cover w-40 h-40 rounded-md"
                                                src="{{ $siteorder->image ? asset($siteorder->image) : asset('uploads/default-store.jpg') }}"
                                                alt="" loading="lazy" />
                                    </td>

                                    <td class="px-4 py-3 text-sm w-1/4 border-b dark:border-gray-700">
                                        {!! $siteorder->description !!}
                                    </td>

                                    <td class="px-4 py-3 text-sm">
                                        <a href="{{ $siteorder->url }}" target="_blank">
                                            {{ $siteorder->url }}
                                        </a>
                                    </td>

                                    <td class="px-4 py-3 text-xs">
                                        {{ $siteorder->notes }}
                                    </td>

                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            {{ $siteorder->created_at }}
                                        </span>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-4 py-3 text-center text-gray-500 dark:text-gray-400">No
                                        stores found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <!-- Pagination -->
                    {{ $siteorders->links() }}
                </div>
            </div>
        </div>
    </main>
    {{-- @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush --}}
@endsection
