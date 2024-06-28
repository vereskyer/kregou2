<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;

class BulkProductUploadController extends Controller
{
    use ImageUploadTrait;

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.bulk-product-upload', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'images' => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'default_supply_price' => 'required|numeric|min:0' // 添加默认 supply_price 的验证
        ]);

        $category = Category::findOrFail($request->category_id);
        $date = now()->format('Ymd');
        $counter = 1;

        DB::beginTransaction();

        try {
            // 使用 uploadMultiImage 方法上传图片
            $imagePaths = $this->uploadMultiImage($request, 'images', 'uploads/products', $category->id);

            if ($imagePaths) {
                foreach ($imagePaths as $imagePath) {
                    $supply_price = $request->default_supply_price; // 使用默认的 supply_price
                    $wholesale_price = $supply_price * 1.05; // 计算 wholesale_price

                    Product::create([
                        'category_id' => $category->id,
                        'name' => $counter,
                        'image' => $imagePath,
                        'supply_price' => $supply_price,
                        'wholesale_price' => $wholesale_price,
                        'quantity' => 1000, // 设置默认值
                        'active' => 1, // 设置默认值
                    ]);

                    $counter++;
                }
            }

            DB::commit();
            return redirect()->route('admin.products.index')->with('success', '商品批量上传成功');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', '上传失败：' . $e->getMessage());
        }
    }
}
