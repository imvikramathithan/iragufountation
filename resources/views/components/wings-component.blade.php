<style>
    .zigzag-container {
    display: flex;
    align-items: center;
    
}

.zigzag-container.left .content-box {
    flex-direction: row;
}
.zigzag-container.left .content-box .content-text p{
    border-radius: 10px;
    min-height: 102px;
    padding: 14px;
    background-image: linear-gradient(to right, rgb(0 0 0), rgb(0 0 0 / 0%));
    color: #fff;
}


.zigzag-container.right .content-box {
    flex-direction: row-reverse;
}
.zigzag-container.right .content-box .content-text p{
border-radius: 10px;
    min-height: 102px;
    padding: 14px;
    background-image: linear-gradient(to left, rgb(0 0 0), rgb(0 0 0 / 0%));
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
}

.content-box img {
    width: 70%;
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
    background-color: #ff1500;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

</style>

<div class="course">
    <h1>Service for Students</h1>

</div>

<div class="course-section" id="{{ $course->slug }}">
    @foreach($services as $index => $service)
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
               <div class="sfslogo">
                 @if($service->logo)
                    <img src="{{ asset('storage/' . $service->logo) }}" 
                         alt="{{ $service->name }} logo" 
                         class="course-logo">
                @endif
               </div>

                <div class="content-text">
                    <div class="qoutes">{{$service->quotes}}</div>
                    <p>
                        {{ Str::limit($service->description, 150) }}
                        <span class="read-more animate__animated animate__fadeInUp">
                            {{ Str::substr($service->description, 150) }}
                        </span>
                        <span class="show-more" onclick="showMore(this)">Read More</span>
                    </p>
                    <div class="s_btn">
                        <a href="{{ url('storage/', $service->brochure) }}" class="s-btn">
                            Download Brochure <i class="fa-solid fa-download"></i>
                        </a>
                    </div>
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
</script>