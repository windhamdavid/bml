jQuery(document).ready(function ($) {
	$("#bmlcount")
	.countdown("2014/09/27 09:27:00", function(event) {
		 $(this).text(event.strftime('in %D days %H:%M:%S'));
	}); 
	$("#bmlcount2")
	.countdown("2024/09/27 09:27:00", function(event) {
		 $(this).text(event.strftime('%D days %H:%M:%S'));
	}); 
    $('a').on('click touchend', function() { 
        var link = $(this).attr('href');   
        window.open(link,'_self'); 
        return false;
    });    
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	    if (scroll >= 11950) {
	        $("#heart").addClass("pulse");
	    }
	});
});