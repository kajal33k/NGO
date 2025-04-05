<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller

{
    // Display a listing of the cards
    public function index()
    {
        $cards = Card::all();
        return view('card.index', compact('cards'));
    }

    // Show the form for creating a new card
    public function create()
    {
        return view('card.create');
    }

    // Store a newly created card in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        Card::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('card.index')->with('success', 'Card created successfully.');
    }

    // Display the specified card
    public function show(Card $card)
    {
        return view('card.show', compact('card'));
    }

    // Show the form for editing the specified card
    public function edit(Card $card)
    {
        return view('card.edit', compact('card'));
    }

    // Update the specified card in storage
    public function update(Request $request, Card $card)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $card->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('card.index')->with('success', 'Card updated successfully.');
    }

    // Remove the specified card from storage
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('card.index')->with('success', 'Card deleted successfully.');
    }
}


