@extends('layouts.adminheader')

@section('content')
<div class="container">
    <h1 class="mb-4">Management Queries</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Query</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($queries as $query)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $query->name }}</td>
                    <td>{{ $query->email }}</td>
                    <td>{{ $query->query }}</td>
                    <td>{{ $query->created_at->format('d M Y, H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
