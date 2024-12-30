@extends('layouts.adminheader')

@section('content')
    <div class="container mt-5">
        <h2>Your Profile</h2>

        @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h5>Profile Information</h5>
            </div>
            <div class="card-body">
                <!-- Display Profile Image -->
                <div class="text-center">
                    @if(auth()->user()->image)
                        <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profile Image" class="img-thumbnail" width="150">
                    @else
                        <img src="" alt="Profile Image" class="img-thumbnail" width="150">
                    @endif
                </div>

                <ul class="list-group mt-3">
                    <li class="list-group-item">
                        <strong>Name:</strong> {{ auth()->user()->name }}
                    </li>
                    <li class="list-group-item">
                        <strong>Email:</strong> {{ auth()->user()->email }}
                    </li>
                    <li class="list-group-item">
                        <strong>Phone:</strong> {{ auth()->user()->phone ?? 'Not provided' }}
                    </li>
                </ul>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>

@endsection
