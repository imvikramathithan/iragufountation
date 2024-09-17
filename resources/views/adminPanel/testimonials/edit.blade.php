@extends('layouts.adminheader')

@section('content')
    <h1>Edit Testimonials</h1>

    <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <div class="form-group">
            <label for="image">School Logo</label>
            <input type="file" name="image" class="form-control">
            @if($testimonial->image)
                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->school_name }}" width="100">
            @endif
        </div>
        <div class="form-group">
            <label for="school_name">School Name</label>
            <input type="text" name="school_name" class="form-control" value="{{ $testimonial->school_name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $testimonial->description }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
