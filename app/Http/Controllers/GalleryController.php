<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Display a listing of the galleries
    public function index()
    {
        $gallerys = Gallery::all();
        return view('gallery.index', compact('gallerys'));
    }

    // Show the form for creating a new gallery
    public function create()
    {
        return view('gallery.create');
    }

    // Store a newly created gallery in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('image')->store('images', 'public');

        Gallery::create([
            'title' => $request->title,
            'image' => $path,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully.');
    }

    // Display the specified gallery
    public function show(Gallery $gallery)
    {
        return view('gallery.show', compact('gallerys'));
    }

    // Show the form for editing the specified gallery
    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', compact('gallery'));
    }

    // Update the specified gallery in storage
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery->title = $request->title;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $gallery->image = $path;
        }

        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
    }

    // Remove the specified gallery from storage
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
