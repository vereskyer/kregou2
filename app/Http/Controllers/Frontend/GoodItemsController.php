<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodItemsController extends Controller
{
    public function index()
    {
        $gooditems = \App\Models\Gooditem::orderBy('created_at', 'desc')->paginate(5);
        return view('gooditems.index', compact('gooditems'));
    }

    public function show($id)
    {
        $gooditem = \App\Models\Gooditem::find($id);
        return view('gooditems.show', compact('gooditem'));
    }

    public function homeWelcome()
    {
        $gooditems = \App\Models\Gooditem::orderBy('created_at', 'desc')->paginate(12);
        return view('welcome', compact('gooditems'));
    }

    
}
