$('.main-planos__content').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  fade: true,
  cssEase: 'linear',
  // fade: true,
  // cssEase: "linear",
  arrows: false,
  responsive: [{
      breakpoint: 1200,
      settings: {
      
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 900,
      settings: {

      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: false,
        arrows: false,
        autoplaySpeed: 1000
      }
    }
  ]
});

$('.banner-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows:true,
  autoplay:true,
  autoplaySpeed:5000,
  fade: true,
  cssEase: 'linear',
  // fade: true,
  // cssEase: "linear",
  arrows: true,
  responsive: [{
      breakpoint: 1200,
      settings: {
      
        infinite: true,
        dots: false,
        arrows: false
      }
    },
    {
      breakpoint: 900,
      settings: {
        arrows: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: false,
        arrows: false,
        autoplaySpeed: 1000
      }
    }
  ]
});




$('.main-zona__content').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  // fade: true,
  // cssEase: "linear",
  arrows: false,
  responsive: [{
      breakpoint: 1200,
      settings: {
      
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 900,
      settings: {

      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: false,
        arrows: false,
        autoplaySpeed: 1000
      }
    }
  ]
});




$(document).ready(function() {
  var $slider = $('.grid-slider');
  var $progressBar = $('.progress');
  var $progressBarLabel = $( '.slider__label' );
  
  $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
    var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
    
    $progressBar
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc );
    
    $progressBarLabel.text( calc + '% completed' );
  });
  
  $slider.slick({
    slide: '.grid-slide',
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 400
  });  
});


$(document).ready(function() {
  var $slider = $('.grid-slider');
  var $progressBar = $('.progress');
  var $progressBarLabel = $( '.slider__label' );
  
  $slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {   
    var calc = ( (nextSlide) / (slick.slideCount-1) ) * 100;
    
    $progressBar
      .css('background-size', calc + '% 100%')
      .attr('aria-valuenow', calc );
    
    $progressBarLabel.text( calc + '% completed' );
  });
  
  $slider.slick({
    slide: '.grid-slide-galeria',
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 400
  });  
});



$('.grid-slide-galeria').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
  responsive: [{
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplaySpeed: 1000
      }
    }
  ]
});

