@extends('layouts.adminheader')

@section('content')
<div class="container">
    <h1 class="mt-4">Course Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $course->course_name }}</h5>
            <p class="card-text">{{ $course->description }}</p>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
