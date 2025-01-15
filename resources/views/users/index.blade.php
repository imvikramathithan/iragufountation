@extends('layouts.adminheader')

@section('content')
<h2>Users List</h2>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Display Session Status -->
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

                    <!-- Table displaying the users -->
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Picture</th>
                                <th>Email</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td><img src="{{ asset('storage/' . auth()->user()->image) }}" width="50" height="50" alt="Profile Image" width="100" height="100" style="border-radius: 5px"></td>
                                    <td>{{ $user->email }}</td>
                                  
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $users->links() }}
                    </div>
            <!-- User List Card -->
          
            </div>
        </div>
    </div>
</div>
@endsection
