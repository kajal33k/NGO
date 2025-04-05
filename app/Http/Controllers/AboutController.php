<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
     // Display a listing of banners
     public function index()
     {
         $abouts = About::all(); 
         return view('about.index', compact('abouts'));
     }
 
     // Show the form for creating a new About
     public function create()
     {
         return view('about.create');
     }
 
     // Store a newly created About in storage
     public function store(AboutRequest $request)
     {
         // Validate the request data using AboutRequest
         $validatedData = $request->validated();
 
         // Create a new About instance
         $About = new About();
         $About->title = $validatedData['title'];
         $About->description = $validatedData['description'];
 
         // Handle image upload
         if ($request->hasFile('image')) {
             try {
                 // Store image and set path to About model
                 $About->image = $request->file('image')->store('abouts', 'public');
             } catch (\Exception $e) {
                 return back()->withErrors(['image' => 'Image upload failed: ' . $e->getMessage()]);
             }
         }
 
         // Save the About
         $About->save();
 
         return redirect()->route('about.index')->with('success', 'About created successfully.');
     }
 
     // Show the form for editing the specified About
     public function edit(About $about)
     {
         return view('about.edit', compact('about'));
     }
 
     // Update the specified About in storage
     public function update(AboutRequest $request, About $about)
     {
         $validatedData = $request->validated();
 
         // Update the About fields
         $about->description = $validatedData['description'];
 
         // Handle image upload and replace old image if a new one is uploaded
         if ($request->hasFile('image')) {
             if ($about->image) {
                 // Delete old image
                 Storage::delete('public/' . $about->image);
             }
 
             try {
                 // Store new image
                 $about->image = $request->file('image')->store('abouts', 'public');
             } catch (\Exception $e) {
                 return back()->withErrors(['image' => 'Image upload failed: ' . $e->getMessage()]);
             }
         }
 
         // Save updated About data
         $about->save();
 
         return redirect()->route('about.index')->with('success', 'About updated successfully.');
     }
 
     // Remove the specified About from storage
     public function destroy(About $about)
     {
         // Delete image if it exists
         if ($about->image) {
             Storage::delete('public/' . $about->image);
         }
 
         // Delete About from database
         $about->delete();
 
         return redirect()->route('about.index')->with('success', 'About deleted successfully.');
     }
    }
 
