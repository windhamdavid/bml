$(document).ready(function() {
	$('#bml').countdown({until: new Date(2014, 9 - 1, 27)});
	$('a#inline').fancybox({});
	$('#buy-love').show(); //FOUC
});

var s = skrollr.init({
	edgeStrategy: 'set',
	easing: {
		inverted: function(p) {
			return 1-p;
		}
	}
});