jQuery(document).ready(function($){
  //section anchor effect with internal link
  $( '.navbar-nav a[href^="#"]' ).on( 'click', function(e) {
    e.preventDefault();
    var id = $( this ).attr( 'href' ),
        targetOffset = $( id ).offset().top
     
    $( 'html, body' ).animate({ 
      scrollTop: targetOffset - 102
    }, 300)
  } )

  // fixed top nav add background whant the scroll in page
  $(window).scroll(function(){
    if($(window).scrollTop() > 50){
      $(".navbar").addClass("active")
      $(".fixed-top").css({"background-color":"#FFF"})
      $(".fixed-top").css({"box-shadow":"0px 5px 10px -3px rgba(7,7,189,.2)"})
      $(".navbar .navbar-nav .nav-item .nav-link").css({"color":"var(--color-primary)"})
      // $(".navbar .navbar-nav .nav-item.active .nav-link").css({"border-bottom":"3px solid var(--color-primary)"})
      $(".logo-fixed").css({"display":"none"})
      $(".logo-scroll").css({"display":"block"})
      $(".logo-scroll").css({"transtion":".3s all linear"})
    }else{
      $(".navbar").removeClass("active")
      $(".fixed-top").css({"background-color":"rgba(90,90,90, .7)"})
      $(".fixed-top").css({"box-shadow":"none"})
      $(".navbar .navbar-nav .nav-item .nav-link").css({"color":"var(--color-white)"})
      // $(".navbar .navbar-nav .nav-item.active .nav-link").css({"border-bottom":"3px solid var(--color-secondary)"})   
      $(".logo-fixed").css({"display":"block"})
      $(".logo-scroll").css({"display":"none"})
    }
  })

  //slick slider
  $('.cw-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3100,
    arrows: false,
    fade: true,
    asNavFor: '.cw-slider-nav'
  })
  $('.cw-slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.cw-slider',
    dots: false,
    centerMode: true,
    focusOnSelect: true
  })
  
  $('.cw-slide-services').slick({
    dots: true,
    infinite: false,
    slidesToShow: 2,
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

   //effect debounce 
   debounce = function(func, wait, immediate){
    var timeout
    return function(){
      var context = this, args = arguments
      var later = function(){
        timeout = null
        if(!immediate) func.apply(context, args)
      }
      var callNow = immediate && !timeout
      clearTimeout(timeout)
      timeout = setTimeout(later, wait)
      if(callNow) func.apply(context, args)
    }
  }

  //data-anime
  const target = document.querySelectorAll('[data-anime]')
  const animetion_scroll = 'animate'

  function anime_scroll(){
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4)
    //top of the comparison window with the specific target
    target.forEach(function(element){
      if((windowTop) > element.offsetTop){
        element.classList.add(animetion_scroll)
      }else{
        element.classList.remove(animetion_scroll)
      }
    })
  }
  anime_scroll()
  if(target.length){
    window.addEventListener('scroll', debounce(function(){
      anime_scroll()
    }, 300))    
  }

  // count of number bussiness
  (function ($){
    $.fn.countTo = function (options){
      options = options || {};
      
      return $(this).each(function (){
        var settings = $.extend({}, $.fn.countTo.defaults,{
          from:            $(this).data('from'),
          to:              $(this).data('to'),
          speed:           $(this).data('speed'),
          refreshInterval: $(this).data('refresh-interval'),
          decimals:        $(this).data('decimals')
        }, options);
        
        var loops = Math.ceil(settings.speed / settings.refreshInterval),
          increment = (settings.to - settings.from) / loops
        
        var self = this,
          $self = $(this),
          loopCount = 0,
          value = settings.from,
          data = $self.data('countTo') || {}
        
        $self.data('countTo', data)
      
        if (data.interval) {
          clearInterval(data.interval)
        }
        data.interval = setInterval(updateTimer, settings.refreshInterval)
        render(value)
        
        function updateTimer(){
          value += increment
          loopCount++
          
          render(value)
          
          if (typeof(settings.onUpdate) == 'function'){
            settings.onUpdate.call(self, value)
          }
          
          if (loopCount >= loops){
            $self.removeData('countTo')
            clearInterval(data.interval)
            value = settings.to
            
            if (typeof(settings.onComplete) == 'function'){
              settings.onComplete.call(self, value)
            }
          }
        }
        
        function render(value){
          var formattedValue = settings.formatter.call(self, value, settings)
          $self.html(formattedValue)
        }
      })
    }
    
    $.fn.countTo.defaults = {
      from: 0,               
      to: 0,                 
      speed: 3000,          
      refreshInterval: 100,  
      decimals: 0,           
      formatter: formatter,  
      onUpdate: null,        
      onComplete: null       
    }
    
    function formatter(value, settings){
      return value.toFixed(settings.decimals)
    }
  }(jQuery))
  
  jQuery(function($){
    // custom formatting example
    $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, '.')
    }
    })
    
    $('.timer').each(count) 
    
    function count(options){
    var $this = $(this)
    options = $.extend({}, options || {}, $this.data('countToOptions') || {})
    $this.countTo(options)
    }
  })

});