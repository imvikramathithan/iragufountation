<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\Slide;
use App\Models\Transformations;
use App\Models\Galleries;
use App\Models\Testimonials;
use App\Models\ServiceStudent;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Count data for insights
        $teamMembersCount = TeamMember::count();
        $slidesCount = Slide::count();
        $galleryCount = Galleries::count();
        $testimonialsCount = Testimonials::count();
        $servicesForStudentsCount = ServiceStudent::count();

        // Fetch recent additions
        $recentTeamMembers = TeamMember::latest()->take(5)->get();
        $recentSlides = Slide::latest()->take(5)->get();
        $recentGallery = Galleries::latest()->take(5)->get();
        $recentTestimonials = Testimonials::latest()->take(5)->get();

        // Pass data to the view
        return view('dashboard', compact(
            'teamMembersCount',
            'slidesCount',
            'galleryCount',
            'testimonialsCount',
            'servicesForStudentsCount',
            'recentTeamMembers',
            'recentSlides',
            'recentGallery',
            'recentTestimonials'
        ));
    }
}
