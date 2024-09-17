
<section class="container " id="gallery">

   <br><br><br>
   <div class="display text-center animate-zoom-in">Gallery</div>
   <hr>
 <!-- gallery -->
 <div class="gallery">
    <!-- list Items -->
    <div class="list">
        @foreach ($galleries as $index => $gallery)
            <div class="item @if ($index === 0) active @endif">
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Image {{ $index + 1 }}">
            </div>
        @endforeach
    </div>
    <!-- button arrows -->
    <div class="arrows">
        <button id="gallery-prev"><</button>
        <button id="gallery-next">></button>
    </div>
    <!-- thumbnail -->
    <div class="thumbnail">
        @foreach ($galleries as $index => $gallery)
            <div class="item @if ($index === 0) active @endif">
                <img src="{{ asset('storage/' . $gallery->image) }}" alt="Thumbnail {{ $index + 1 }}">
            </div>
        @endforeach
    </div>
</div>


    <br><br>
</section>


<script src="{{asset('assets/js/gallery.js')}}"></script>
