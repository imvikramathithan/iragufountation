<?php

namespace App\Http\Controllers;

use App\Models\Galleries;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Galleries::all();
        return view('adminPanel.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('adminPanel.galleries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'caption' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('galleries', 'public');

        Galleries::create([
            'image' => $imagePath,
            'caption' => $request->caption,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Image added to gallery.');
    }

    public function edit(Galleries $gallery)
    {
        return view('adminPanel.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Galleries $gallery)
    {
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp',
            'caption' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('galleries', 'public');
            $gallery->update(['image' => $imagePath]);
        }

        $gallery->update(['caption' => $request->caption]);

        return redirect()->route('galleries.index')->with('success', 'Image updated.');
    }

    public function destroy(Galleries $gallery)
    {
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Image deleted.');
    }
}
