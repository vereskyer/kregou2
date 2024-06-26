<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\OrderItem;
use App\Models\Shoporder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderItemController extends Controller
{
    public function index()
    {
        $products = Product::with(['orderItems' => function ($query) {
            $query->withTrashed();
        }])->get();

        $productStats = $products->map(function ($product) {
            $orderItems = $product->orderItems;
            return [
                'id' => $product->id,
                'name' => $product->name,
                'not_ordered' => $orderItems->whereNull('ordered_at')->count(),
                'not_arrived' => $orderItems->whereNotNull('ordered_at')->whereNull('arrived_at')->count(),
                'not_shipped' => $orderItems->whereNotNull('arrived_at')->whereNull('shipped_at')->count(),
                'total_orders' => $orderItems->count(),
                'total_quantity' => $orderItems->sum('quantity'),
                'total_amount' => $orderItems->sum(function ($item) {
                    return $item->price * $item->quantity;
                }),
            ];
        });

        return view('admin.orderitem.index', compact('productStats'));
    }

    public function notOrdered()
    {
        $groupedOrderItems = OrderItem::whereNull('ordered_at')
            ->with(['product', 'order'])
            ->get()
            ->groupBy('product_id');

        return view('admin.orderitem.not_ordered', compact('groupedOrderItems'));
    }

    public function notArrived()
    {
        $orderItems = OrderItem::whereNotNull('ordered_at')->whereNull('arrived_at')->with('product', 'order')->get();
        return view('admin.orderitem.not_arrived', compact('orderItems'));
    }

    public function notShipped()
    {
        $orderItems = OrderItem::whereNotNull('arrived_at')->whereNull('shipped_at')->with('product', 'order')->get();
        return view('admin.orderitem.not_shipped', compact('orderItems'));
    }

    public function outOfStock()
    {
        $orderItems = OrderItem::whereNotNull('out_of_stock_at')->with('product', 'order')->get();
        return view('admin.orderitem.out_of_stock', compact('orderItems'));
    }
}
