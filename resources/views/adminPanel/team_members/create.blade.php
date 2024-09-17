@extends('layouts.adminheader')

@section('content')
<h1>Add New Team Member</h1>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('team_members.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" name="role" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="image">Photo</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
