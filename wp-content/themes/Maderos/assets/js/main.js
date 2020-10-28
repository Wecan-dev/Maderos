$(function () {
  'use strict'
  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
    // $('.img-pd').toggleClass('opac')
  })
})

// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >=0)) {
    $('.navbar').addClass('fixed')
    $('.navbar-brand').addClass('iso-small')
    $('.nav-link').addClass('fixed-color'); 
  } else {
    $('.navbar').removeClass('fixed')
    $('.navbar-brand').removeClass('iso-small')
    $('.nav-link').removeClass('fixed-color');
  }
});

// menu hambuger
$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $('.navbar').addClass('nav-bg')
    $('html').addClass('fixed');
  } else {
    $(this).removeClass("is-active")
    $('html').removeClass('fixed');
    $('.navbar').removeClass('nav-bg');
    if ($(document).scrollTop() <= 70 && ($(window).width() <=991)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').addClass('js-hamburger');
      $('.navbar').removeClass('nav-bg');
    }
    else{
      $('.hamburger-inner').removeClass('js-hamburger');
    }
  }
});

$(function () {
  'use strict'
  $('.nav-link').on('click', function () {
    $('.offcanvas-collapse').removeClass('open')
    $('.hamburger').removeClass('is-active')
    $('html').removeClass('fixed');
  })
})

$(document).ready(function() {
  $('#banner').on('init', function(e, slick) {
      var $firstAnimatingElements = $('div.main-banner__img:first-child').find('[data-animation]');
      doAnimations($firstAnimatingElements);    
  });

  $('#banner').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
      var $animatingElements = $('div.main-banner__img[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
      doAnimations($animatingElements);    
  });

  $('.banner-slider').slick({
    infinite: true,
    fade: true,
    cssEase: 'linear',
    autoplay:true,
    autoplaySpeed: 5000
  });

  function doAnimations(elements) {
    var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    elements.each(function() {
      var $this = $(this);
      var $animationDelay = $this.data('delay');
      var $animationType = 'animated ' + $this.data('animation');
      $this.css({
        'animation-delay': $animationDelay,
        '-webkit-animation-delay': $animationDelay
      });
      $this.addClass($animationType).one(animationEndEvents, function() {
        $this.removeClass($animationType);
      });
    });
  }
});

function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}



function openModal1() {
  document.getElementById("myModal1").style.display = "block";
}

function closeModal1() {
  document.getElementById("myModal1").style.display = "none";
}

var slideIndex = 1;
showSlides1(slideIndex);

function plusSlides1(n) {
  showSlides1(slideIndex += n);
}

function currentSlide1(n) {
  showSlides1(slideIndex = n);
}


function showSlides1(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}





function openModal2() {
  document.getElementById("myModal2").style.display = "block";
}

function closeModal2() {
  document.getElementById("myModal2").style.display = "none";
}

var slideIndex = 1;
showSlides2(slideIndex);

function plusSlides2(n) {
  showSlides2(slideIndex += n);
}

function currentSlide2(n) {
  showSlides2(slideIndex = n);
}


function showSlides2(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}








