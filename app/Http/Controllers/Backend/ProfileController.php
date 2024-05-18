<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('admin.profile.index');
    }


    public function updatePassword(Request $request)
    {

        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|confirmed|min:8|different:current_password',
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'Password updated successfully');
        // toastr('Password updated successfully');

        return redirect()->back();
    }

}
