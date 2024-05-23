@extends('user.layouts.master')

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                檔口取貨列表
            </h2>

            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">

                    <label class="block mt-4 text-sm">
                        <a href="{{ route('user.shoporder.create') }}"
                            class="ml-2 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50">
                            添加新的取貨
                        </a>
                    </label>
                    <!-- Table -->
                    <table class="w-full whitespace-no-wrap table-auto mt-5">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Store Name</th>
                                <th class="px-4 py-3">其他說明</th>
                                <th class="px-4 py-3">status</th>
                                <th class="px-4 py-3">created at</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @forelse ($shoporders as $shoporder)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="{{ $shoporder->image ? asset($shoporder->image) : asset('uploads/default-store.jpg') }}"
                                                    alt="" loading="lazy" />
                                                {{-- <img class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                                                    alt="" loading="lazy" /> --}}
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                                </div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">{{ $shoporder->store_name }}</p>
                                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    {{ $shoporder->building }}. {{ $shoporder->floor }} 樓
                                                    {{ $shoporder->position }}
                                                </p>
                                            </div>8
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-xs">{{ $shoporder->admin_note }}</td>
                                    <td class="px-4 py-3 text-sm">{{ $shoporder->status }}</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            {{ $shoporder->created_at }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
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
                <div>
                    <!-- Pagination -->
                    {{ $shoporders->links() }}
                </div>
            </div>
        </div>
    </main>
    {{-- @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush --}}
@endsection
