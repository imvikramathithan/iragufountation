<section class="container " id="testimonials">
   <br><br><br><br><br>
   <div class="display text-center animate-zoom-in">Testimonials</div>
   <hr>
   <div class="test_card_wrapper">
      <div class="test_card_container" id="test_cardContainer">
   @foreach($testimonials as $testimonial)
      <article class="test_card_article">
         <div class="test_card_image">
            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->school_name }}" class="test_card_img img-gallary">
            <div class="test_card_shadow"></div>
         </div>
         <div class="test_card_data">
            <h3 class="test_card_name">{{ $testimonial->school_name }}</h3>
            <p class="test_card_description lightfont">
                     " {{$testimonial->description}} . "
            </p> 
         </div>
      </article>  
   @endforeach
      </div>
</section>

<script>
   
   //testimonial
const cardContainer = document.getElementById("test_cardContainer");
const cards = document.querySelectorAll(".test_card_article");
let currentIndex = 0;
const scrollDelay = 3000; // 3 seconds

function autoScroll() {
    const cardWidth =
        cards[0].offsetWidth +
        parseInt(window.getComputedStyle(cards[0]).marginRight, 10);
    currentIndex++;

    if (currentIndex > cards.length - 4) {
        currentIndex = 0;
    }

    cardContainer.style.transform = `translateX(-${
        cardWidth * currentIndex
    }px)`;
}

setInterval(autoScroll, scrollDelay);
</script>