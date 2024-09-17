@extends('layouts.adminheader')

@section('content')
    <h1>Edit Slide</h1>

    <form action="{{ route('slides.update', $slide->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="firstLine">Frist Line</label>
            <input type="text" name="firstLine" class="form-control" value="{{ $slide->firstLine }}" required>
        </div>
        <div class="form-group">
            <label for="midLine">Mid Line</label>
            <input type="text" name="midLine" class="form-control" value="{{ $slide->midLine }}" required>
        </div>
        <div class="form-group">
            <label for="lastLine">Last Line</label>
           <input type="text" name="lastLine" class="form-control" value="{{ $slide->lastLine }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
            @if($slide->image)
                <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->midLine }}" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
