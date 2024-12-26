<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\serviceStudent;
use App\Models\ServiceManagement;

class ServiceController extends Controller
{
  public function serviceformanagement(){
    $serviceManagement = ServiceManagement::all(); // Retrieve all services
    return view( 'serviceformanagement', compact('serviceManagement'));
  }

  public function serviceforstudent(){
    return view('serviceforstudent');
  }
    public function handwritingPage(){
    return view('handwritingPage');
  }
      public function wingsPage(){
    return view('wings-page');
  }
  public function showStudentService($slug)
{
    $service = serviceStudent::where('slug', $slug)->firstOrFail();
    return view('services.student.show', compact('service'));
}
}
