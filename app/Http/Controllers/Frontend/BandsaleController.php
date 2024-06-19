<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BandsaleController extends Controller
{
    public function index()
    {
        $bandsales = \App\Models\Bandsale::orderBy('id', 'desc')->paginate(5);
        return view('bandsales.index', compact('bandsales'));
    }

    public function show($id)
    {
        $bandsale = \App\Models\Bandsale::find($id);
        return view('bandsales.show', compact('bandsale'));
    }
}
