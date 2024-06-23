@extends('admin.layouts.master')

@section('title', '訂單詳情')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">訂單詳情</h1>
        <a href="{{ route('admin.orders.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
            返回訂單列表
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-4">訂單信息</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p><strong>訂單號：</strong>{{ $order->order_number }}</p>
                    <p><strong>訂單狀態：</strong>
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            {{ $order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 
                               ($order->status === 'completed' ? 'bg-green-100 text-green-800' : 
                               'bg-red-100 text-red-800') }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </p>
                    <p><strong>建立日期：</strong>{{ $order->created_at->format('Y-m-d H:i:s') }}</p>
                </div>
                <div>
                    <p><strong>客戶名稱：</strong>{{ $order->user->name }}</p>
                    <p><strong>客戶郵箱：</strong>{{ $order->user->email }}</p>
                    <p><strong>總金額：</strong>₩ {{ number_format($order->total_amount, 0, '.', ',') }}</p>
                </div>
            </div>
        </div>

        <div class="p-6 border-t border-gray-200">
            <h2 class="text-xl font-semibold mb-4">訂單項目</h2>
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
        </div>

        <div class="p-6 border-t border-gray-200">
            <h2 class="text-xl font-semibold mb-4">訂單操作</h2>
            <form action="{{ route('admin.orders.update', $order) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">更新訂單狀態</label>
                    <select id="status" name="status" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>待處理</option>
                        <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>處理中</option>
                        <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>已完成</option>
                        <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>已取消</option>
                    </select>
                </div>
                <div>
                    {{-- <button class="btn btn-secondary">Secondary</button> --}}
                    <button type="submit" class="btn btn-primary inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-md font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        更新訂單
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
