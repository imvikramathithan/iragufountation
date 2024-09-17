@extends('layouts.adminheader')

@section('content')
    <h1>Transformation Images</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('transformations.create') }}" class="btn btn-primary mb-3">Add New Image</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transformations as $transformation)
                <tr>
                    <td>{{ $transformation->id }}</td>
                    <td><img src="{{ asset('storage/' . $transformation->image) }}" width="100"></td>
                    <td>
                        <a href="{{ route('transformations.edit', $transformation->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('transformations.destroy', $transformation->id) }}" method="POST" style="display:inline;">
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
