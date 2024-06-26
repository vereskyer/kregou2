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
    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <div>
                <h2 class="text-2xl font-semibold leading-tight">未訂貨商品列表</h2>
            </div>
            @foreach ($groupedOrderItems as $productId => $items)
                @php
                    $product = $items->first()->product;
                    $totalQuantity = $items->sum('quantity');
                    $totalAmount = $items->sum(function ($item) {
                        return $item->price * $item->quantity;
                    });
                @endphp
                <div class="mt-8 bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="mt-8 bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="px-4 py-5 border-b border-gray-200 sm:px-6 flex items-center">
                            <div class="flex-shrink-0 mr-4">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                                    class="h-24 w-24 object-cover rounded-md">
                            </div>
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    商品：{{ $product->name }} (ID: {{ $productId }})
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                    總數量：{{ $totalQuantity }} | 總金額：₩ {{ number_format($totalAmount, 0, '.', ',') }}
                                </p>
                            </div>
                        </div>
                        <div class="px-4 py-5 sm:p-6">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            訂單號</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            數量</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            單價</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            合計</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            操作</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($items as $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{-- {{ $item->order->order_number }} --}}
                                                {{ $item->order->order_number ?? 'N/A' }}

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $item->quantity }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                ₩ {{ number_format($item->price, 0, '.', ',') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                ₩ {{ number_format($item->price * $item->quantity, 0, '.', ',') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                {{-- <input type="checkbox" onchange="updateOrderItemStatus(this)" data-item-id="{{ $item->id }}" data-status="ordered_at"> 標記為已訂貨 --}}
                                                <input type="checkbox" class="w-5 h-5 accent-red-600 order-item-status"
                                                    data-item-id="{{ $item->id }}" data-status-type="ordered"
                                                    {{ $item->ordered_at ? 'checked' : '' }}
                                                    onchange="updateOrderItemStatus(this)">
                                                <span id="ordered_status_{{ $item->id }}">
                                                    {{ $item->ordered_at ? \Carbon\Carbon::parse($item->ordered_at)->format('Y-m-d') : '未訂貨' }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
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
