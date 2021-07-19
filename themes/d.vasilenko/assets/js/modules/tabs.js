(function($){
//     $(window).on('resize', function () {
//    if (window.screen.width <= 1024) {
//      var tab = $('#tabs .tabs-items > div'); 
//      var firstElement = tab.show().map(() => { });
     
//      	// Delete listener
//      $('#tabs .tabs-nav a').off('click')
//        $('.tabs-target').off('click');
    
      
//     return
//    }
   
  var tab = $('#tabs .tabs-items > div'); 
  var firstElement = tab.hide().filter(':first');
  firstElement.show();
  $(firstElement).addClass('active');
		
  var prevElement = firstElement;

	// Add listener
  $('#tabs .tabs-nav a').click(function () {
    if (prevElement) {
      $(prevElement).removeClass('active');
    }
		tab.hide(); 
    tab.filter(this.hash).show();
    prevElement = tab.filter(this.hash)[0]
    $(tab.filter(this.hash)[0]).addClass('active');
		$('#tabs .tabs-nav a').removeClass('active');
		$(this).addClass('active');
		return false;
	}).filter(':first').click();
 
	// Add listener
	$('.tabs-target').click(function(){
		$('#tabs .tabs-nav a[href=' + $(this).data('id')+ ']').click();
	});


 
// });
})(jQuery);

