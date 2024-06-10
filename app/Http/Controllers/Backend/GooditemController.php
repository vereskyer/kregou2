<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class GooditemController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $gooditems = \App\Models\Gooditem::paginate(10);
        return view('admin.gooditem.index', compact('gooditems'));
    }

    public function create()
    {
        return view('admin.gooditem.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'url' => 'nullable',
            'buy_url' => 'nullable',
        ]);

        $gooditem = new \App\Models\Gooditem;

        if ($request->hasFile('image')) {

            $image = $this->uploadImage($request, 'image', 'gooditems');
            $gooditem->image = $image;
        }
        $gooditem->title = $request->title;
        $gooditem->content = $request->content;
        $gooditem->url = $request->url;
        $gooditem->buy_url = $request->buy_url;
        $gooditem->save();

        toastr('Profile created successfully');


        return redirect()->route('admin.gooditems.index');
    }
}
