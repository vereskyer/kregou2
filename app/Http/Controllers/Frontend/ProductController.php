<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $selectedCategoryId = $request->input('category_id');

        $productsQuery = Product::query();

        if ($selectedCategoryId) {
            $productsQuery->where('category_id', $selectedCategoryId);
        }

        $products = $productsQuery->orderBy('created_at', 'desc')->paginate(9);

        return view('product.index', compact('categories', 'products', 'selectedCategoryId'));
    }



    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));
    }
}
