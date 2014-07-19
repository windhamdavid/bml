$(document).ready(function() {
	$('#bml').countdown({until: new Date(2014, 9 - 1, 27)});
	$("a#inline").fancybox({});
});

var s = skrollr.init({
		
	});
	
skrollr.menu.init(s, {
    animate: true,
    easing: 'sqrt',
    scale: 2,
    duration: function(currentTop, targetTop) {
        return 500;
    }
});
