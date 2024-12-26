@extends('layouts.adminheader')

@section('content')
<div class="container">
    <h1 class="mt-4">Service Management</h1>
    <a href="{{ route('serviceManagement.create') }}" class="btn btn-primary mb-3">Add New Service</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Background Image</th>
                <th>Quotes</th>
                <th>Brochure</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($serviceManagement as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->slug }}</td>
                <td>
                    @if($service->bg_image)
                        <img src="{{ asset('storage/' . $service->bg_image) }}" alt="{{ $service->title }}" width="100">
                    @endif
                </td>
                <td>{{ $service->quotes }}</td>
                <td>
                    @if($service->brochure)
                        <a href="{{ asset('storage/' . $service->brochure) }}">Download</a>
                    @endif
                </td>
                <td>
                    <a href="{{ route('serviceManagement.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('serviceManagement.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('serviceManagement.show', $service->id) }}" class="btn btn-info btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
