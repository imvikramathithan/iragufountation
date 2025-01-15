<?php

namespace App\Http\Controllers;

use App\Models\Camps;
use Illuminate\Http\Request;

class CampsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $camps = Camps::all();
        return view('adminPanel.camps.index',compact('camps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminPanel.camps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
                $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'caption' => 'nullable|string|max:255',
        ]);

        // Ensure a value is always present for 'caption'
        $validated['caption'] = $validated['caption'] ?? 'Default Caption';

        // Store the uploaded image
        $imagePath = $request->file('image')->store('camps', 'public');

        // Create the record using validated data
        Camps::create([
            'image' => $imagePath,
            'caption' => $validated['caption'], // Use the processed caption value
        ]);

        return redirect()->route('camps.index')->with('success', 'Camps Image added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Camps $camp)
    {
         return view('adminPanel.camps.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camps $camp)
    {
         return view('adminPanel.camps.edit',compact('camp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Camps $camp)
    {
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp',
            'caption' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('camps', 'public');
            $camp->update(['image' => $imagePath]);
        }

        $camp->update(['caption' => $request->caption]);

        return redirect()->route('camps.index')->with('success', 'Camps Images updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camps $camp)
    {
        $camp->delete();
        return redirect()->route('camps.index')->with('success', 'Camps Image deleted.');
    }
}
