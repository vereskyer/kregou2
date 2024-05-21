@extends('user.layouts.master')

@section('content')
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>



        <!-- New Table -->
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Shop Name</th>
                            <th class="px-4 py-3">Date</th>

                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">其他說明</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($shoporders as $shoporder)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                            alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner"
                                            aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $shoporder->store_name }}</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            {{ $shoporder->building }}. {{ $shoporder->floor }} 樓 {{ $shoporder->position }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    {{ $shoporder->created_at }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $shoporder->status }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $shoporder->admin_note }}
                            </td>
                        </tr>
                        @endforeach
                        


                    </tbody>
                </table>

                <div>
                    {{ $shoporders->links() }}
                </div>
            </div>

        </div>
    </div>
</main>
@endsection