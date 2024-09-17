@extends('layouts.adminheader')

@section('content')
<h1>Edit Image</h1>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="image">Current Image</label>
        <div>
            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->caption }}" class="img-fluid" style="max-width: 200px;">
        </div>
    </div>

    <div class="form-group">
        <label for="image">Replace Image (optional)</label>
        <input type="file" name="image" class="form-control" value="{{$gallery->image}}">
    </div>

    <div class="form-group">
        <label for="caption">Caption</label>
        <input type="text" name="caption" value="{{ $gallery->caption }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update Image</button>
</form>
@endsection
