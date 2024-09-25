<style>
    .zigzag-container {
    display: flex;
    align-items: center;
    margin: 20px 0;
}

.zigzag-container.left .content-box {
    flex-direction: row;
}

.zigzag-container.right .content-box {
    flex-direction: row-reverse;
}

.content-box {
    display: flex;
    width: 100%;
}

.content-box img {
    width: 40%;
    margin: 0 20px;
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

.btn-container {
    margin-top: 20px;
}

.btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

</style>


<div class="course">
    <h1>Service for Students</h1>
    <h3>{{ $course->course_name }}</h3>
 
</div>

<div class="course-section">
    @foreach($services as $index => $service)
        <div class="zigzag-container {{ $loop->even ? 'left' : 'right' }}" id="{{ $course->slug}}">
            <div class="content-box">
                @if($service->logo)
                             <img src="{{ asset('storage/' . $service->logo) }}" alt="{{ $course->course_name }} logo" class="course-logo">
                        @endif
                <div class="content-text">
                    <h2>{{ $service->name }}</h2>
                    <p>{{ Str::limit($service->description, 150) }}
                        <span class="read-more animate__animated animate__fadeInUp">{{ Str::substr($service->description, 150) }}</span>
                        <span class="show-more" onclick="showMore(this)">Read More</span>
                    </p>
                    <div class="btn-container">
                        <a href="{{ url('storage/', $service->brochure) }}" class="btn">Download Brochure <i class="fa-solid fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
