<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    // Display a listing of the containers
    public function index()
    {
        $videos = Video::all();
        return view('video.index', compact('videos'));
    }

    // Show the form for creating a new video
    public function create()
    {
        return view('video.create');
    }

    // Store a newly created video in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'background_image' => 'required|url',
            'video1' => 'required|url',
            'video2' => 'required|url',
            'video3' => 'required|url',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        // Handle image uploads if present
        foreach (['video1', 'video2', 'video3'] as $videoField) {
            if ($request->hasFile($videoField)) {
                $validatedData[$videoField] = $request->file($videoField)->store('video_images', 'public');
            }
        }

        // Create the video
        video::create($validatedData);
        
        return redirect()->route('video.index')->with('success', 'video created successfully!');
    }

    // Display the specified video
    public function show(video $video)
    {
        return view('video.show', compact('video'));
    }

    // Show the form for editing the specified video
    public function edit(video $video)
    {
        return view('video.edit', compact('video'));
    }

    // Update the specified video in storage
    public function update(Request $request, video $video)
    {
        $validatedData = $request->validate([
            'background_image' => 'required|url',
            'video1' => 'required|url',
            'video2' => 'required|url',
            'video3' => 'required|url',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        // Handle image uploads if present
        foreach (['video1', 'video2', 'video3'] as $videoField) {
            if ($request->hasFile($videoField)) {
                $validatedData[$videoField] = $request->file($videoField)->store('video_images', 'public');
            }
        }

        // Update the video
        $video->update($validatedData);
        
        return redirect()->route('video.index')->with('success', 'video updated successfully!');
    }

    // Remove the specified video from storage
    public function destroy(video $video)
    {
        $video->delete();
        
        return redirect()->route('video.index')->with('success', 'video deleted successfully!');
    }
}
