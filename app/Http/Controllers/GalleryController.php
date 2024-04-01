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

    public function create()
    {
        return view('gallery.create', [
            'title' => 'Upload Image'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $fileName = Storage::disk('google')->put('', $request->file('image'));
            $validated['fileName'] = $fileName;
            $path = Storage::disk('google')->url('/' . $fileName);
            $validated['path'] = $path;
            $validated['size'] = $request->file('image')->getSize();
            $validated['extension'] = $request->file('image')->getMimeType();
        }
        $validated['user_id'] = auth()->id();

        Gallery::create($validated);

        return redirect('/gallery')->with('success', 'Image has been uploaded');
    }

    public function show(Gallery $gallery)
    {
        return view('gallery.show', [
            'title' => 'Detail Image',
            'gallery' => $gallery
        ]);
    }

    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', [
            'title' => 'Edit Image',
            'gallery' => $gallery
        ]);
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $details =  explode('/', $request->oldImage);
            $id = substr($details[3], 6, 33);
            Storage::disk('google')->delete($id);
            $fileName = Storage::disk('google')->put('', $request->file('image'));
            $validated['fileName'] = $fileName;
            $path = Storage::disk('google')->url('/' . $fileName);
            $validated['path'] = $path;
            $validated['size'] = $request->file('image')->getSize();
            $validated['extension'] = $request->file('image')->getMimeType();
        }

        Gallery::where('id', $gallery->id)->update($validated);

        return redirect('/gallery')->with('success', 'Image has been updated');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->path) {
            $details =  explode('/', $gallery->path);
            $id = substr($details[3], 6, 33);
            Storage::disk('google')->delete($id);
        }

        Gallery::destroy($gallery->id);
        return redirect('/gallery')->with('success', 'Image in your gallery has been deleted');
    }
}
