@extends('user.layouts.master')

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                我的訂單列表
            </h2>

            <div class="mt-6 w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    @foreach ($orders as $order)
                        <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <h3 class="text-xl font-semibold">訂單編號: {{ $order->order_number }}</h3>
                            <p><strong>訂單金額總計：</strong> ₩ {{ number_format($order->total_amount, 0, '.', ',') }}</p>
                            <p><strong>訂單狀態：</strong> {{ ucfirst($order->status) }}</p>
                            <p><strong>建立日期：</strong> {{ $order->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>

                        <table class="w-full whitespace-no-wrap table-auto mb-6">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">商品圖片</th>
                                    <th class="px-4 py-3">商品名稱</th>
                                    <th class="px-4 py-3">單價</th>
                                    <th class="px-4 py-3">數量</th>
                                    <th class="px-4 py-3">合計</th>
                                    <th class="px-4 py-3">已訂貨</th>
                                    <th class="px-4 py-3">已到貨</th>
                                    <th class="px-4 py-3">已發貨</th>
                                    <th class="px-4 py-3">已斷貨</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @foreach ($order->items as $item)
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3 text-xs w-60">
                                            <img src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}"
                                                class="h-20 w-20 object-cover rounded-md">
                                        </td>
                                        <td class="px-4 py-3 text-sm">{{ $item->product->name }}</td>
                                        <td class="px-4 py-3 text-sm">₩ {{ number_format($item->price, 0, '.', ',') }}</td>
                                        <td class="px-4 py-3 text-sm">{{ $item->quantity }}</td>
                                        <td class="px-4 py-3 text-sm">₩
                                            {{ number_format($item->price * $item->quantity, 0, '.', ',') }}</td>
                                        <td class="px-4 py-3 text-sm">
                                            <div class="flex flex-row gap-2 flex-wrap">
                                                @if ($item->ordered_at)
                                                    <span
                                                        class="px-2 py-1 text-xs font-semibold rounded-full {{ $item->ordered_at ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                                        {{ $item->ordered_at ? '已訂貨 (' . \Carbon\Carbon::parse($item->ordered_at)->format('Y-m-d') . ')' : '未訂貨' }}
                                                    </span>
                                                @endif

                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            @if ($item->arrived_at)
                                                <span
                                                    class="px-2 py-1 text-xs font-semibold rounded-full {{ $item->arrived_at ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">
                                                    {{ $item->arrived_at ? '已到貨 (' . \Carbon\Carbon::parse($item->arrived_at)->format('Y-m-d') . ')' : '未到貨' }}
                                                </span>
                                            @endif

                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            @if ($item->shipped_at)
                                                <span
                                                    class="px-2 py-1 text-xs font-semibold rounded-full {{ $item->shipped_at ? 'bg-purple-100 text-purple-800' : 'bg-gray-100 text-gray-800' }}">
                                                    {{ $item->shipped_at ? '已出貨 (' . \Carbon\Carbon::parse($item->shipped_at)->format('Y-m-d') . ')' : '未出貨' }}
                                                </span>
                                            @endif

                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            @if ($item->out_of_stock_at)
                                                <span
                                                    class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                                    已斷貨
                                                </span>
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endforeach
                </div>
                <div>
                    <!-- Pagination -->
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
