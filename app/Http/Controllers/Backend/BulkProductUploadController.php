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
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $category = Category::findOrFail($request->category_id);
        $date = now()->format('Ymd');
        $counter = 1;

        DB::beginTransaction();

        try {
            // 使用 uploadMultiImage 方法上傳圖片
            $imagePaths = $this->uploadMultiImage($request, 'images', 'uploads/products', $category->id);

            if ($imagePaths) {
                foreach ($imagePaths as $imagePath) {
                    Product::create([
                        'category_id' => $category->id,
                        'name' => $counter,
                        'image' => $imagePath,
                        'wholesale_price' => 0, // 設置默認值
                        'quantity' => 1000, // 設置默認值
                        'active' => 1, // 設置默認值
                    ]);

                    $counter++;
                }
            }

            DB::commit();
            return redirect()->back()->with('success', '商品批量上傳成功');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', '上傳失敗：' . $e->getMessage());
        }
    }
}
