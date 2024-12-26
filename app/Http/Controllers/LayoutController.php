<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
class LayoutController extends Controller
{
     public function index()
    {
        // Example: Fetch courses for a shared navigation
        $courses = Courses::with('services')->get();

        return view('layouts.app', compact('courses'));
    }
}
