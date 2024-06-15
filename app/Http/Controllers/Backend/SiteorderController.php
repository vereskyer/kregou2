<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteorderController extends Controller
{
    public function index()
    {
        $siteorders = \App\Models\Siteorder::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.siteorder.index', compact('siteorders'));
    }

    public function edit($id)
    {
        $siteorder = \App\Models\Siteorder::find($id);
        return view('admin.siteorder.edit', compact('siteorder'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $siteorder = \App\Models\Siteorder::find($id);
       
        $siteorder->notes = $request->notes;
        
        $siteorder->update($request->all());
        return redirect()->route('admin.siteorder.index');
    }
}
