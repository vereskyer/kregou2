<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;


class ProductController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'wholesale_price' => 'required',
            'specification' => 'nullable',
            'url' => 'nullable',
            'buy_url' => 'nullable',
        ]);

        $product = new Product;

        if ($request->hasFile('image')) {

            $image = $this->uploadImage($request, 'image', 'products');
            $product->image = $image;
        }
        $product->name = $request->name;
        $product->korean_name = $request->korean_name;
        $product->specification = $request->specification;
        $product->category_id = $request->category_id;
        $product->wholesale_price = $request->wholesale_price;
        $product->supply_price = $request->supply_price;
        $product->description = $request->description;
        $product->url = $request->url;
        $product->admin_url = $request->admin_url;
        $product->save();

        toastr('商品 created successfully');


        return redirect()->route('admin.products.index');
    }

    public function updateDescription(Request $request, Product $product)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
        ]);

        $product->update($validated);

        return response()->json(['success' => true]);
    }

    public function updateSupplyPrice(Request $request, Product $product)
    {
        $validated = $request->validate([
            'supply_price' => 'required|numeric|min:0',
        ]);

        $supply_price = $validated['supply_price'];
        $wholesale_price = $supply_price * 1.05;

        $product->update([
            'supply_price' => $supply_price,
            'wholesale_price' => $wholesale_price,
        ]);

        return response()->json(['success' => true, 'wholesale_price' => $wholesale_price]);
    }

    public function updateName(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $product->update($validated);

        return response()->json(['success' => true]);
    }
}
