<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Shoporder;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    use ImageUploadTrait;
    
    public function index()
    {
        $shoporders = Shoporder::where('user_id', Auth::user()->id)->paginate(10);
        return view('user.dashboard', compact('shoporders'));
    }

    public function profile()
    {
        return view('user.profile.index');
    }

    public function update(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('image')) {
            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));

                $image = $this->uploadImage($request, 'image', 'uploads');
            }
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $image ?? $user->image;

        $user->save();

        // return redirect()->back()->with('success', 'Profile updated successfully');
        toastr('Profile updated successfully');

        return redirect()->route('user.dashboard');
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

        // return redirect()->back()->with('success', 'Password updated successfully');
        toastr('Password updated successfully');

        return redirect()->route('user.dashboard');
    }

    public function shoporder()
    {
        $shoporders = Shoporder::where('user_id', Auth::user()->id)->paginate(10);
        return view('user.shoporder.index', compact('shoporders'));
    }

    public function namecard()
    {
        $user = Auth::user();

        return view('user.namecard', compact('user'));
    }
     
}
