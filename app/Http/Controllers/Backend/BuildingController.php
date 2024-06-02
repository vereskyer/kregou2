<?php

namespace App\Http\Controllers\Backend;

use App\Models\Building;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use App\Http\Controllers\Controller;

class BuildingController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $buildings = \App\Models\Building::paginate(10);
        return view('admin.building.index', compact('buildings'));
    }

    public function edit(string $id)
    {
        $building = \App\Models\Building::find($id);
        return view('admin.building.edit', compact('building'));
    }

    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $building = Building::findOrFail($id);

        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'tag' => 'max:255',
            'description' => 'max:255',
        ]);

        $image = $this->uploadImage($request, 'image', 'buildings');

        $building->image = $image ?? $building->image;

        $building->name = $request->name;
        $building->tag = $request->tag;
        $building->description = $request->description;
        $building->save();

        toastr('Building updated successfully');

        return redirect()->route('admin.buildings.index');
    }
}
