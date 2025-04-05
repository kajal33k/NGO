<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{

    // Display a listing of the stories
    public function index()
    {
        $stories = Story::all();
        return view('story.index', compact('stories'));
    }

    // Show the form for creating a new story
    public function create()
    {
        return view('story.create');
    }

    // Store a newly created story in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Story::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('story.index')->with('success', 'Story created successfully.');
    }

    // Display the specified story
    public function show(Story $story)
    {
        return view('story.show', compact('story'));
    }

    // Show the form for editing the specified story
    public function edit(Story $story)
    {
        return view('story.edit', compact('story'));
    }

    // Update the specified story in storage
    public function update(Request $request, Story $story)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $story->title = $request->title;
        $story->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $story->image = $imagePath;
        }

        $story->save();

        return redirect()->route('story.index')->with('success', 'Story updated successfully.');
    }

    // Remove the specified story from storage
    public function destroy(Story $story)
    {
        $story->delete();

        return redirect()->route('story.index')->with('success', 'Story deleted successfully.');
    }
}


