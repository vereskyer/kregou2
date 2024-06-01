<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuildingController extends Controller
{

    public function index()
    {
        $buildings = \App\Models\Building::paginate(10);
        return view('admin.building.index', compact('buildings'));
    }
}
