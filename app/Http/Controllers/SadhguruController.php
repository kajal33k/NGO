<?php

namespace App\Http\Controllers;

use App\Models\Sadhguru;
use Illuminate\Http\Request;

class SadhguruController extends Controller
{
    // Show all Sadhgurus
    public function index()
    {
        $sadhgurus = Sadhguru::all();
        return view('sadhguru.index', compact('sadhgurus'));
    }

    // Show the form for creating a new Sadhguru
    public function create()
    {
        return view('sadhguru.create');
    }

    // Store a new Sadhguru
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'para1' => 'required',
            'para2' => 'nullable',
            'qoutes' => 'nullable',
            'author' => 'nullable',
            'image' => 'nullable|image',  // If handling image uploads
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('sadhguru_images', 'public');
        }

        // Create a new Sadhguru entry
        Sadhguru::create($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('sadhguru.index')->with('success', 'Sadhguru created successfully!');
    }

    // Show a specific Sadhguru
    public function show(Sadhguru $sadhguru)
    {
        return view('sadhguru.show', compact('sadhguru'));
    }

    // Show the form for editing a specific Sadhguru
    public function edit(Sadhguru $sadhguru)
    {
        return view('sadhguru.edit', compact('sadhguru'));
    }

    // Update a specific Sadhguru
    public function update(Request $request, Sadhguru $sadhguru)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required',
            'para1' => 'required',
            'para2' => 'nullable',
            'qoutes' => 'nullable',
            'author' => 'nullable',
            'image' => 'nullable|image',  // If handling image uploads
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('sadhguru_images', 'public');
        }

        // Update the Sadhguru entry
        $sadhguru->update($validatedData);

        // Redirect to the index page with a success message
        return redirect()->route('sadhguru.index')->with('success', 'Sadhguru updated successfully!');
    }

    // Delete a specific Sadhguru
    public function destroy(Sadhguru $sadhguru)
    {
        // Delete the Sadhguru entry
        $sadhguru->delete();

        // Redirect to the index page with a success message
        return redirect()->route('sadhguru.index')->with('success', 'Sadhguru deleted successfully!');
    }
}
