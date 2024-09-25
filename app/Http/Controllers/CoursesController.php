<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::all();
       return view('adminPanel.sfs.courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('adminPanel.sfs.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    // Validate the incoming request data
    $validated = $request->validate([
        'course_name' => 'required',
        'slug' => 'required',
        'description' => 'nullable',
    ]);


    // Create a new course with the custom ID
    Courses::create([
       
        'course_name' => $validated['course_name'],
          'slug' => $validated['slug'],
        'description' => $validated['description'],
    ]);

    // Redirect back to the courses index with a success message
    return redirect()->route('courses.index')->with('success', 'Course added successfully.');
}

    /**
     * Display the specified resource.
     */
    public function show(Courses $course)
    {
        return view('adminPanel.sfs.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Courses $course)
    {
        return view('adminPanel.sfs.courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Courses $course)
    {
        $validated = $request->validate([
             'course_name' => 'required',
                'slug' => 'required',
            'description' => 'nullable',
        ]);

        $course->update(['course_name'=>$request->course_name]);
        $course->update(['slug'=>$request->slug]);
        $course->update(['description' => $request->description]);

        return redirect()->route('courses.index')->with('success', 'Course updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courses $course)
    {
          $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted.');
    }
}
