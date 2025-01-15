<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceManagement;
use Illuminate\Support\Str;

class ServiceManagementController extends Controller
{
    public function index()
    {
        $serviceManagement = ServiceManagement::all(); // Retrieve all services
        return view('adminPanel.sfm.index', compact('serviceManagement'));
    }

    public function create()
    {
        return view('adminPanel.sfm.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:service_management,slug',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10048',
            'quotes' => 'nullable|string',
            'description' => 'nullable|string',
            'brochure' => 'nullable|mimes:pdf|max:200048',
        ]);

        $data = $request->all();
        
        // Handle file uploads
        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $request->file('bg_image')->store('bg_images', 'public');
        }

        if ($request->hasFile('brochure')) {
            $data['brochure'] = $request->file('brochure')->store('brochures', 'public');
        }

        ServiceManagement::create($data);

        return redirect()->route('serviceManagement.index')->with('success', 'Service created successfully.');
    }

    public function show(ServiceManagement $serviceManagement)
    {
        return view('adminPanel.sfm.show', compact('serviceManagement'));
    }

    public function edit(ServiceManagement $serviceManagement)
    {
        return view('adminPanel.sfm.edit', compact('serviceManagement'));
    }

    public function update(Request $request, ServiceManagement $serviceManagement)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'slug' => 'nullable|string|unique:service_management,slug,' . $serviceManagement->id,
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:200048',
            'quotes' => 'nullable|string',
            'description' => 'nullable|string',
            'brochure' => 'nullable|mimes:pdf|max:200048',
        ]);

        $data = $request->all();

        // Handle file uploads
        if ($request->hasFile('bg_image')) {
            if ($serviceManagement->bg_image) {
                \Storage::disk('public')->delete($serviceManagement->bg_image);
            }
            $data['bg_image'] = $request->file('bg_image')->store('bg_images', 'public');
        }

        if ($request->hasFile('brochure')) {
            if ($serviceManagement->brochure) {
                \Storage::disk('public')->delete($serviceManagement->brochure);
            }
            $data['brochure'] = $request->file('brochure')->store('brochures', 'public');
        }

        $serviceManagement->update($data);

        return redirect()->route('serviceManagement.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(ServiceManagement $serviceManagement)
    {
        // Delete associated files if they exist
        if ($serviceManagement->bg_image) {
            \Storage::disk('public')->delete($serviceManagement->bg_image);
        }

        if ($serviceManagement->brochure) {
            \Storage::disk('public')->delete($serviceManagement->brochure);
        }

        $serviceManagement->delete();

        return redirect()->route('serviceManagement.index')->with('success', 'Service deleted successfully.');
    }
}
