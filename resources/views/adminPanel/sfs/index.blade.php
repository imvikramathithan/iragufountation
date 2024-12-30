@extends('layouts.adminheader')

@section('content')
<div class="container">
    <h1 class="mt-4">Service Students</h1>
    <a href="{{ route('serviceStudents.create') }}" class="btn btn-primary mb-3">Add New Service Student</a>
    <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add Courses</a>

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
                <th>PDF</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($serviceStudents as $serviceStudent)
            <tr>
                <td>{{ $serviceStudent->id }}</td>
                <td>{{ $serviceStudent->course->course_name }}</td>
                <td>{{ $serviceStudent->name }}</td>
                <td>{{ $serviceStudent->slug }}</td>
                <td>
                    @if($serviceStudent->logo)
                        <img src="{{ asset('storage/' . $serviceStudent->logo) }}" alt="{{ $serviceStudent->course_name }}" width="100">
                    @endif
                </td>
                <td>{{ $serviceStudent->quotes }}</td>
                <td>
                    @if($serviceStudent->brochure)
                        <a href="{{ asset('storage/' . $serviceStudent->brochure) }}" target="_blank">{{ $serviceStudent->name }}</a>
                    @endif
                </td>
                <td>
                    <a href="{{ route('serviceStudents.edit', $serviceStudent->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('serviceStudents.destroy', $serviceStudent->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('serviceStudents.show', $serviceStudent->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
