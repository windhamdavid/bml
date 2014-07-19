$(document).ready(function() {
	$('#bml').countdown({until: new Date(2014, 9 - 1, 27)});
	//$("a#inline").fancybox({});
	$('a#inline').fancybox({
	  padding: 0,
	  helpers: {
	    overlay: {
	      locked: false
	    }
	  }
	});
});


var s = skrollr.init({
	edgeStrategy: 'set',
	easing: {
		WTF: Math.random,
		inverted: function(p) {
			return 1-p;
		}
	}
});
var s = skrollr.init(/*other stuff*/);

//The options (second parameter) are all optional. The values shown are the default values.
skrollr.menu.init(s, {
    //skrollr will smoothly animate to the new position using `animateTo`.
    animate: true,

    //The easing function to use.
    easing: 'sqrt',

    //Multiply your data-[offset] values so they match those set in skrollr.init
    scale: 2,

    //How long the animation should take in ms.
    duration: function(currentTop, targetTop) {
        //By default, the duration is hardcoded at 500ms.
        return 500;

        //But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
        //return Math.abs(currentTop - targetTop) * 10;
    },

    //If you pass a handleLink function you'll disable `data-menu-top` and `data-menu-offset`.
    //You are in control where skrollr will scroll to. You get the clicked link as a parameter and are expected to return a number.
    handleLink: function(link) {
        return 400;//Hardcoding 400 doesn't make much sense.
    }
});
