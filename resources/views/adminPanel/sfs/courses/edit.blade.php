@extends('layouts.adminheader')

@section('content')
<div class="container">
    <h1 class="mt-4">Edit Course</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" class="form-control" value="{{ $course->course_name }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $course->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
