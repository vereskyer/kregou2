@extends('admin.layouts.master')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .status-checkbox {
            min-width: 150px;
        }
    </style>
@endsection

@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                本站訂單列表
            </h2>

            <div class="mt-6 w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    @foreach ($orders as $order)
                        <!-- 訂單信息 -->
                        <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
                            <label class="text-xl alert alert-info">訂單編號: {{ $order->order_number }}</label>
                            <p class="mt-5"><strong>訂單金額總計：</strong> ₩
                                {{ number_format($order->total_amount, 0, '.', ',') }}</p>
                            <p><strong>訂單狀態：</strong> {{ ucfirst($order->status) }}</p>
                            <p><strong>建立日期：</strong> {{ $order->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>

                        <!-- 商品信息表格 -->
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
                                        <td class="px-4 py-3 text-xs w-60 flex">
                                            <div class="h-min overflow-hidden rounded-md">
                                                <img src="{{ asset($item->product->image) }}" alt=""
                                                    class="h-60 w-80 hover:scale-150 image-large transition-all duration-500 cursor-pointer">
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">{{ $item->product->name }}</td>
                                        <td class="px-4 py-3 text-sm">₩ {{ number_format($item->price, 0, '.', ',') }}</td>
                                        <td class="px-4 py-3 text-sm">{{ $item->quantity }}</td>
                                        <td class="px-4 py-3 text-sm">₩
                                            {{ number_format($item->price * $item->quantity, 0, '.', ',') }}</td>
                                        <td class="px-4 py-3 text-sm">
                                            <input type="checkbox" class="w-5 h-5 accent-red-600 order-item-status"
                                                data-item-id="{{ $item->id }}" data-status-type="ordered"
                                                {{ $item->ordered_at ? 'checked' : '' }}
                                                onchange="updateOrderItemStatus(this)">
                                            <span id="ordered_status_{{ $item->id }}">
                                                {{ $item->ordered_at ? \Carbon\Carbon::parse($item->ordered_at)->format('Y-m-d') : '未訂貨' }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <input type="checkbox" class="w-5 h-5 accent-red-600 order-item-status"
                                                data-item-id="{{ $item->id }}" data-status-type="arrived"
                                                {{ $item->arrived_at ? 'checked' : '' }}
                                                onchange="updateOrderItemStatus(this)">
                                            <span id="arrived_status_{{ $item->id }}">
                                                {{ $item->arrived_at ? \Carbon\Carbon::parse($item->arrived_at)->format('Y-m-d') : '未到貨' }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <input type="checkbox" class="w-5 h-5 accent-red-600 order-item-status"
                                                data-item-id="{{ $item->id }}" data-status-type="shipped"
                                                {{ $item->shipped_at ? 'checked' : '' }}
                                                onchange="updateOrderItemStatus(this)">
                                            <span id="shipped_status_{{ $item->id }}">
                                                {{ $item->shipped_at ? \Carbon\Carbon::parse($item->shipped_at)->format('Y-m-d') : '未發貨' }}
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <input type="checkbox" class="w-5 h-5 accent-red-600 order-item-status"
                                                data-item-id="{{ $item->id }}" data-status-type="out_of_stock"
                                                {{ $item->out_of_stock_at ? 'checked' : '' }}
                                                onchange="updateOrderItemStatus(this)">
                                            <span id="out_of_stock_status_{{ $item->id }}">
                                                {{ $item->out_of_stock_at ? \Carbon\Carbon::parse($item->out_of_stock_at)->format('Y-m-d') : '未斷貨' }}
                                            </span>
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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.order-item-status').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    updateOrderItemStatus(this);
                });
            });
        });

        function updateOrderItemStatus(checkbox) {
            const itemId = checkbox.dataset.itemId;
            const statusType = checkbox.dataset.statusType;
            const status = checkbox.checked;

            fetch('/admin/update-order-item-status', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        itemId: itemId,
                        statusType: statusType,
                        status: status
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const statusSpan = document.getElementById(`${statusType}_status_${itemId}`);
                        statusSpan.textContent = status ? data.date : `未${getStatusText(statusType)}`;
                    } else {
                        console.error('訂單項狀態更新失敗');
                        checkbox.checked = !checkbox.checked;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    console.error('Request details:', {
                        itemId: itemId,
                        statusType: statusType,
                        status: status
                    });
                    checkbox.checked = !checkbox.checked;
                });
        }

        function getStatusText(statusType) {
            switch (statusType) {
                case 'ordered':
                    return '訂貨';
                case 'arrived':
                    return '到貨';
                case 'shipped':
                    return '發貨';
                case 'out_of_stock':
                    return '斷貨';
            }
        }
    </script>
@endpush