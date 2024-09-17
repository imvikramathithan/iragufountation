@extends('layouts.adminheader')

@section('content')
<h1>Team Members</h1>
<a href="{{ route('team_members.create') }}" class="btn btn-primary">Add Team Member</a>

<table class="table mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Role</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teamMembers as $member)
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->role }}</td>
                <td>
                    @if($member->image)
                        <img src="{{ asset('storage/' . $member->image) }}" width="50" alt="{{ $member->name }}">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <a href="{{ route('team_members.edit', $member->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('team_members.destroy', $member->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
