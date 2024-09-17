@extends('layouts.adminheader')

@section('content')
    <h1>Slides</h1>

    <a href="{{ route('slides.create') }}" class="btn btn-primary">Add Slide</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Slide ID</th>
                <th>First Line</th>
                <th>Mid Name</th>
                <th>Last Name</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($slides as $slide)
                <tr>
                    <td>{{ $slide->id }}</td>
                    <td>{{ $slide->firstLine }}</td>
                    <td>{{ $slide->midLine }}</td>
                    <td>{{$slide->lastLine}}</td>
                    <td>
                        @if($slide->image)
                            <img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->midLine }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('slides.edit', $slide->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('slides.destroy', $slide->id) }}" method="POST" style="display:inline-block;">
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
