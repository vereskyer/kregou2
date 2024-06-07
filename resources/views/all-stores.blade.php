@include('layouts.header')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            檔口列表
        </h2>

        <!-- Search Form -->
        <form method="GET" action="{{ route('all-stores') }}">
            <div class="flex items-center mb-4">
                <input type="text" name="query" placeholder="Search store..." value="{{ request()->input('query') }}" class="w-full px-4 py-2 text-sm border rounded-lg focus:outline-none focus:ring">
                <button type="submit" class="px-4 py-2 ml-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-700">Search</button>
            </div>
        </form>

        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <!-- Table -->
                <table class="w-full whitespace-no-wrap table-auto">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Handphone</th>
                            <th class="px-4 py-3">Kakao</th>
                            <th class="px-4 py-3">Wechat</th>
                            <th class="px-4 py-3">Line</th>
                            <th class="px-4 py-3">IG</th>
                            <th class="px-4 py-3">Web</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @forelse ($stores as $store)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="{{ $store->image ? asset($store->image) : asset('uploads/default-store.jpg') }}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $store->store_name }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $store->building->name }}. {{ $store->floor }} 樓
                                                {{ $store->position }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-xs">{{ $store->handphone }}</td>
                                <td class="px-4 py-3 text-sm">{{ $store->kakao }}</td>
                                <td class="px-4 py-3 text-sm">{{ $store->wechat }}</td>
                                <td class="px-4 py-3 text-sm">{{ $store->line }}</td>
                                <td class="px-4 py-3 text-sm">{{ $store->instagram }}</td>
                                <td class="px-4 py-3 text-sm">{{ $store->website }}</td>
                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-4 py-3 text-center text-gray-500 dark:text-gray-400">No stores found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div>
                <!-- Pagination -->
                {{ $stores->appends(['query' => request()->input('query')])->links() }}
            </div>
        </div>
    </div>
</main>

@include('layouts.footer')
