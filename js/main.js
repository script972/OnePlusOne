$(document).ready(function(){

  function detectBrowserSize() {
    var myWidth = 0;
    if (typeof (window.innerWidth) == 'number') {
        //Non-IE
        myWidth = window.innerWidth;
    } else if (document.documentElement && document.documentElement.clientWidth) {
        //IE 6+ in 'standards compliant mode'
        myWidth = document.documentElement.clientWidth;
    } else if (document.body && document.body.clientWidth) {
        //IE 4 compatible
        myWidth = document.body.clientWidth;
    }
    return myWidth;
}
  
  /*MENU. hover on dropdown */
  $('#menu-main-menu .liitem').prepend('<div class="menu-liner"></div>');
  $('.liitem').has('ul').mouseover(function(){
  if ( detectBrowserSize() > 768 ) {
    $(this).children('ul').stop().fadeIn('slow');}
    }).mouseout(function(){if ( detectBrowserSize() > 768 ) {
    $(this).children('ul').stop().fadeOut('slow');}
    });
  });

$(document).ready(function(){
 jQuery(".contentDesktopSlider").owlCarousel({
      navigation : true, // показывать кнопки next и prev 
      slideSpeed : 100,
      paginationSpeed : 100,
      dots: true,
      loop:true,
      items : 2, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
      autoplay:false, //Автозапуск слайдера
    smartSpeed:1000, //Время движения слайда
    autoplayTimeout:2000, //Время смены слайда
    autoplayHoverPause: true,
    touchDrag:true,
    nav:true,
    navText:''
  });
 $(".siderDesktop .owl-prev").empty();
 $(".siderDesktop .owl-next").empty();
jQuery(".itemBlock .content").css("display", "none");
 $(".siderDesktop .itemBlock .content").first().fadeIn("400");
jQuery(".itemBlock .photo img").click(function(){
jQuery(".itemBlock .content").css("display", "none");
  jQuery(this).parent(".photo").parent(".itemBlock").children(".content").fadeIn("400");
  
});


});
