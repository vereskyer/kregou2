<?php

namespace App\Http\Controllers\Backend;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
        return view('admin.store.create');
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
        //
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
}
