jQuery(document).ready(function ($) {
	$("#bmlcount")
	.countdown("2014/09/27 09:27:00", function(event) {
		 $(this).text(event.strftime('in %D days %H:%M:%S'));
	}); 
    $('a.wish').on('click touchend', function() { 
        var link = $(this).attr('href');   
        window.open(link,'_self'); 
        return false;
    });    
	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();
	    if (scroll >= 11950) {
	        $("#heart2").addClass("pulse");
	    }
	});
});