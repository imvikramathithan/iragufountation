<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\serviceStudent;
class HomeController extends Controller
{
    public function index(){
        // Fetch all courses with their related services
$services = serviceStudent::all(); 
    $courses = Courses::with('services')->get();
        return view('index',compact('courses','services'));
    }
}
