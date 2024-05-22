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
}
