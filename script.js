document.addEventListener("DOMContentLoaded", function() {
    var imageElement = document.getElementById("pictures");
    var imageIndex = 1;
    var imageArray = ["pictures/js2.jpeg", "pictures/js3.jpeg", "pictures/js4.jpeg","pictures/js5.jpeg",];

    setInterval(function() {
        imageElement.src = imageArray[imageIndex];
        imageIndex = (imageIndex + 1) % imageArray.length;
    }, 2000);
});