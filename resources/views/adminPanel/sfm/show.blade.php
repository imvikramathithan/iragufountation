@extends('layouts.adminheader')

@section('content')
<div class="container">
    <h1 class="mt-4">Service Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Title: {{ $serviceManagement->title }}</h5>
            <p class="card-text">Slug: {{ $serviceManagement->slug }}</p>
            <p class="card-text">
                Background Image:
                @if($serviceManagement->bg_image)
                    <img src="{{ asset('storage/' . $serviceManagement->bg_image) }}" alt="{{ $serviceManagement->title }}" width="100">
                @else
                    No background image uploaded.
                @endif
            </p>
            <p class="card-text">Quotes: {{ $serviceManagement->quotes }}</p>
            <p class="card-text">Description: {{ $serviceManagement->description }}</p>
            <p class="card-text">
                Brochure:
                @if($serviceManagement->brochure)
                    <a href="{{ asset('storage/' . $serviceManagement->brochure) }}" target="_blank">Download Brochure</a>
                @else
                    No brochure uploaded.
                @endif
            </p>
            <a href="{{ route('serviceManagement.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
