<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class SiteorderController extends Controller
{
    use ImageUploadTrait;

    // public function index()
    // {
    //     $siteorders = \App\Models\Siteorder::orderBy('created_at', 'desc')->paginate(5);
    //     return view('user.siteorder.index', compact('siteorders'));
    // }

    public function index()
    {
        // 獲取當前認證用戶的 ID
        $userId = auth()->id();

        // 根據用戶 ID 篩選 siteorders
        $siteorders = \App\Models\Siteorder::where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        // 返回視圖並傳遞 siteorders 資料
        return view('user.siteorder.index', compact('siteorders'));
    }

    
    public function create()
    {
        return view('user.siteorder.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'description' => 'required|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url' => 'required',
        ]);

        $siteorder = new \App\Models\Siteorder;

        if ($request->hasFile('image')) {

            $image = $this->uploadImage($request, 'image', 'siteorders');
            $siteorder->image = $image;
        }
        $siteorder->description = $request->description;
        $siteorder->url = $request->url;
        $siteorder->user_id = Auth::user()->id;
        $siteorder->save();

        toastr('Siteorder created successfully');


        return redirect()->route('user.siteorder');
    }


    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('images'), $fileName);

            $url = asset('images/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
