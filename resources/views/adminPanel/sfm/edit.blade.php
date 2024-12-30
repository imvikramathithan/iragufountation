@extends('layouts.adminheader')

@section('content')
    <h1>Edit Service</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('serviceManagement.update', $serviceManagement ->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $serviceManagement->title }}" oninput="generateSlug()" required>
        </div>
        <div class="form-group mb-3">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control" value="{{ $serviceManagement->slug }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="bg_image">Background Image</label>
            <input type="file" name="bg_image" class="form-control" accept="image/*">
            @if($serviceManagement->bg_image)
                <small class="form-text text-muted">Current background image:</small>
                <img src="{{ asset('storage/' . $serviceManagement->bg_image) }}" alt="{{ $serviceManagement->title }}" width="100">
            @endif
        </div>
        <div class="form-group mb-3">
            <label for="quotes">Quotes</label>
            <input type="text" name="quotes" class="form-control" value="{{ $serviceManagement->quotes }}">
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $serviceManagement->description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="brochure">Brochure (PDF)</label>
            <input type="file" name="brochure" class="form-control" accept=".pdf">
            @if($serviceManagement->brochure)
                <small class="form-text text-muted">Current brochure: <a href="{{ asset('storage/' . $serviceManagement->brochure) }}" target="_blank">View Brochure</a></small>
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('serviceManagement.index') }}" class="btn btn-secondary">Back</a>
    </form>
    <script>
    function generateSlug() {
        const nameInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        const nameValue = nameInput.value;

        // Generate the slug
        const slug = nameValue
            .toLowerCase()
            .replace(/[^a-z0-9 -]/g, '') // Remove special characters
            .trim()
            .replace(/ -+/g, '-') // Replace multiple spaces with a single hyphen
            .replace(/ /g, '-'); // Replace spaces with hyphens

        slugInput.value = slug;
    }
</script>
@endsection
