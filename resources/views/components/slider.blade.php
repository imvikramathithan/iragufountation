<!--slider-->
<div class="slider">
  <div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @foreach($slides as $index => $slide)
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
      @endforeach
    </div>
    
    <div class="carousel-inner">
      @foreach($slides as $index => $slide)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="2000">
            @if($slide->image)
              <img src="{{ asset('storage/' . $slide->image) }}" class="d-block w-100 slide-img" alt="{{ $slide->title }}">
            @endif
            <div class="carousel-caption">
            <p>"{{ $slide->firstLine }} <span class="slide-color">{{ $slide->midLine }}</span>, </p>
            <p>{{ $slide->lastLine }} "</p>
            </div>
        </div>
      @endforeach
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
  <br><br><br>
</div>  
<!--endslider-->
