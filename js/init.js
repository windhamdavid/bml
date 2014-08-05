$(document).ready(function() {
	$("#bmlcount")
	.countdown("2014/09/27", function(event) {
		 $(this).text(event.strftime('%D days %H:%M:%S'));
	});
});