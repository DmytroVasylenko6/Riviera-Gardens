
(function($){
$(window).bind('scroll', function (e) {
    parallaxScroll();
});

function parallaxScroll(){
   var scrolled = $(window).scrollTop(); 
   $('[data-text-container]').css('top', (0 - (scrolled * .05)) + 'px');
   $('.background').css('top',(0-(scrolled*.25))+'px');
   $('.swiper-pagination').css('bottom',(0+(scrolled*.25))+'px');

}
})(jQuery);