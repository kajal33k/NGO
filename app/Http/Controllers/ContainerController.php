<?php

namespace App\Http\Controllers;

use App\Models\Container;
use Illuminate\Http\Request;

class ContainerController extends Controller
{
    // Display a listing of the containers
    public function index()
    {
        $containers = Container::all();
        return view('container.index', compact('containers'));
    }

    // Show the form for creating a new container
    public function create()
    {
        return view('container.create');
    }

    // Store a newly created container in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'sub_title' => 'nullable',
            'paragraph' => 'nullable',
            'image1' => 'nullable|image',
            'image2' => 'nullable|image',
            'image3' => 'nullable|image',
        ]);

        // Handle image uploads if present
        foreach (['image1', 'image2', 'image3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $validatedData[$imageField] = $request->file($imageField)->store('container_images', 'public');
            }
        }

        // Create the container
        Container::create($validatedData);
        
        return redirect()->route('container.index')->with('success', 'Container created successfully!');
    }

    // Display the specified container
    public function show(Container $container)
    {
        return view('container.show', compact('container'));
    }

    // Show the form for editing the specified container
    public function edit(Container $container)
    {
        return view('container.edit', compact('container'));
    }

    // Update the specified container in storage
    public function update(Request $request, Container $container)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'sub_title' => 'nullable',
            'paragraph' => 'nullable',
            'image1' => 'nullable|image',
            'image2' => 'nullable|image',
            'image3' => 'nullable|image',
        ]);

        // Handle image uploads if present
        foreach (['image1', 'image2', 'image3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $validatedData[$imageField] = $request->file($imageField)->store('container_images', 'public');
            }
        }

        // Update the container
        $container->update($validatedData);
        
        return redirect()->route('container.index')->with('success', 'Container updated successfully!');
    }

    // Remove the specified container from storage
    public function destroy(Container $container)
    {
        $container->delete();
        
        return redirect()->route('container.index')->with('success', 'Container deleted successfully!');
    }
}
