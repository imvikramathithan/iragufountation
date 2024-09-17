@extends('layouts.adminheader')

@section('content')
<h1>Gallery</h1>

<a href="{{ route('galleries.create') }}" class="btn btn-primary mb-3">Add New Image</a>
 <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Caption</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->id }}</td>
                    <td>
                        @if($gallery->image)
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->caption}}" width="100">
                        @endif
                    </td>
                     <td>{{ $gallery->caption }}</td>
                    <td>
                        <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
