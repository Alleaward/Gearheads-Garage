var slideIndex = 0;
showDivs(slideIndex);
function plusDivs(n) {
    showDivs(slideIndex += n)
}

function showDivs(n) {
    var i; var x = document.getElementsByClassName("mySlides"); 
    if (n > x.length) { 
        slideIndex = 1 
    }
    if (n < 1) { 
        slideIndex = x.length 
    }
    for (i = 0; i < x.length; i++) { 
        x[i].style.display = "none" 
    }
    x[slideIndex - 1].style.display = "block"
}

showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block"; setTimeout(showSlides, 3000)
}

$(document).ready(function (event) {
    $('#modalForm').validate();
    $('#modalForm').on('submit', function () {
        if ($('#modalForm').valid()) {
            $('#modalForm').fadeOut();
        }
    });
});