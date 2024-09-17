@extends('layouts.adminheader')

@section('content')
    <h1>Testimonials</h1>

    <a href="{{ route('testimonials.create') }}" class="btn btn-primary">Add Testimonials</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>School Logo</th>
                <th>School Name</th>
                <th>Discription</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->id }}</td>
                     <td>
                        @if($testimonial->image)
                            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->school_name }}" width="100">
                        @endif
                    </td>
                    <td>{{ $testimonial->school_name }}</td>
                    <td>{{$testimonial->description}}</td>
                   
                    <td>
                        <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline-block;">
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
