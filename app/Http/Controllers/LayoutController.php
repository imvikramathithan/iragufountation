<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\ServiceManagement;
class LayoutController extends Controller
{
     public function index()
    {
        // Example: Fetch courses for a shared navigation
        $courses = Courses::with('services')->get();
        $managementServices = ServiceManagement::all(); 
        return view('layouts.app', compact('courses','managementServices'));
    }
}
