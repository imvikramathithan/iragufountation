@extends('layouts.adminheader')

@section('content')
<div class="container">
    <h1 class="mt-4">Service Student Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Course: {{ $serviceStudent->course->course_name }}</h5>
            <p class="card-text">Logo:
                @if($serviceStudent->logo)
                    <img src="{{ asset('storage/' . $serviceStudent->logo) }}" alt="{{ $serviceStudent->course_name }}" width="100">
                @endif
            </p>
            <p class="card-text">Quotes: {{ $serviceStudent->quotes }}</p>
            <p class="card-text">Description: {{ $serviceStudent->description }}</p>
            <p class="card-text">Brochure:
                @if($serviceStudent->brochure)
                    <a href="{{ asset('storage/' . $serviceStudent->brochure) }}" target="_blank">link</a>
                @endif
            </p>
            <a href="{{ route('serviceStudents.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
