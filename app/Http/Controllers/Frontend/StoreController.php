<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index(Request $request)
    {
    //     $query = Store::query();

    //     if ($request->has('search')) {
    //         $query->where('store_name', 'like', '%' . $request->input('search') . '%');
    //     }
    // // 
    //     $stores = $query->paginate(10);

        $stores = Store::paginate(12);
    
        return view('front-stores', compact('stores'));
    }
}
