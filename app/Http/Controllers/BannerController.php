<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BannerRequest;

class BannerController extends Controller
{
    // Display a listing of banners
    public function index()
    {
        $banners = Banner::all(); 
        return view('banner.index', compact('banners'));
    }

    // Show the form for creating a new banner
    public function create()
    {
        return view('banner.create');
    }

    // Store a newly created banner in storage
    public function store(BannerRequest $request)
    {
        // Validate the request data using BannerRequest
        $validatedData = $request->validated();

        // Create a new banner instance
        $banner = new Banner();
        $banner->title = $validatedData['title'];

        // Handle image upload
        if ($request->hasFile('image')) {
            try {
                // Store image and set path to banner model
                $banner->image = $request->file('image')->store('banners', 'public');
            } catch (\Exception $e) {
                return back()->withErrors(['image' => 'Image upload failed: ' . $e->getMessage()]);
            }
        }

        // Save the banner
        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner created successfully.');
    }

    // Show the form for editing the specified banner
    public function edit(Banner $banner)
    {
        return view('banner.edit', compact('banner'));
    }

    // Update the specified banner in storage
    public function update(BannerRequest $request, Banner $banner)
    {
        $validatedData = $request->validated();

        // Update the banner fields
        $banner->title = $validatedData['title'];

        // Handle image upload and replace old image if a new one is uploaded
        if ($request->hasFile('image')) {
            if ($banner->image) {
                // Delete old image
                Storage::delete('public/' . $banner->image);
            }

            try {
                // Store new image
                $banner->image = $request->file('image')->store('banners', 'public');
            } catch (\Exception $e) {
                return back()->withErrors(['image' => 'Image upload failed: ' . $e->getMessage()]);
            }
        }

        // Save updated banner data
        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner updated successfully.');
    }

    // Remove the specified banner from storage
    public function destroy(Banner $banner)
    {
        // Delete image if it exists
        if ($banner->image) {
            Storage::delete('public/' . $banner->image);
        }

        // Delete banner from database
        $banner->delete();

        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully.');
    }
}
