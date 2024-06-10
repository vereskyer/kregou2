<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodItemsController extends Controller
{
    public function index()
    {
        $gooditems = \App\Models\Gooditem::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.good-items', compact('gooditems'));
    }

    
}
