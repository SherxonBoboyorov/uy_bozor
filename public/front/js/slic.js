$(document).ready(function(){
  $('.slider__list').slick({
    dots: true,
    arrows:false,
    autoplaySpeed:5000,
    infinite: true,
    speed: 1500,
    autoplay:true,
    fade: true,
  });

  $('.categoriesIn__gallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    fade: true,
  });
})