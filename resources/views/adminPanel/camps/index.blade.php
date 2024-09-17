@extends('layouts.adminheader')

@section('content')
<h1>Camps</h1>

<a href="{{ route('camps.create') }}" class="btn btn-primary mb-3">Add New Camps</a>
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
            @foreach($camps as $camp)
                <tr>
                    <td>{{ $camp->id }}</td>
                    <td>
                        @if($camp->image)
                            <img src="{{ asset('storage/' . $camp->image) }}" alt="{{ $camp->caption}}" width="100">
                        @endif
                    </td>
                     <td>{{ $camp->caption }}</td>
                    <td>
                        <a href="{{ route('camps.edit', $camp->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('camps.destroy', $camp->id) }}" method="POST" style="display:inline-block;">
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
