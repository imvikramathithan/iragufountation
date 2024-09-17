<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();
        return view('adminPanel.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('adminPanel.slides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstLine' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3048'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('slides', 'public');

        }

        Slide::create([
            'firstLine' => $request->firstLine,
            'midLine' => $request->midLine,
            'lastLine' => $request->lastLine,
            'image' => $imagePath,
        ]);

        return redirect()->route('slides.index')->with('success', 'Slide created successfully.');
    }

    public function edit(Slide $slide)
    {
        return view('adminPanel.slides.edit', compact('slide'));
    }

    public function update(Request $request, Slide $slide)
    {
        $request->validate([
            'firstLine' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3048'
        ]);

        $imagePath = $slide->image;
        if ($request->hasFile('image')) {
            if ($slide->image) {
                Storage::delete('public/' . $slide->image);
            }
           $imagePath = $request->file('image')->store('slides', 'public');


        }

        $slide->update([
            'firstLine' => $request->firstLine,
            'midLine' => $request->midLine,
            'lastLine' => $request->lastLine,
            'image' => $imagePath,
        ]);

        return redirect()->route('slides.index')->with('success', 'Slide updated successfully.');
    }

    public function destroy(Slide $slide)
    {
        if ($slide->image) {
            Storage::delete('public/' . $slide->image);
        }
        $slide->delete();

        return redirect()->route('slides.index')->with('success', 'Slide deleted successfully.');
    }
}
