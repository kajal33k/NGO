<?php

namespace App\Http\Controllers;

use App\Models\Heading;
use Illuminate\Http\Request;

class HeadingController extends Controller
{
   
    
        public function index()
        {
            $headings = Heading::all();
            return view('heading.index', compact('headings'));
        }
    
        public function create()
        {
            return view('heading.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'sub_title' => 'nullable|string|max:255',
                'quotes' => 'nullable|string',
            ]);
    
            Heading::create($request->all());
            return redirect()->route('heading.index')->with('success', 'Heading created successfully.');
        }
    
        public function show(Heading $heading)
        {
            return view('heading.show', compact('heading'));
        }
    
        public function edit(Heading $heading)
        {
            return view('heading.edit', compact('heading'));
        }
    
        public function update(Request $request, Heading $heading)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'sub_title' => 'nullable|string|max:255',
                'quotes' => 'nullable|string',
            ]);
    
            $heading->update($request->all());
            return redirect()->route('heading.index')->with('success', 'Heading updated successfully.');
        }
    
        public function destroy(Heading $heading)
        {
            $heading->delete();
            return redirect()->route('heading.index')->with('success', 'Heading deleted successfully.');
        }
}
    

