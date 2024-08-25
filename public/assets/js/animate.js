// 1. Slide Up Animation
var animateslideUp = {
    distance: "150%",
    origin: "bottom",
    opacity: 0,
    reset: true,
    mobile: false,
};
ScrollReveal().reveal(".animate-slide-up", animateslideUp);

// 2. Slide Down Animation
var animateslideDown = {
    distance: "150%",
    origin: "top",
    opacity: 0,
    reset: true,
    mobile: false,
};
ScrollReveal().reveal(".animate-slide-down", animateslideDown);

// 3. Slide Left Animation
var animateslideLeft = {
    distance: "50%",
    
    origin: "right",
    opacity: 0,
    reset: true,
    mobile: false,
};
ScrollReveal().reveal(".animate-slide-left", animateslideLeft);

// 4. Zoom In Animation
var animateZoomIn = {
    scale: 0.5,
    opacity: 0,
    reset: true,
    mobile: false,
};
ScrollReveal().reveal(".animate-zoom-in", animateZoomIn);

// 5. Rotate Animation
var animateRotate = {
    rotate: {
        x: 0,
        y: 80,
        z: 0,
    },
    opacity: 0,
    reset: true,
    mobile: false,
};
ScrollReveal().reveal(".animate-rotate", animateRotate);

// 6. Slide Right Animation
var animateslideRight = {
    distance: "50%",
    origin: "left",
    opacity: 0,
    reset: true,
    mobile: false,
};
ScrollReveal().reveal(".animate-slide-right", animateslideRight);

// 7. Fade In Animation
var animateFadeIn = {
    opacity: 0,
    duration: 2000,
    reset: true,
    mobile: false,
};
ScrollReveal().reveal(".animate-fade-in", animateFadeIn);

// 8. Flip Animation
var animateFlip = {
    rotate: {
        x: 180,
        y: 0,
        z: 0,
    },
    opacity: 0,
    reset: true,
    mobile: false,
};
ScrollReveal().reveal(".animate-flip", animateFlip);

// 9. Bounce Animation
var animateBounce = {
    distance: "20px",
    origin: "bottom",
    opacity: 0,
    easing: "ease-in-out",
    duration: 1000,
    reset: true,
    mobile: false,
    interval: 200,
};
ScrollReveal().reveal(".animate-bounce", animateBounce);

// 10. Swing Animation
var animateSwing = {
    rotate: {
        x: 0,
        y: 0,
        z: 45,
    },
    opacity: 0,
    duration: 1000,
    reset: true,
    mobile: false,
    easing: "ease-in-out",
};
ScrollReveal().reveal(".animate-swing", animateSwing);



//loader
var loader = document.getElementById("preloader");

window.addEventListener("load", function () {
    loader.style.display = "none";
});
