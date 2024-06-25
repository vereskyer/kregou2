<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user', 'items')->latest()->paginate(20);
        
        return view('admin.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,completed,cancelled',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.orders.show', $order)
            ->with('success', '訂單狀態已更新');
    }

    public function preview(Order $order)
    {
        $order->load('items.product', 'user');
        return view('admin.orders.preview', compact('order'));
    }
}
