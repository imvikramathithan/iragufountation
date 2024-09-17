@extends('layouts.adminheader')

@section('content')
<h1>Edit Team Member</h1>

<form action="{{ route('team_members.update', $teamMember->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $teamMember->name }}" required>
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" name="role" class="form-control" value="{{ $teamMember->role }}" required>
    </div>
    <div class="form-group">
        <label for="image">Photo</label>
        <input type="file" name="image" class="form-control">
        @if($teamMember->image)
            <img src="{{ asset('storage/' . $teamMember->image) }}" width="100" alt="{{ $teamMember->name }}">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
