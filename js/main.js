$(window).load(function(){
  $('.flexslider').flexslider({
   animation: "fade",
   slideshowSpeed: 2500,
   animationSpeed: 3000, 
    start: function(slider){
      slider.removeClass('loading');
    }
  });
});



	$(function () {
		$('.footable').footable();
	});
	$('.footable').footable({
	    breakpoints: {
	        tiny: 100,
	        medium: 760,
	        big: 1024
	    }
	});
   
	WebFont.load({
	      custom: {
	         families: ['Raleway-ExtraLight']
	      }
	   });