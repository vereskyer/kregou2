@extends('admin.layouts.master')

@section('title', '訂單管理')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">訂單管理</h1>

        @if ($orders->isEmpty())
            <p class="text-gray-600">目前沒有任何訂單。</p>
        @else
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                訂單號
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                用戶
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                總金額
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                狀態
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                建立日期
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                操作
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $order->order_number }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">{{ $order->user->name }}</p>
                                    <p class="text-gray-600 whitespace-no-wrap">{{ $order->user->email }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">₩
                                        {{ number_format($order->total_amount, 0, '.', ',') }}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold 
                                    {{ $order->status === 'pending'
                                        ? 'text-yellow-900'
                                        : ($order->status === 'completed'
                                            ? 'text-green-900'
                                            : 'text-red-900') }}
                                    leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 
                                        {{ $order->status === 'pending'
                                            ? 'bg-yellow-200'
                                            : ($order->status === 'completed'
                                                ? 'bg-green-200'
                                                : 'bg-red-200') }}
                                        opacity-50 rounded-full"></span>
                                        <span class="relative">{{ ucfirst($order->status) }}</span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $order->created_at->format('Y-m-d H:i') }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button class="text-green-600 hover:text-green-900 order-details-toggle"
                                        data-order-id="{{ $order->id }}">預覽</button>
                                    <a href="{{ route('admin.orders.show', $order) }}"
                                        class="text-blue-600 hover:text-blue-900 mr-2">訂單詳情</a>
                                    
                                </td>
                            </tr>
                            <tr id="order-details-{{ $order->id }}" class="hidden bg-gray-50">
                                <td colspan="6" class="px-5 py-5 border-b border-gray-200">
                                    <h3 class="font-bold mb-2">訂單內容：</h3>
                                    @foreach ($order->items as $item)
                                        <div class="flex items-center space-x-4 mb-2">
                                            <img src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}"
                                                class="w-16 h-16 object-cover rounded">
                                            <div>
                                                <p class="font-semibold">{{ $item->product->name }}</p>
                                                <p class="text-sm text-gray-600">單價：₩
                                                    {{ number_format($item->price, 0, '.', ',') }}</p>
                                                <p class="text-sm text-gray-600">數量：{{ $item->quantity }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $orders->links() }}
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleButtons = document.querySelectorAll('.order-details-toggle');
            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const orderId = this.getAttribute('data-order-id');
                    const detailsRow = document.getElementById(`order-details-${orderId}`);
                    if (detailsRow.classList.contains('hidden')) {
                        detailsRow.classList.remove('hidden');
                        this.textContent = '隱藏';
                    } else {
                        detailsRow.classList.add('hidden');
                        this.textContent = '預覽';
                    }
                });
            });
        });
    </script>
@endsection
