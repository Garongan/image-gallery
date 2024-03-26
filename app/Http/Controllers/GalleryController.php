<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    //
    public function index()
    {

        return view('gallery.index', [
            'title' => 'List of my images',
            'images' => Gallery::where('user_id', auth()->id())->paginate(10)
        ]);
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

    public function show(Gallery $gallery)
    {
        return view('gallery.show', [
            'title' => 'Detail Image',
            'gallery' => $gallery
        ]);
    }

    public function destroy(Gallery $gallery){
        if ($gallery->path) {
            Storage::delete($gallery->path);
        }

        Gallery::destroy($gallery->id);
        return redirect('/gallery')->with('success', 'Image in your gallery has been deleted');
    }
}
