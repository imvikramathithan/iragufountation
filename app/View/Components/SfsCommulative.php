<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Courses;
use App\Models\serviceStudent;

class SfsCommulative extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

 public function render(): View|Closure|string
    {
        // First, find the course with the 'handwriting' slug
        $course = Courses::where('slug', 'communicative-english')->first();

        if (!$course) {
            abort(404, 'Course not found');
        }
        
        // Fetch the related serviceStudent records for the course
        $services = serviceStudent::where('subject_id', $course->id)->with('course')->get(); // Load related course
        
        return view('components.sfs-commulative', compact('services','course'));
    }

}
