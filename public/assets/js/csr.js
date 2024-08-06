//csr

const csr_slider = document.querySelector('.csr-slider');
const csr_cards = document.querySelectorAll('.csr-card');
let currentIndex = 0;

function nextSlide() {
    if (currentIndex === csr_cards.length - 1) {
        currentIndex = 0;
    } else {
        currentIndex++;
    }
    updateSlider();
}

function prevSlide() {
    if (currentIndex === 0) {
        currentIndex = csr_cards.length - 1;
    } else {
        currentIndex--;
    }
    updateSlider();
}

function updateSlider() {
    const csr_offset = -currentIndex * csr_cards[0].offsetWidth;
    csr_slider.style.transform = `translateX(${csr_offset}px)`;
}