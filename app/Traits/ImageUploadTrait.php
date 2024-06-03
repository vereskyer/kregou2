<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\StoreImage;


trait ImageUploadTrait
{

    public function uploadImage(Request $request, $inputName, $path)
    {
        if ($request->hasFile($inputName)) {

            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'hanguodaigou_' . uniqid() . '.' . $ext;
            $image->move(public_path($path), $imageName);

            return $path . '/' . $imageName;
        }
    }


    public function updateImage(Request $request, $inputName, $path, $oldPath = null)
    {
        if ($request->hasFile($inputName)) {

            if (File::exists(public_path($oldPath))) {
                File::delete(public_path($oldPath));
            }

            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'hanguodaigou_' . uniqid() . '.' . $ext;
            $image->move(public_path($path), $imageName);

            return $path . '/' . $imageName;
        }
    }

    // delete image
    public function deleteImage(string $path)
    {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }



    public function uploadMultiImage(Request $request, $inputName, $path, $storeId)
    {
        $imagePaths = [];

        // 获取当前日期
        $currentDate = date('Ymd');

        // 在路径中添加日期
        $pathWithDate = $path . '/' . $currentDate;

        if ($request->hasFile($inputName)) {

            $images = $request->{$inputName};

            foreach ($images as $image) {

                $ext = $image->getClientOriginalExtension();
                $imageName = 'hanguodaigou_' . uniqid() . '.' . $ext;

                // 创建带有日期的文件夹（如果不存在）
                if (!file_exists(public_path($pathWithDate))) {
                    mkdir(public_path($pathWithDate), 0755, true);
                }

                // 将图片移动到带有日期的文件夹中
                $image->move(public_path($pathWithDate), $imageName);

                // 将图片路径添加到数组中
                $imagePath = $pathWithDate . '/' . $imageName;
                $imagePaths[] = $imagePath;

                // 保存图片信息到数据库
                StoreImage::create([
                    'store_id' => $storeId,
                    'image_path' => $imagePath,
                ]);
            }

            return $imagePaths;
        }

        return null;  // 如果没有文件上传，返回 null
    }
}
