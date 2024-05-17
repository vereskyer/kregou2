<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function forms()
    {
        return view('admin.forms');
    }

    public function buttons()
    {
        return view('admin.buttons');
    }

    public function cards()
    {
        return view('admin.cards');
    }

    public function charts()
    {
        return view('admin.charts');
    }

    public function modals()
    {
        return view('admin.modals');
    }

    public function tables()
    {
        return view('admin.tables');
    }
}
