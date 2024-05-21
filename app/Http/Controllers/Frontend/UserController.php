<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Shoporder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $shoporders = Shoporder::where('user_id', Auth::user()->id)->paginate(10);
        return view('user.dashboard', compact('shoporders'));
    }
}
