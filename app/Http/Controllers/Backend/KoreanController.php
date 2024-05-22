<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KoreanController extends Controller
{
    public function index()
    {
        $koreans = \App\Models\Korean::paginate(10);

        return view('korean', compact('koreans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'chinese' => 'required',
            'korean' => 'required',
        ]);

        $korean = new \App\Models\Korean();
        $korean->chinese = $request->chinese;
        $korean->korean = $request->korean;
        $korean->save();

        toastr('korean stored successfully');

        return redirect()->route('korean.show');
    }

    public function show()
    {
        $koreans = \App\Models\Korean::all();
        return view('admin.korean-show', compact('koreans'));
    }
}
