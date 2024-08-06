let toggle = document.querySelector(".toggle");
let menu = document.querySelector(".menu");

toggle.addEventListener("click", function () {
    menu.classList.toggle("active");
});

/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper(".card__content", {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        968: {
            slidesPerView: 3,
        },
    },
});
// quereis
const student = document.getElementById("student");
const management = document.getElementById("management");
const query = document.getElementById("query");
const home = document.getElementById("home");

student.addEventListener("click", () => {
    query.classList.add("right-panel-active");
});
management.addEventListener("click", () => {
    query.classList.remove("right-panel-active");
});

const btnqurey = document.getElementById("btnqurey");
const closequery = document.getElementById("close-icon");
btnqurey.addEventListener("click", () => {
    query.classList.add("popup");
    donate.classList.remove("donate-show");
    home.classList.add("bg-blur");
    home.classList.remove("blur-out");
});
closequery.addEventListener("click", () => {
    query.classList.remove("popup");
    home.classList.remove("bg-blur");
    home.classList.add("blur-out");
});

//donate
const donatebtn = document.getElementById("btndonate");
const donate = document.getElementById("donate");
const closedonate = document.getElementById("donate-close-icon");
donatebtn.addEventListener("click", () => {
    donate.classList.add("donate-show");
    query.classList.remove("popup");
    home.classList.add("bg-blur");
    home.classList.remove("blur-out");
});
closedonate.addEventListener("click", () => {
    donate.classList.remove("donate-show");
    home.classList.remove("bg-blur");
    home.classList.add("blur-out");
});

//donate
const donatebtn_camp = document.getElementById("btndonate-camp");
donatebtn_camp.addEventListener("click", () => {
    donate.classList.add("donate-show");
    query.classList.remove("popup");
    home.classList.add("bg-blur");
    home.classList.remove("blur-out");
});
closedonate.addEventListener("click", () => {
    donate.classList.remove("donate-show");
    home.classList.remove("bg-blur");
    home.classList.add("blur-out");
});

// teams
const allImages = document.querySelectorAll(".shape");

function handleImageClick(images) {
    images.forEach((img) => {
        img.addEventListener("click", () => {
            if (img.classList.contains("scaled")) {
                allImages.forEach((siblingImg) =>
                    siblingImg.classList.remove("hidden")
                );
                img.classList.remove("scaled");
            } else {
                allImages.forEach((siblingImg) => {
                    if (siblingImg !== img) {
                        siblingImg.classList.add("hidden");
                    }
                });
                img.classList.remove("hidden");
                img.classList.add("scaled");
            }
        });
    });
}

handleImageClick(allImages);
// Reset images to default size when clicking outside of a scaled image
document.addEventListener("click", (event) => {
    if (!event.target.classList.contains("shape")) {
        allImages.forEach((img) => {
            if (img.classList.contains("scaled")) {
                allImages.forEach((siblingImg) =>
                    siblingImg.classList.remove("hidden")
                );
                img.classList.remove("scaled");
            }
        });
    }
});

//count

// Function to start counting up to the target number for .count-large elements
function countUpLarge(element) {
    var target = parseInt(element.getAttribute("data-target"));
    var currentCount = 0;
    var increment = Math.ceil(target / 100); // Adjust the increment based on the target number

    var interval = setInterval(function () {
        if (currentCount >= target) {
            clearInterval(interval);
            currentCount = target;
        }
        element.textContent = currentCount;
        currentCount += increment;
    }, 20); // Speed for count-large element
}

// Function to start counting up to the target number for .count elements
function countUpNormal(element) {
    var target = parseInt(element.getAttribute("data-target"));
    var currentCount = 0;
    var increment = Math.ceil(target / 100); // Adjust the increment based on the target number

    var interval = setInterval(function () {
        if (currentCount >= target) {
            clearInterval(interval);
            currentCount = target;
        }
        element.textContent = currentCount;
        currentCount += increment;
    }, 20); // Speed for count element
}

// Function to handle scroll event
function handleScroll() {
    var countLargeElements = document.querySelectorAll(".count-large");
    var countElements = document.querySelectorAll(".count");

    countLargeElements.forEach(function (element) {
        if (isInViewport(element)) {
            countUpLarge(element);
        }
    });

    countElements.forEach(function (element) {
        if (isInViewport(element)) {
            countUpNormal(element);
        }
    });
}

