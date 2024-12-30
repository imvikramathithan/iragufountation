<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\serviceStudent;
use App\Models\ServiceManagement;
use App\Models\Courses;
class ServiceController extends Controller
{
  public function serviceformanagement(){
    $serviceManagement = ServiceManagement::all(); // Retrieve all services
    return view( 'serviceformanagement', compact('serviceManagement'));
  }

 
    public function handwritingPage(){
    
    return view('handwritingPage');
  }
      public function wingsPage(){
    return view('wings-page');
  }
 // For general student services page
    public function serviceforstudent()
    {
        $courses = Courses::all(); // Fetch all courses
        return view('services.students.index', compact('courses'));
    }

    // For a specific student service by slug (both course and service)
    public function showStudentService($slug)
    {
        $course = Courses::where('slug', $slug)->firstOrFail();
        $services = serviceStudent::where('subject_id', $course->id)->get();
        return view('services.students.show', compact('course', 'services'));
    }
}
