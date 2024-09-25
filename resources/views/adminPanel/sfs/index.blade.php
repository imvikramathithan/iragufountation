@extends('layouts.adminheader')
@section('content')
<div class="container">
    <h1 class="mt-4">Services</h1>
    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Add New Service</a>
       <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Courses</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course</th>
                <th>Subject</th>
                 <th>Slug</th>
                <th>Logo</th>
                <th>Quotes</th>
                <th>pdf</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->course->course_name }}</td>
                 <td>{{ $service->name }}</td>
                 <td>{{ $service->slug }}</td>
                <td>
                        @if($service->logo)
                            <img src="{{ asset('storage/' . $service->logo) }}" alt="{{ $service->course_name }}" width="100">
                        @endif
                    </td>
                <td>{{ $service->quotes }}</td>
                 <td>@if($service->brochure)
                            <a href="{{ asset('storage/' . $service->brochure) }}" >{{ $service->name }}</a>
                        @endif</td>
                <td>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('services.show', $service->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection