$( document ).ready(function() {
	console.log("ok");
   var scroll_start = 0;
   var startchange = $('#startchange');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.go-navbar').addClass('navbar-style');
      } else {
          $('.go-navbar').removeClass('navbar-style');
      }
  });

    // $(".main-ul").find('li').addClass('menu_item');

    $(".menu-item").click(function() {
        $(".hamburger").trigger('click');
    });
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.go-navbar').addClass('navbar-style');
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });

    $('.owl-partners').owlCarousel({
     loop:true,
     margin:0,
     nav:true,
     autoplay:true,
     autoplayTimeout: 2000,
     navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
     responsive:{
         0:{
             items:1
         },
         600:{
             items:2
         },
         1000:{
             items:4
         }
     }
 });

    $('.owl-voluntarios').owlCarousel({
     loop:true,
     margin:0,
     nav:true,
     autoplay:false,
     autoplayTimeout: 2000,
     navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
     responsive:{
         0:{
             items:1
         },
         600:{
             items:2
         },
         1000:{
             items:3
         }
     }
 });


    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
          $(".main-ul").slideToggle(300, function() {

          });
      }, false);
    });
  }

  var animated = $('[data-animation]');

  animated.addClass('wow bounceInUp');


  var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
  },
    scrollContainer: null // optional scroll container selector, otherwise use window
}
);
  wow.init();

  WebFontConfig = {
    google: { families: [ 'Nunito:300,400,700,900' ] }
};
(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();

$(".nav-toggle").on('click', function(event) {
    event.preventDefault();
    $
});

});