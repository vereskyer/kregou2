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
                                <th class="px-4 py-3">管理員備註</th>
                                <th class="px-4 py-3">status</th>

                                <th class="px-4 py-3">其他說明</th>
                                <th class="px-4 py-3">created at</th>
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
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-4 py-3 text-sm">
                                        @if ($shoporder->admin_note)
                                            <div class="badge badge-info gap-2">
                                                {{ $shoporder->admin_note }}
                                            </div>
                                        @endif
                                    </td>

                                    <td class="px-4 py-3 text-sm">
                                        @if ($shoporder->status)
                                            <div class="badge badge-warning gap-2">
                                                {{ $shoporder->status }}
                                            </div>
                                        @endif
                                    </td>

                                    <td class="px-4 py-3 text-xs">
                                        @if ($shoporder->description)
                                            <div class="badge badge-success gap-2">
                                                {{ $shoporder->description }}
                                            </div>
                                        @endif
                                    </td>

                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            {{ $shoporder->created_at }}
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
