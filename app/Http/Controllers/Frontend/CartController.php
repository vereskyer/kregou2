<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $total = $this->calculateTotal($cart);
        return view('frontend.cart', compact('cart', 'total'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->wholesale_price,
                "image" => $product->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove(Request $request)
    {
        $id = $request->input('id');
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        $total = $this->calculateTotal($cart);

        return response()->json([
            'success' => true,
            'total' => $total
        ]);
    }

    private function calculateTotal($cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $quantity = max(1, intval($request->input('quantity'))); // 确保数量至少为1
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }

        $total = $this->calculateTotal($cart);
        $itemPrice = isset($cart[$id]) ? (float)$cart[$id]['price'] : 0;
        $itemSubtotal = $quantity * $itemPrice;

        return response()->json([
            'success' => true,
            'quantity' => $quantity,
            'price' => $itemPrice,
            'subtotal' => $itemSubtotal,
            'total' => $total
        ]);
    }
}
