$(document).ready(function(){
    $('.dot').eq(0).addClass('active');
    $('.product-img').eq(0).addClass('active');

    $('.submit-btn').click(function(){
      validate();
      if($('#size').val()){
          $('.product-form').submit();
      }
  });

});

var slideIndex = 1;

function nextSlide(n) {
    showSlides(slideIndex += n);
}
  
function currentSlide(n) {
    showSlides(slideIndex = n);
}
  
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName('product-img');
    var dots = document.getElementsByClassName('dot');
    if (n > slides.length) {slideIndex = 1}
    for (i = 0; i < slides.length; i++) {
      slides[i].classList.remove('active');
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].classList.remove('active');
    }
    slides[slideIndex-1].classList.add('active');
    dots[slideIndex-1].classList.add('active');
}

function validate(){
  size = document.getElementById('size').value;
  if(size === ""){
    alert("Please select a size.");
    return false;
  }
}

