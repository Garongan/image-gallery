<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function index()
    {
        return view('gallery.index', ['title' => 'My Gallery']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
}
