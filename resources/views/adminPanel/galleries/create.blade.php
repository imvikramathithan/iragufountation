@extends('layouts.adminheader')

@section('content')
<h1>Add Image to Gallery</h1>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="caption">Caption (optional)</label>
        <input type="text" name="caption" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add to Gallery</button>
</form>
@endsection
