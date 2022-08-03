jQuery(document).ready(function($){
  // fixed top nav add background whant the scroll in page
  $(window).scroll(function(){
    if($(window).scrollTop() > 50){
      $(".navbar").addClass("active")
      $(".fixed-top").css({"background-color":"#FFF"})
      $(".fixed-top").css({"box-shadow":"0px 5px 10px -3px rgba(7,7,189,.2)"})
      $(".navbar .navbar-nav .nav-item .nav-link").css({"color":"var(--color-primary)"})
      $(".navbar .navbar-nav .nav-item.active .nav-link").css({"border-bottom":"3px solid var(--color-primary)"})
    }else{
      $(".navbar").removeClass("active")
      $(".fixed-top").css({"background-color":"rgba(90,90,90, .7)"})
      $(".fixed-top").css({"box-shadow":"none"})
      $(".navbar .navbar-nav .nav-item .nav-link").css({"color":"var(--color-white)"})
      $(".navbar .navbar-nav .nav-item.active .nav-link").css({"border-bottom":"3px solid var(--color-secondary)"})
    }
  })

  //slick slider
  $('.cw-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    cssEase: 'linear'
  })
  $('.cw-slide-services').slick({
    dots: true,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    responsive:[
      {
        breakpoint: 992,
        settings:{
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 575,
        settings:{
          slidesToShow: 1,
        }
      }
    ]
  })
  $('.cw-slider-partners').slick({
    dots: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    responsive:[
      {
        breakpoint: 992,
        settings:{
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 575,
        settings:{
          slidesToShow: 2,
        }
      }
    ]
  })

});