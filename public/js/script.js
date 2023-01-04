
var countDownDate = new Date("Jul 12, 2021 21:00:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

  document.getElementById("countdown").innerHTML = days + " Days " + hours + " Hours "
  + minutes + " Minutes Left";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdown").innerHTML = "Special offer has ended.";
  }
}, 1000);

var slideIndex = 1;

var y = setInterval(function() {
  nextSlide(1);
},6000)

function nextSlide(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('item');
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

function readMore(id,dot,more){
  thisDots = document.getElementById(dot);
  thisText = document.getElementById(id);
  thisReadMore = document.getElementById(more);
  thisText.style.display = "block";
  thisDots.style.display = "none";
  thisReadMore.style.display = "none";
}