// Function to check if an element is in viewport
function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
            (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <=
            (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Add scroll event listener
window.addEventListener("scroll", handleScroll);

// Initial check in case elements are already in viewport when the page loads
handleScroll();

//*******CAMPAINEPAGE********//

// Define camp elements and their corresponding view and less buttons
const camps = [
    {
        camp: document.getElementById("camp-1"),
        view: document.getElementById("view1"),
        less: document.getElementById("less1"),
    },
    {
        camp: document.getElementById("camp-2"),
        view: document.getElementById("view2"),
        less: document.getElementById("less2"),
    },
    {
        camp: document.getElementById("camp-3"),
        view: document.getElementById("view3"),
        less: document.getElementById("less3"),
    },
];

// Add event listeners for each camp
camps.forEach((camp, index) => {
    const { camp: campElement, view, less } = camp;

    view.addEventListener("click", () => {
        campElement.classList.add("col-8");
        campElement.classList.remove("col");
        camps.forEach((otherCamp, otherIndex) => {
            if (otherIndex !== index) {
                otherCamp.camp.classList.remove("col-8");
                otherCamp.camp.classList.add("col");
            }
            otherCamp.view.classList.remove("campmore");
            otherCamp.less.classList.remove("less-show");
        });
        view.classList.add("campmore");
        less.classList.add("less-show");
    });

    less.addEventListener("click", () => {
        view.classList.remove("campmore");
        less.classList.remove("less-show");
        campElement.classList.remove("col-8");
        campElement.classList.add("col");
    });
});

document.addEventListener("click", (event) => {
    let clickedOutsideScaledCamp = true;
    camps.forEach(({ camp }) => {
        if (camp.classList.contains("col-8") && camp.contains(event.target)) {
            clickedOutsideScaledCamp = false;
        }
    });

    if (clickedOutsideScaledCamp) {
        camps.forEach(({ camp, less, view }) => {
            camp.classList.remove("col-8");
            camp.classList.add("col");
            less.classList.remove("less-show");
            view.classList.remove("campmore");
        });
    }
});

//************ANIMATION************//

// Select all elements with the class '.slideupscroll'
let slideup = document.querySelectorAll(".slideupscroll");
// Select all elements with the class '.heartbeat'
let heartbeat = document.querySelectorAll(".heartbeat");
// Add scroll event listener to the window

window.onscroll = () => {
    let top = window.scrollY;
    let bottom = top + window.innerHeight;

    // Loop through each section with the class '.slideupscroll'
    slideup.forEach((sec) => {
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let isVisible = offset < bottom && offset + height > top;

        if (isVisible) {
            sec.classList.add("animate__animated", "animate__fadeInUp");
            sec.classList.remove("animate__fadeOutDown", "animate__fadeOutUp");
        } else {
            // Check if the section is above or below the viewport
            if (offset + height < top) {
                sec.classList.remove(
                    "animate__fadeInUp",
                    "animate__fadeOutDown"
                );
                sec.classList.add("animate__fadeOutUp");
            } else {
                sec.classList.remove("animate__fadeInUp", "animate__fadeOutUp");
                sec.classList.add("animate__fadeOutDown");
            }
        }
    });

    // Loop through each section with the class '.heartbeat'
    heartbeat.forEach((hb) => {
        let offset = hb.offsetTop - 150;
        let height = hb.offsetHeight;
        let isVisible = offset < bottom && offset + height > top;

        if (isVisible) {
            hb.classList.add("animate__animated", "animate__backInRight");
            hb.classList.remove("animate__fadeOutDown", "animate__fadeOutUp");
        } else {
            // Check if the section is above or below the viewport
            if (offset + height < top) {
                hb.classList.remove(
                    "animate__backInRight",
                    "animate__fadeOutDown"
                );
                hb.classList.add("animate__fadeOutUp");
            } else {
                hb.classList.remove(
                    "animate__backInRight",
                    "animate__fadeOutUp"
                );
                hb.classList.add("animate__fadeOutDown");
            }
        }
    });
};

/**************READ MORE**********/

function showMore(btn) {
    var paragraph = btn.parentNode;
    var moreText = paragraph.querySelector(".read-more");
    var btnText = paragraph.querySelector(".show-more");

    if (
        paragraph.style.maxHeight === "100%" ||
        paragraph.style.maxHeight === ""
    ) {
        paragraph.style.maxHeight = "none";
        moreText.style.display = "inline";
        btnText.innerHTML = "Read Less";
    } else {
        paragraph.style.maxHeight = "100%";
        moreText.style.display = "none";
        btnText.innerHTML = "Read More";
    }
}

//csr

//campain

function expandColumn(element) {
    const columns = document.querySelectorAll(".camp-column");
    columns.forEach((column) => column.classList.remove("expanded"));
    element.classList.add("expanded");
}

