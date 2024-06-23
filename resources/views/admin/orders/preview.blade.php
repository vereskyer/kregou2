<div class="p-4">
    <h3 class="text-lg font-semibold mb-4">訂單 #{{ $order->order_number }} 預覽</h3>
    <div class="mb-4">
        <p><strong>客戶：</strong> {{ $order->user->name }}</p>
        <p><strong>郵箱：</strong> {{ $order->user->email }}</p>
        <p><strong>訂單狀態：</strong> {{ ucfirst($order->status) }}</p>
        <p><strong>建立日期：</strong> {{ $order->created_at->format('Y-m-d H:i:s') }}</p>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">商品</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">單價</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">數量</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">小計</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($order->items as $item)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{ asset($item->product->image) }}" alt="{{ $item->product->name }}">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $item->product->name }}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">₩ {{ number_format($item->price, 0, '.', ',') }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $item->quantity }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">₩ {{ number_format($item->price * $item->quantity, 0, '.', ',') }}</div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4 text-right">
        <p class="text-lg font-semibold">總計：₩ {{ number_format($order->total_amount, 0, '.', ',') }}</p>
    </div>
</div>
