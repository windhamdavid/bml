jQuery(document).ready(function ($) {
	$("#bmlcount")
	.countdown("2014/09/27", function(event) {
		 $(this).text(event.strftime('%D days %H:%M:%S'));
	});
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	    if (scroll >= 9950) {
	        $("#heart").addClass("pulse");
	    }
	});
});