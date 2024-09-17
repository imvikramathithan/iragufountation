@extends('layouts.adminheader')

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h1>Create Testimonials</h1>

    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">School Logo</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="school_name">School Name</label>
            <input type="text" name="school_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
           <input type="text" name="description" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
