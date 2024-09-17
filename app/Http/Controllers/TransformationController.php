<?php
namespace App\Http\Controllers;

use App\Models\Transformations;
use Illuminate\Http\Request;

class TransformationController extends Controller
{
    public function index()
    {
        $transformations = Transformations::all();
        return view('adminPanel.transformations.index', compact('transformations'));
    }

    public function create()
    {
        return view('adminPanel.transformations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:3048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('transformations', 'public');
        }

        Transformations::create([
            'image' => $imagePath,
        ]);

        return redirect()->route('transformations.index')->with('success', 'Transformation image added successfully.');
    }

    public function show(Transformations $transformation)
    {
        return view('transformations.show', compact('transformation'));
    }

    public function edit(Transformations $transformation)
    {
        return view('adminPanel.transformations.edit', compact('transformation'));
    }

    public function update(Request $request, Transformations $transformation)
    {
        $validated = $request->validate([
            'image' => 'image|nullable|mimes:jpeg,png,jpg,gif,webp|max:3048',
        ]);

        if ($request->hasFile('image')) {
            $transformation->image = $request->file('image')->store('transformations', 'public');
        }

        $transformation->update([
            'image' => $transformation->image,
        ]);

        return redirect()->route('transformations.index')->with('success', 'Transformation image updated successfully.');
    }

    public function destroy(Transformations $transformation)
    {
        $transformation->delete();
        return redirect()->route('transformations.index')->with('success', 'Transformation image deleted.');
    }
}
