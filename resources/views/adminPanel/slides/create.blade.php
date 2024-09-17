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
    <h1>Create Slide</h1>

    <form action="{{ route('slides.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="firstLine">Frist Line</label>
            <input type="text" name="firstLine" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="midLine">Mid Line</label>
            <input type="text" name="midLine" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lastLine">Last Line</label>
           <input type="text" name="lastLine" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
