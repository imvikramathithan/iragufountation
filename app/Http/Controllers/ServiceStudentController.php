<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\serviceStudent;
use App\Models\Courses;

class ServiceStudentController extends Controller
{
    public function index()
    {
        $serviceStudents = serviceStudent::with('course')->get(); // Load related course
        return view('adminPanel.sfs.index', compact('serviceStudents'));
    }

    // Show the form for creating a new service
    public function create()
    {
        $courses = Courses::all(); // To select a course for the service
        return view('adminPanel.sfs.create', compact('courses'));
    }

    // Store a newly created service in the database
    public function store(Request $request)
    {
        $request->validate([
            'subject_id' => 'required|exists:courses,id',
            'name' => 'required',
            'slug' =>'string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:22048',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:22048',
            'quotes' => 'nullable|string',
            'description' => 'nullable|string',
            'brochure' => 'nullable|mimes:pdf|max:42048',
        ]);

        // Handle file uploads
        $data = $request->all();

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('bg_image')) {
            $data['bg_image'] = $request->file('bg_image')->store('bg_images', 'public');
        }

        if ($request->hasFile('brochure')) {
            $data['brochure'] = $request->file('brochure')->store('brochures', 'public');
        }

        serviceStudent::create($data);

        return redirect()->route('serviceStudents.index')->with('success', 'Service created successfully.');
    }

    // Display the specified service
    public function show(serviceStudent $serviceStudent)
    {
        $courses = Courses::all(); 
        return view('adminPanel.sfs.show', compact('serviceStudent', 'courses'));
    }

    // Show the form for editing the specified service
    public function edit(serviceStudent $serviceStudent)
    {
        $courses = Courses::all();
        return view('adminPanel.sfs.edit', compact('serviceStudent', 'courses'));
    }

    public function update(Request $request, serviceStudent $serviceStudent)
    {
        $request->validate([
            'subject_id' => 'nullable|exists:courses,id',
            'name' => 'nullable',
            'slug' =>'string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'bg_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20048',
            'quotes' => 'nullable|string',
            'description' => 'nullable|string',
            'brochure' => 'nullable|mimes:pdf|max:20048',
        ]);

        // Handle file uploads
        $data = $request->all();

        if ($request->hasFile('logo')) {
            if ($serviceStudent->logo) {
                \Storage::disk('public')->delete($serviceStudent->logo);
            }
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('bg_image')) {
            if ($serviceStudent->bg_image) {
                \Storage::disk('public')->delete($serviceStudent->bg_image);
            }
            $data['bg_image'] = $request->file('bg_image')->store('bg_images', 'public');
        }

        if ($request->hasFile('brochure')) {
            if ($serviceStudent->brochure) {
                \Storage::disk('public')->delete($serviceStudent->brochure);
            }
            $data['brochure'] = $request->file('brochure')->store('brochures', 'public');
        }

        $serviceStudent->update($data);

        return redirect()->route('serviceStudents.index')->with('success', 'Service updated successfully.');
    }

    // Remove the specified service from the database
    public function destroy(serviceStudent $serviceStudent)
    {
        $serviceStudent->delete();

        return redirect()->route('serviceStudents.index')->with('success', 'Service deleted successfully.');
    }
}
