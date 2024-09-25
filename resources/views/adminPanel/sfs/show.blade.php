@extends('layouts.adminheader')
@section('content')
<div class="container">
    <h1 class="mt-4">Service Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Course: {{ $service->course->course_name }}</h5>
            <p class="card-text">Logo:@if($service->logo)
                            <img src="{{ asset('storage/' . $service->logo) }}" alt="{{ $service->course_name }}" width="100">
                        @endif</p>
            <p class="card-text">Quotes: {{ $service->quotes }}</p>
            <p class="card-text">Description: {{ $service->description }}</p>
            <p class="card-text">Brochure: @if($service->brochure)
                            <a href="{{ asset('storage/' . $service->brochure) }}" >link </a>

                        @endif</p>
            <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection