<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Courses;

class SfsHandwriting extends Component
{
    public $course;
    public $services;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Find the course with the 'handwriting' slug and eager load services
        $this->course = Courses::with('services')->where('slug', 'handwriting')->first();

        if (!$this->course) {
            abort(404, 'Course not found');
        }

        // Assign the related services to a property
        $this->services = $this->course->services;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sfs-handwriting', [
            'course' => $this->course,
            'services' => $this->services,
        ]);
    }
}
