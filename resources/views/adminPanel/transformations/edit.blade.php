@extends('layouts.adminheader')

@section('content')
    <h1>Edit Transformation Image</h1>

    <form action="{{ route('transformations.update', $transformation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Transformation Image</label>
            <input type="file" name="image" class="form-control">
            @if($transformation->image)
                <img src="{{ asset('storage/' . $transformation->image) }}" width="100" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
