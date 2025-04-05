<?php

namespace App\Http\Controllers;

use App\Http\Requests\about_sunilRequest;
use App\Models\about_sunil; // Make sure to use the correct model name with proper casing
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class about_sunilController extends Controller
{
    // Display a listing of banners
    public function index()
    {
        $about_sunils = about_sunil::all(); 
        return view('about_sunil.index', compact('about_sunils'));
    }

    // Show the form for creating a new about_sunil
    public function create()
    {
        return view('about_sunil.create');
    }

    // Store a newly created about_sunil in storage
    public function store(about_sunilRequest $request)
    {
        // Validate the request data using about_sunilRequest
        $validatedData = $request->validated();

        // Create a new about_sunil instance
        $about_sunil = new about_sunil();
        $about_sunil->title = $validatedData['title'];
        $about_sunil->description = $validatedData['description'];

        // Handle image upload
        if ($request->hasFile('image')) {
            try {
                // Store image and set path to about_sunil model
                $about_sunil->image = $request->file('image')->store('about_sunils', 'public');
            } catch (\Exception $e) {
                return back()->withErrors(['image' => 'Image upload failed: ' . $e->getMessage()]);
            }
        }

        // Save the about_sunil
        $about_sunil->save();

        return redirect()->route('about_sunil.index')->with('success', 'about_sunil created successfully.');
    }

    // Show the form for editing the specified about_sunil
    public function edit(about_sunil $about_sunil)
    {
        return view('about_sunil.edit', compact('about_sunil'));
    }

    // Update the specified about_sunil in storage
    public function update(about_sunilRequest $request, about_sunil $about_sunil)
    {
        $validatedData = $request->validated();

        // Update the about_sunil fields
        $about_sunil->description = $validatedData['description'];

        // Handle image upload and replace old image if a new one is uploaded
        if ($request->hasFile('image')) {
            if ($about_sunil->image) {
                // Delete old image
                Storage::delete('public/' . $about_sunil->image);
            }

            try {
                // Store new image
                $about_sunil->image = $request->file('image')->store('about_sunils', 'public');
            } catch (\Exception $e) {
                return back()->withErrors(['image' => 'Image upload failed: ' . $e->getMessage()]);
            }
        }

        // Save updated about_sunil data
        $about_sunil->save();

        return redirect()->route('about_sunil.index')->with('success', 'about_sunil updated successfully.');
    }

    // Remove the specified about_sunil from storage
    public function destroy(about_sunil $about_sunil)
    {
        // Delete image if it exists
        if ($about_sunil->image) {
            Storage::delete('public/' . $about_sunil->image);
        }

        // Delete about_sunil from database
        $about_sunil->delete();

        return redirect()->route('about_sunil.index')->with('success', 'about_sunil deleted successfully.');
    }
   }


