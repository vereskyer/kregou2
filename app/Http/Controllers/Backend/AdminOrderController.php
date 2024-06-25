<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user', 'items.product')->latest()->paginate(20);

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


    // app/Http/Controllers/AdminOrderController.php


    public function updateOrderItemStatus(Request $request)
    {
        $itemId = $request->input('itemId');
        $statusType = $request->input('statusType');
        $status = $request->input('status');

        $orderItem = OrderItem::findOrFail($itemId);

        $fieldName = $statusType . '_at';
        $orderItem->$fieldName = $status ? now() : null;
        $success = $orderItem->save();

        return response()->json([
            'success' => $success,
            'date' => $status ? $orderItem->$fieldName->format('Y-m-d') : null
        ]);
    }

    public function destroy(Order $order)
    {
        try {
            $order->delete();
            return redirect()->route('admin.orders.index')->with('success', '訂單已成功刪除');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '刪除訂單時發生錯誤：' . $e->getMessage());
        }
    }
}
