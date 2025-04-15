// Form Validation
function validateForm() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    if (name === "" || email === "" || message === "") {
        alert("All fields are required.");
        return false;
    }
    return true;
}

// Image Slider
let images = ["images/img.jpg", "images/img1.jpg", "images/img12.jpg"];
let index = 0;

function showImage() {
    document.getElementById('slider-image').src = images[index];
}

function nextImage() {
    index = (index + 1) % images.length;
    showImage();
}

function prevImage() {
    index = (index - 1 + images.length) % images.length;
    showImage();
}

//for automatic image slider
// setInterval(nextImage, 3000); // Changes image every 3 seconds

// document.addEventListener("DOMContentLoaded", showImage); // Show the first image on page load