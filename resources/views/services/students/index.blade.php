@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-5">Our Courses and Services</h1>
    <div class="row">
        @foreach ($courses as $course)
            <div class="col-md-4 mb-4">
                <div class="card course-card">
                    <div class="card-header text-center">
                        <h3>{{ $course->course_name }}</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ Str::limit($course->description ?? 'Learn more about our amazing services and techniques.', 100) }}
                        </p>
                        <div class="text-center">
                            <a href="{{ route('services.student.show', $course->slug) }}" class="btn btn-primary">
                                Explore {{ $course->course_name }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
  //loader
var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
    loader.style.display = "none";
});
    // Show more functionality
    function showMore(element) {
        const parent = element.closest('p');
        const readMoreSpan = parent.querySelector('.read-more');
        const showMoreSpan = parent.querySelector('.show-more');

        if (readMoreSpan.style.display === 'none' || readMoreSpan.style.display === '') {
            readMoreSpan.style.display = 'inline';
            showMoreSpan.innerText = 'Show Less';
        } else {
            readMoreSpan.style.display = 'none';
            showMoreSpan.innerText = 'Read More';
        }
    }
</script>

@endsection
