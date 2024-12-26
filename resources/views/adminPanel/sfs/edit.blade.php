@extends('layouts.adminheader')
@section('content')
 <div class="container">
  @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     <h1 class="mt-4">Edit Service Student</h1>
     <form action="{{ route('serviceStudents.update', $serviceStudent->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="form-group mb-3">
             <label for="subject_id">Select Course</label>
             <select name="subject_id" class="form-control" required>
                 @foreach ($courses as $course)
                     <option value="{{ $course->id }}" {{ $course->id == $serviceStudent->subject_id ? 'selected' : '' }}>
                         {{ $course->course_name }}
                     </option>
                 @endforeach
             </select>
         </div>
         <div class="form-group mb-3">
            <label for="name">Subject Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $serviceStudent->name }}" placeholder="Enter subject name" oninput="generateSlug()" required>
        </div>
        <div class="form-group mb-3">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control" value="{{ $serviceStudent->slug }}">
        </div>
         <div class="form-group mb-3">
             <label for="logo">Logo (Image)</label>
             <input type="file" name="logo" class="form-control" accept="image/*">
             @if($serviceStudent->logo)
                <p class="mt-2">Current Logo: <img src="{{ asset('storage/' . $serviceStudent->logo) }}" alt="Logo" height="50"></p>
             @endif
         </div>
         <div class="form-group mb-3">
             <label for="bg_image">Background Image</label>
             <input type="file" name="bg_image" class="form-control" accept="image/*">
             @if($serviceStudent->bg_image)
                <p class="mt-2">Current Background Image: <img src="{{ asset('storage/' . $serviceStudent->bg_image) }}" alt="Background Image" height="50"></p>
             @endif
         </div>
         <div class="form-group mb-3">
             <label for="quotes">Quotes</label>
             <input type="text" name="quotes" class="form-control" value="{{ $serviceStudent->quotes }}" placeholder="Enter quotes">
         </div>
         <div class="form-group mb-3">
             <label for="description">Description</label>
             <textarea name="description" class="form-control" placeholder="Enter description">{{ $serviceStudent->description }}</textarea>
         </div>
         <div class="form-group mb-3">
             <label for="brochure">Brochure (PDF)</label>
             <input type="file" name="brochure" class="form-control" accept=".pdf">
             @if($serviceStudent->brochure)
                <p class="mt-2">Current Brochure: <a href="{{ asset('storage/' . $serviceStudent->brochure) }}" target="_blank">View Brochure</a></p>
             @endif
         </div>
         <button type="submit" class="btn btn-success">Update</button>
         <a href="{{ route('serviceStudents.index') }}" class="btn btn-secondary">Back</a>
     </form>
 </div>
 <script>
    function generateSlug() {
        const nameInput = document.getElementById('name');
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
