<!--slider-->
<div class="slider">
  <div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      
    </div>
    <div class="carousel-inner">
        {{-- <div class="carousel-item active" data-bs-interval="2000">
              <video id="video-slide" autoplay muted loop class="d-block w-100 slide-video">
                <source src="{{asset('assets/img/slides/video1.mp4')}}" type="video/mp4" >
            </video>
            <div class="carousel-caption">
              <p>"Improve your <span class="slide-color">Handwriting</span>in 6 days & , </p>
              <p>it's time for writing success"</p>
            </div>
          
        </div> --}}
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="{{asset('assets/img/slides/slide2.webp')}}" class="d-block w-100 slide-img" alt="img2">
        <div class="carousel-caption">
          <p>"Change your <span class="slide-color">Handwriting</span>, </p>
          <p>change your life"</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{asset('assets/img/slides/slide3.webp')}}" class="d-block w-100 slide-img" alt="slide3">
        <div class="carousel-caption">
          <p>"One Stop Portal for learning <span class="slide-color">Uyirmei ezhuthukal</span>, </p>
          <p>with us !!"</p>
        </div>
      </div>
      <!-- New slides -->
     
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br> <br> <br>
</div>  
<!--endslider-->
