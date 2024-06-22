<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(9);
        
        return view('product.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }
}
