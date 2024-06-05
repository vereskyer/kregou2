<?php

namespace App\Http\Controllers\Backend;

use App\Models\Website;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function index()
    {
        $websites = Website::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.website.index', compact('websites'));
    }

    public function create()
    {
        return view('admin.website.create');
    }

    public function store(Request $request)
    {
        $website = new Website;

        $website->name = $request->name;
        $website->url = $request->url;
        $website->description = $request->description;
        $website->tag = $request->tag;

        $website->save();
        return redirect()->route('admin.websites.index');
    }

    public function showWebsiteFrontend()
    {
        $websites = Website::orderBy('created_at', 'desc')->paginate(30);
        return view('frontend.show-websites-frontend', compact('websites'));
    }   
}
