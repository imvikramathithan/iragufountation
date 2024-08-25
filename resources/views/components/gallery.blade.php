
<section class="container " id="gallery">

   <br><br><br>
   <div class="display text-center animate-zoom-in">Gallery</div>
   <hr>
 <!-- gallery -->
    <div class="gallery">
        <!-- list Items -->
        <div class="list">
            @for ($i = 1; $i <= 15; $i++)
                <div class="item @if ($i === 1) active @endif">
                    <img src="{{ asset('assets/img/gallery/' . $i . '.webp') }}" alt="Image {{ $i }}">
                </div>
            @endfor
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="gallery-prev"><</button>
            <button id="gallery-next">></button>
        </div>
        <!-- thumbnail -->
        <div class="thumbnail">
            @for ($i = 1; $i <= 15; $i++)
                <div class="item @if ($i === 1) active @endif">
                    <img src="{{ asset('assets/img/gallery/' . $i . '.webp') }}" alt="Thumbnail {{ $i }}">
                </div>
            @endfor
        </div>
    </div>
    <br><br>
</section>


<script src="{{asset('assets/js/gallery.js')}}"></script>
