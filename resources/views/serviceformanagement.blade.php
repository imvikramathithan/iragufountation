@extends('layouts.app')

@section('content')
<style>
    .zigzag-container {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .course {
        text-align: center;
        padding: 1rem;
    }
    .zigzag-container.left .content-box {
        flex-direction: row;
    }
    .zigzag-container.left .content-box .content-text p {
        border-radius: 10px;
        min-height: 102px;
        padding: 14px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        color: #fff;
    }
    .zigzag-container.right .content-box {
        flex-direction: row-reverse;
    }
    .zigzag-container.right .content-box .content-text p {
        border-radius: 10px;
        min-height: 102px;
        padding: 14px;
        background-image: linear-gradient(to left, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
        color: #fff;
    }
    .content-box {
        padding: 20px;
        display: flex;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        align-content: center;
        justify-content: center;
        align-items: center;
        height: 700px;
        width: 100%;
    }
    .content-text {
        width: 60%;
        padding: 10px;
    }
    .content-text h2 {
        margin: 0;
        font-size: 24px;
    }
    .content-text p {
        font-size: 16px;
        line-height: 1.5;
    }
    .s_btn {
        margin-top: 20px;
    }
    .s-btn {
        padding: 10px 20px;
        background-color: #ff1500;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }
    .s-btn i {
        margin-left: 5px;
    }
</style>

<div class="course">
    <h1>Service for Management</h1>
</div>

<div class="course-section" id="curriculum">
    @foreach($serviceManagement  as $index => $service)
        <div class="zigzag-container {{ $loop->even ? 'left' : 'right' }}">
            <div id="{{ $service->slug }}" class="content-box" 
                style="
                    background-image: linear-gradient(
                        to {{ $loop->even ? 'left' : 'right' }},
                        rgba(0, 0, 0, 0.9),
                        rgba(255, 255, 255, 0.77)
                    ), 
                    url('{{ asset('storage/' . $service->bg_image) }}');
                ">
                <div class="content-text">
                    <h2>{{ $service->title }}</h2>
                    <p class="quotes">"{{ $service->quotes }}"</p>
                    <p>
                        {{ Str::limit($service->description, 150) }}
                        <span class="read-more animate__animated animate__fadeInUp" style="display: none;">
                            {{ Str::substr($service->description, 150) }}
                        </span>
                        <span class="show-more" onclick="showMore(this)">Read More</span>
                    </p>
                    @if($service->brochure)
                        <div class="s_btn">
                            <a href="{{ asset('storage/' . $service->brochure) }}" class="s-btn">
                                Download Brochure <i class="fa-solid fa-download"></i>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
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
      //loader
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
        loader.style.display = "none";
    });
</script>
   <script src="{{asset('assets/js/animate.js')}}"></script>
    <script src="{{asset('assets/js/scrollreveal.js')}}"></script>
@endsection
