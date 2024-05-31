<?php

namespace App\Http\Controllers;

use App\Models\Shoporder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoporderController extends Controller
{
    public function index()
    {
        $shoporders = Shoporder::with('user')->orderBy('created_at', 'desc')->paginate(10);
        // $shoporders = Shoporder::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(10);

        // dd($shoporders);
        return view('admin.shoporder.index', compact('shoporders'));
    }

    public function create()
    {
        return view('user.shoporder.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'store_name' => 'required',
            'building' => 'required',
            'floor' => 'nullable',
            'position' => 'required',
        ]);

        $shoporder = new Shoporder();
        $shoporder->user_id = Auth::id();
        $shoporder->store_name = $request->input('store_name');
        $shoporder->building = $request->input('building');
        $shoporder->floor = $request->input('floor');
        $shoporder->position = $request->input('position');
        $shoporder->phone = $request->input('phone');
        $shoporder->description = $request->input('description');
        $shoporder->save();

        toastr('Order created successfully');

        return redirect()->route('user.shoporder.index');
    }

    public function edit(Shoporder $shoporder)
    {
        // dd($shoporder);
        $shoporder= Shoporder::find($shoporder->id);
        return view('admin.shoporder.edit', compact('shoporder'));
    }

    public function update(Request $request, Shoporder $shoporder)
    {

        $request->validate([
            'store_name' => 'required',
            'building' => 'required',
            'floor' => 'nullable',
            'position' => 'required',
        ]);

        $shoporder->store_name = $request->input('store_name');
        $shoporder->building = $request->input('building');
        $shoporder->floor = $request->input('floor');
        $shoporder->position = $request->input('position');
        $shoporder->phone = $request->input('phone');
        $shoporder->admin_note = $request->input('admin_note');
        $shoporder->status = $request->input('status');
        $shoporder->save();

        toastr('Order updated successfully');

        return redirect()->route('admin.shoporder.index');
    }
}
