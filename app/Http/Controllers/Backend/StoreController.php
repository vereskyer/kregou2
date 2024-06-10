<?php

namespace App\Http\Controllers\Backend;

use App\Models\Store;
use App\Models\Building;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Bavix\Wallet\Exceptions\InsufficientFunds;

class StoreController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Store::query();

        if ($request->has('search')) {
            $query->where('store_name', 'like', '%' . $request->input('search') . '%');
        }

        $stores = $query->paginate(10);

        return view('admin.store.index', compact('stores'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buildings = Building::all();
        return view('admin.store.create', compact('buildings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'store_name' => 'required|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'building_id' => 'required',
            'price' => 'nullable',
            'floor' => 'required',
            'position' => 'nullable',
            'phone' => 'nullable',
            'handphone' => 'nullable',
            'kakao' => 'nullable',
            'wechat' => 'nullable',
            'line' => 'nullable',
            'instagram' => 'nullable',
            'website' => 'nullable',
            'ks_story' => 'nullable',

        ]);

        // $user = Auth::user();
        $store = new Store();

        if ($request->hasFile('image')) {
            if (File::exists(public_path($store->image))) {
                File::delete(public_path($store->image));

                $image = $this->uploadImage($request, 'image', 'stores');
            }
        }

        $store->store_name = $request->store_name;
        $store->building_id = $request->building_id;
        $store->image = $image ?? $store->image;
        $store->floor = $request->floor;
        $store->position = $request->position;
        $store->phone = $request->phone;
        $store->handphone = $request->handphone;
        $store->kakao = $request->kakao;
        $store->wechat = $request->wechat;
        $store->line = $request->line;
        $store->instagram = $request->instagram;
        $store->website = $request->website;
        $store->ks_story = $request->ks_story;
        $store->price = $request->price;
        $store->description= $request->description;

        // dd($store);
        $store->save();

        // return redirect()->back()->with('success', 'Profile updated successfully');
        toastr('Profile created successfully');

        return redirect()->route('admin.store.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $store = Store::find($id);
        $buildings = Building::all();
        return view('admin.store.edit', compact('store', 'buildings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        Log::info('Search query:', ['query' => $query]);

        $stores = Store::with('building')
            ->where('store_name', 'like', "%{$query}%")
            ->orWhere('floor', 'like', "%{$query}%")
            ->orWhere('position', 'like', "%{$query}%")
            ->orWhere('phone', 'like', "%{$query}%")
            ->get();

        Log::info('Stores found:', ['stores' => $stores]);

        return response()->json($stores->toArray());
    }

    public function storeImage(Request $request, Store $store)
    {
         // 确定文件输入名称、保存路径和商店ID
         $inputName = 'images'; // 确保你的表单输入名称和这里一致
         $path = 'uploads/store_images'; // 你想要保存图片的路径
         $storeId = $store->id;
 
         // 调用上传多张图片的方法
         $imagePaths = $this->uploadMultiImage($request, $inputName, $path, $storeId);
 
         // 根据需要返回响应，或者重定向
         if ($imagePaths) {
             return back()->with('success', 'Images uploaded successfully');
         }
 
         return back()->with('error', 'No images were uploaded');
    }
}
