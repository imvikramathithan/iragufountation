@extends('layouts.adminheader')
@section('content')
<div class="content">
    <div class="top-bar d-flex justify-content-between align-items-center flex-wrap">
        <h1 class="mb-3 mb-md-0">Dashboard</h1>
        <div class="user-info text-md-end text-center">
            <h5>Welcome, {{ Auth::user()->name }}!</h5>
        </div>
    </div>

    <!-- Insights Section -->
    <div class="row mt-4 g-4">
        <!-- Total Team Members -->
        <div class="col-lg-3 col-md-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Team Members</h5>
                    <p class="card-text display-4">{{ $teamMembersCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Student Queries</h5>
                    <p class="card-text display-4">{{ $studentQueries }}</p>
                </div>
            </div>
        </div>
                <div class="col-lg-3 col-md-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Management Queries</h5>
                    <p class="card-text display-4">{{ $managementQueries }}</p>
                </div>
            </div>
        </div>
        <!-- Total Slides -->
        <div class="col-lg-3 col-md-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Slides</h5>
                    <p class="card-text display-4">{{ $slidesCount }}</p>
                </div>
            </div>
        </div>

        <!-- Total Gallery Images -->
        <div class="col-lg-3 col-md-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Gallery Images</h5>
                    <p class="card-text display-4">{{ $galleryCount }}</p>
                </div>
            </div>
        </div>

        <!-- Total Testimonials -->
        <div class="col-lg-3 col-md-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Testimonials</h5>
                    <p class="card-text display-4">{{ $testimonialsCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Additions Section -->
    <div class="row mt-5 g-4">
        <div class="col-lg-6">
            <h4 class="text-center text-md-start">Recently Added Team Members</h4>
            <ul class="list-group">
                @foreach ($recentTeamMembers as $member)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}" width="50">
                        <span><strong>{{ $member->name }} <br> </strong>  {{ $member->role }}</span>
                        <small class="text-muted">Added on {{ $member->created_at->format('d M Y') }}</small>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-lg-6">
            <h4 class="text-center text-md-start">Recently Added Slides</h4>
            <ul class="list-group">
                @foreach ($recentSlides as $slide)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->midLine }}" width="100">
                        <span><strong>Slide #{{ $slide->id }}</strong></span>
                        <small class="text-muted">Added on {{ $slide->created_at->format('d M Y') }}</small>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row mt-4 g-4">
        <div class="col-lg-6">
            <h4 class="text-center text-md-start">Recently Added Gallery Images</h4>
            <ul class="list-group">
                @foreach ($recentGallery as $image)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->caption }}" width="100">
                        <span><strong>Image Caption:</strong> {{ $image->caption ?? 'N/A' }}</span>
                        <small class="text-muted">Added on {{ $image->created_at->format('d M Y') }}</small>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="col-lg-6">
            <h4 class="text-center text-md-start">Recently Added Testimonials</h4>
            <ul class="list-group">
                @foreach ($recentTestimonials as $testimonial)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->school_name }}" width="100">
                        <span><strong>{{ $testimonial->school_name }}</strong> - {{ Str::limit($testimonial->content, 50) }}</span>
                        <small class="text-muted">Added on {{ $testimonial->created_at->format('d M Y') }}</small>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
