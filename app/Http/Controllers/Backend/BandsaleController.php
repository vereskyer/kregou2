<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class BandsaleController extends Controller
{
    use ImageUploadTrait;
    public function index()
    {
        $bandsales = \App\Models\Bandsale::orderBy('id', 'desc')->paginate(5);
        return view('admin.bandsale.index', compact('bandsales'));
    }

    public function create()
    {
        return view('admin.bandsale.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'wholesale_condition' => 'required',
            'description' => 'required',
            'url' => 'nullable',
            'admin_url' => 'nullable',
        ]);

        $bandsale = new \App\Models\Bandsale;

        if ($request->hasFile('image')) {

            $image = $this->uploadImage($request, 'image', 'bandsales');
            $bandsale->image = $image;
        }
        $bandsale->title = $request->title;
        $bandsale->wholesale_condition = $request->wholesale_condition;
        $bandsale->description = $request->description;
        $bandsale->url = $request->url;
        $bandsale->admin_url = $request->admin_url;
        $bandsale->save();

        toastr('bandsale created successfully');


        return redirect()->route('admin.bandsales.index');
    }
}
