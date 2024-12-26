@extends('layouts.adminheader')

@section('content')
<div class="container">
    <h1 class="mt-4">Create Service</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('serviceManagement.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Enter title" oninput="generateSlug()" required>
        </div>
        <div class="form-group mb-3">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control" placeholder="Enter slug" required>
        </div>
        <div class="form-group mb-3">
            <label for="bg_image">Background Image</label>
            <input type="file" name="bg_image" class="form-control" accept="image/*">
        </div>
        <div class="form-group mb-3">
            <label for="quotes">Quotes</label>
            <input type="text" name="quotes" class="form-control" placeholder="Enter quotes">
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" placeholder="Enter description"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="brochure">Brochure (PDF)</label>
            <input type="file" name="brochure" class="form-control" accept=".pdf">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('serviceManagement.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
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
