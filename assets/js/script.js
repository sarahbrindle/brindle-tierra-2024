//------------------overlay menu--------------------//
$(document).ready(function() {
  $(".navbar-toggler").click(function() {
    // Toggle the 'toggled' class on the button
    $(this).toggleClass("open");
    $(".overlay-nav").slideToggle();
    $("body").toggleClass("open");
  });
});

//---------------------overlay menu hover-------------//
$(document).ready(function() {
  // Handle mouseenter event
  $(".overlay-menu li a").mouseenter(function() {
    // Add a class to other a tags when a specific one is hovered
    $(".overlay-menu li a").not(this).addClass("others-hovered");
  });

  // Handle mouseleave event
  $(".overlay-menu li a").mouseleave(function() {
    // Remove the class when the mouse leaves
    $(".overlay-menu li a").removeClass("others-hovered");
  });
});

//-----------------aos-animation-------------------//


$(function() {
  
  $(window).on('load', function() {
    AOS.refresh();
  });
  //AOS.init();
  AOS.init({
    disable: function() {
      var maxWidth = 991;
      return window.innerWidth < maxWidth;
    }
  });
  
});

//Slick Sliders
$(document).ready(function(){
  $(".module-slider-1 .slider").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    arrows: true,
    prevArrow: $("#slick-prev"),
    nextArrow: $("#slick-next")
  });

  // Update dynamic title on slide change
  $('.slider').on('afterChange', function(event, slick, currentSlide){
    updateDynamicTitle();
  });

  // Call the function initially
  updateDynamicTitle();

  function updateDynamicTitle() {
    var altText = $('.slick-current img').attr('alt');
    $('.title-dynamic').text(altText);
  }

  $(".module-floor-plans .slider").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    centerMode: false,
    variableWidth: true,
    arrows: true,
    prevArrow: $("#plan-prev"),
    nextArrow: $("#plan-next"),
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          variableWidth: false,
          centerMode: true,
        }
      },
    ]
  });

  $(".module-gallery .slider").slick({
    dots: false,
    infinite: true,
    speed: 300,
    centerMode: true,
    variableWidth: true,
    arrows: true,
    prevArrow: $("#gal-prev"),
    nextArrow: $("#gal-next")
  });
});

//Magnific popup
$(document).ready(function() {
  $('.popup-btn').magnificPopup({
     type: 'image',
     gallery: {
        enabled: true
     },
     image: {
      titleSrc: function(item) {
          return item.el.attr('title') || '';
      }
    },
     // Add more options as needed
     closeBtnInside: false,
  });

  $('.gallery-btn').magnificPopup({
    type: 'image',
    gallery: {
       enabled: true
    },
    image: {
     titleSrc: function(item) {
         return item.el.attr('title') || '';
     }
   },
    // Add more options as needed
    closeBtnInside: false,
 });
});