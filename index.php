<?php?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="David + Ginny">
<meta property="og:title" content="Can't Buy Me Love"/>
<meta property="og:url" content="https://cantbuymelove.org"/>
<meta property="og:image" content="https://cantbuymelove.org/wp-content/themes/bml/img/bml_thermo.png"/>
<meta property="og:site_name" content="Can't Buy Me Love"/>
<meta property="og:description" content="David + Ginny"/>
<title>D+G (Can't Buy Me Love)</title>
<?php wp_head(); ?>
</head>
<body>
	
	<div id="bg1" data-0="display:none;" data-1000="display:block;background-position:0px 0px;" data-end="background-position:-500px -10000px;"></div>
	<div id="bg2" data-0="display:none;" data-4000="display:block;background-position:0px 0px;" data-end="background-position:-500px -8000px;"></div>
	<div id="bg3" data-0="display:none;" data-8000="display:block;background-position:0px 0px;" data-end="background-position:-500px -6000px;"></div>
	<div id="progress" data-0="width:0%;background:rgb(130, 104, 130);" data-end="width:100%;background:rgb(103, 130, 91);"></div>
	
	<div id="intro" data-0="display:block;" data-1400="display:none;">
		<div class="intro_ease" data-0="left:92%" data-1500="left:0%;">
			<h4 class="cardo">You're cordially invited</h4>
			<h4 class="cardo">to celebrate the marriage of</h4><br />
			<h1 class="monsieur">David A. Windham</h1>
			<h4 class="cardo">and</h4><br />
			<h1 class="monsieur">Ginny L. Gast</h1><br />
			<h4 class="cardo">Saturday, The Twenty-Seventh Of September<br/>Two Thousand Fourteen</h4><br />
			<img src="wp-content/themes/bml/img/swirl.png">
		</div>
	</div>
	
	<div id="intro2" data-1400="display:block;" data-4100="display:none;">
		<div class="intro_ease" data-1400="left:-30%" data-2100="left:93%;" data-3100="left:93%;" data-4100="left:150%;">
			<h4 class="vibes">No need to dress up, no need to wrap gifts.</h4>
			<h4 class="vibes">Just stay at home, and send us a good wish.</h4>
			<h4 class="vibes">We appreciate your love and cheer.</h4>
			<h4 class="vibes">But we're off on a journey have no fear.</h4>
		</div>
	</div>
	
	<div id="story_wrap" data-3200="top:200%" data-4400="top:0%;" data-11000="top:0%;" data-12200="top:-100%;" data-3400="background:rgba(0,0,0,0);" data-3700="background:rgba(104,130,91,.25);">
		<div id="story">
			<div class="story_ease" data-3400="top:100%" data-4400="top:5%;" data-8000="top:5%;" data-9000="top:-35%;">
					<h4 class="vibes">About 10 years ago<br /> a guy named Dave met a girl named Ginny.<br />
					Soon after, the two would take a trip to New York City.</h4>
			</div>
			<div class="story_ease" data-4000="top:100%" data-5000="top:20%;" data-8000="top:20%;" data-9000="top:-35%;">
					<h4 class="vibes">Days and weeks and many more,<br />
					The couple found love they could not ignore.<br />
					They dwelled in cities, the trees, and farm,<br />
					Each would have its newfound charm.</h4>
			</div>
			<div class="story_ease" data-5000="top:100%;" data-6000="top:40%;" data-8000="top:40%;" data-9000="top:-40%;">	
					<h4 class="vibes">And then one day came when they decided to marry.<br />
					They had made it 10 years, after all, it’s not so scary.<br />
					Money can’t buy love, this they knew.<br />
					But it sure could pay for a trip, to start anew.</h4>
			</div>
			<div class="story_ease" data-6000="top:100%;" data-7000="top:60%;" data-8000="top:60%;" data-9000="top:-40%;">
					<h4 class="vibes">So tip your hat to these big-hearted.<br />
					Who are embarking on a journey to where it all started.<br />
					To jumpstart another decade, with its ups and downs.<br />
					New experiences and perhaps new towns.</h4>
			</div>
			<div class="story_ease" data-8000="top:100%" data-9000="top:15%;" data-10000="top:15%;" data-11000="top:-40%;">
					<div id="bmlcount"></div><div id="heart">&nbsp;</div>
					<h4 class="vibes">But have no worries for this one of many couples.<br />
					Because they’re a good team and can tackle life’s troubles.<br />
					For it is their love that will make them last.<br />
					This guy named Windham and girl named Gast.</h4>
			</div>
		</div>
	</div>
	
	<div id="trip" data-11000="top:-200%" data-12000="top:0%;" data-13000="top:0%;" data-14000="top:-100%;" data-9500="background:rgba(130,104,130,.5);" data-12000="background:rgba(130,104,130,.5);">
		<div class="easing">
			<div id="gform">
				<?php gravity_form(1, false, false, false, '', true); ?>
			</div>
		</div>
	</div>

<?php wp_footer(); ?>
<script>
var s = skrollr.init({
	edgeStrategy: 'set',
	easing: {
		inverted: function(p) {
			return 1-p;
		}
	}
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-1906067-35', 'cantbuymelove.org');
  ga('send', 'pageview');
</script>
</body>
</html>