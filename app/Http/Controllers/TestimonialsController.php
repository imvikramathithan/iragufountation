<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonials::all();
        return view('adminPanel.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminPanel.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'school_name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:3048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
        }

        Testimonials::create([
            'school_name' => $validated['school_name'],
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonials $testimonial)
    {
        return view('testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonials $testimonial)
    {
        return view('adminPanel.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonials $testimonial)
    {
        $validated = $request->validate([
            'school_name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:3048',
        ]);

        if ($request->hasFile('image')) {
            $testimonial->image = $request->file('image')->store('testimonials', 'public');
        }

        $testimonial->update([
            'school_name' => $validated['school_name'],
            'description' => $validated['description'],
            'image' => $testimonial->image,
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonials $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
