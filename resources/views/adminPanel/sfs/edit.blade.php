

@extends('layouts.adminheader')

@section('content')
    <h1>Edit Service</h1>
 @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
          @method('PUT')
         <div class="form-group mb-3">
             <label for="subject_id">Select Course</label>
             <select name="subject_id" class="form-control">
                 @foreach ($courses as $course)
                     <option value="{{ $course->id }}" {{ $service->subject_id == $course->id ? 'selected' : '' }}>{{ $course->course_name }}</option>
                 @endforeach
             </select>
         </div>
         <div class="form-group mb-3">
             <label for="logo">Logo (Image)</label>
             <input type="file" name="logo" class="form-control" accept="image/*">
             <small class="form-text text-muted">Current logo: {{ $service->logo }}</small>
         </div>
         <div class="form-group mb-3">
             <label for="bg_image">Background Image</label>
             <input type="file" name="bg_image" class="form-control" accept="image/*">
             <small class="form-text text-muted">Current background image: {{ $service->bg_image }}</small>
         </div>
         <div class="form-group mb-3">
             <label for="quotes">Quotes</label>
             <input type="text" name="quotes" class="form-control" value="{{ $service->quotes }}">
         </div>
         <div class="form-group mb-3">
             <label for="description">Description</label>
             <textarea name="description" class="form-control">{{ $service->description }}</textarea>
         </div>
         <div class="form-group mb-3">
             <label for="brochure">Brochure (PDF)</label>
             <input type="file" name="brochure" class="form-control" accept=".pdf">
             <small class="form-text text-muted">Current brochure: {{ $service->brochure }}</small>
         </div>
         <button type="submit" class="btn btn-success">Update</button>
         <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
