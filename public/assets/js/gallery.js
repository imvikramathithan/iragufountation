let items = document.querySelectorAll(".gallery .list .item");
let next = document.getElementById("gallery-next");
let prev = document.getElementById("gallery-prev");
let thumbnails = document.querySelectorAll(".thumbnail .item");

// config param
let countItem = items.length;
let itemActive = 0;
// event next click
next.onclick = function () {
    itemActive = itemActive + 1;
    if (itemActive >= countItem) {
        itemActive = 0;
    }
    showgallery();
};
//event prev click
prev.onclick = function () {
    itemActive = itemActive - 1;
    if (itemActive < 0) {
        itemActive = countItem - 1;
    }
    showgallery();
};
// gallery
let refreshInterval = setInterval(() => {
    next.click();
}, 5000);
function showgallery() {
    // remove item active old
    let itemActiveOld = document.querySelector(".gallery .list .item.active");
    let thumbnailActiveOld = document.querySelector(".thumbnail .item.active");
    itemActiveOld.classList.remove("active");
    thumbnailActiveOld.classList.remove("active");

    // active new item
    items[itemActive].classList.add("active");
    thumbnails[itemActive].classList.add("active");

    // clear auto time run gallery
    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click();
    }, 5000);
}

// thumbnail
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener("click", () => {
        itemActive = index;
        showgallery();
    });
});
