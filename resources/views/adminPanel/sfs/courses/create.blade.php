@extends('layouts.adminheader')

@section('content')
<div class="container">
    <h1 class="mt-4">Create Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="course_name">Course Name</label>
            <input type="text" id="course_name" name="course_name" class="form-control" placeholder="Enter course name" oninput="generateSlug()" required>
        </div>
        <div class="form-group mb-3">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" placeholder="Enter description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
<script>
    function generateSlug() {
        const nameInput = document.getElementById('course_name');
        const slugInput = document.getElementById('slug');
        const nameValue = nameInput.value;

        // Generate the slug
        const slug = nameValue
            .toLowerCase()
            .replace(/[^a-z0-9 -]/g, '') // Remove special characters
            .trim()
            .replace(/ -+/g, '-') // Replace multiple spaces with a single hyphen
            .replace(/ /g, '-'); // Replace spaces with hyphens

        slugInput.value = slug;
    }
</script>
@endsection
