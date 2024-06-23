@extends('user.layouts.master')

@section('title', '我的訂單')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">我的訂單</h1>

        @if ($orders->isEmpty())
            <p class="text-gray-600">您還沒有任何訂單。</p>
        @else
            <div class="space-y-4">
                @foreach ($orders as $order)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-4 flex justify-between items-center">
                            <div>
                                <p class="font-bold">訂單號：{{ $order->order_number }}</p>
                                <p class="text-sm text-gray-600">日期：{{ $order->created_at->format('Y-m-d H:i') }}</p>
                            </div>
                            <div>
                                <p class="font-bold">總金額：₩ {{ number_format($order->total_amount, 0, '.', ',') }}</p>
                                <p class="text-sm">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $order->status === 'pending'
                                        ? 'bg-yellow-100 text-yellow-800'
                                        : ($order->status === 'completed'
                                            ? 'bg-green-100 text-green-800'
                                            : 'bg-red-100 text-red-800') }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="border-t px-4 py-2">
                            <button class="text-blue-500 hover:underline focus:outline-none order-details-toggle"
                                data-order-id="{{ $order->id }}">
                                顯示訂單詳情
                            </button>
                        </div>
                        <div id="order-details-{{ $order->id }}" class="hidden p-4 bg-gray-50">
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
                        </div>
                    </div>
                @endforeach
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
                    const detailsDiv = document.getElementById(`order-details-${orderId}`);
                    if (detailsDiv.classList.contains('hidden')) {
                        detailsDiv.classList.remove('hidden');
                        this.textContent = '隱藏訂單詳情';
                    } else {
                        detailsDiv.classList.add('hidden');
                        this.textContent = '顯示訂單詳情';
                    }
                });
            });
        });
    </script>
@endsection
