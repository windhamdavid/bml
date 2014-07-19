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
<div id="skrollr-body">
	<div id="bg1" data-0="display:none;" data-1000="display:block;background-position:0px 0px;" data-end="background-position:-500px -10000px;"></div>
	<div id="bg2" data-0="display:none;" data-5000="display:block;background-position:0px 0px;" data-end="background-position:-500px -8000px;"></div>
	<div id="bg3" data-0="display:none;" data-10000="display:block;background-position:0px 0px;" data-end="background-position:-500px -6000px;"></div>
	<div id="progress" data-0="width:0%;background:rgb(130, 104, 130);" data-end="width:100%;background:rgb(103, 130, 91);"></div>
	
	<div id="menu" data-0="position:static;display:none;" data-top-top="position:fixed;bottom:30px;">
		<a href="#story" data-menu-top="300">Story</a>
		<a href="#trip" data-menu-top="500">Trip</a>
		<a href="#vows" data-menu-top="800">Vows</a>
		<a href="#message" data-menu-top="1200">Message</a>
	</div>
	
	<div id="intro" data-0="display:block;" data-1400="display:none;" >
		<div class="intro_ease" data-400="left:90%" data-1500="left:0%;">
			<h4 class="vibes">You're cordially invited</h4>
			<h4 class="vibes">to celebrate the marriage of </h4>
			<h1 class="vibes">David A. Windham</h1>
			<h3 class="vibes">and</h3>
			<h1 class="vibes">Ginny L. Gast</h1><br />
			<h4 class="vibes">September 27th, 2014</h4>
		</div>
	</div>
	<div id="intro2" data-0="display:none;" data-1400="display:block;" data-800="left:100%" data-1500="left:77%;" data-2400="display:none;">
		<div class="intro_ease">
			<h4 class="vibes">No need to dress up, no need to wrap gifts.</h4>
			<h4 class="vibes">Just stay at home, and send us a good wish.</h4>
			<h4 class="vibes">We appreciate your love and cheer.</h4>
			<h4 class="vibes">But we're off on a journey have no fear.</h4>
		</div>
	</div>
	
	<div id="story" data-0="display:none;" data-2400="display:block;" data-10000="display:none;">
		<div id="story_ease" data-2400="left:100%" data-7400="left:30%;">
				<h2>Story</h2>
				<p>About 10 years ago a guy named Dave met a girl named Ginny.<br />
				Soon after, the two would take a trip to New York City.</p>
				
				<p>Days and weeks and many more,<br />
				The couple found love they could not ignore.<br />
				They dwelled in cities, the trees, and farm,<br />
				Each would have its newfound charm.</p>
				
				<p>And then one day came when they decided to marry.<br />
				They had made it 10 years, after all, it’s not so scary.<br />
				Money can’t buy love, this they knew.<br />
				But it sure could pay for a trip, to start anew.</p>
				
				<p>So tip your hat to these big-hearted.<br />
				Who are embarking on a journey to where it all started.<br />
				To jumpstart another decade, with its ups and downs.<br />
				New experiences and perhaps new towns.</p>
				
				<p>But have no worries for this one of many couples.<br />
				Because they’re a good team and can tackle life’s troubles.<br />
				For it is their love that will make them last.<br />
				This guy named Windham and girl named Gast.</p>
		</div>
	</div>
	
	<div id="trip" data-0="display:none;" data-10000="display:block;" data-10000="background:rgba(0,0,0,0);color[swing]:rgb(0,0,0);" data-10500="background:rgba(0,0,0,1);color:rgb(255,255,255);" data-20000="display:none;">
		<div class="trip_ease" data-10000="left:50%" data-16000="left:30%;">
			<h2>Trip</h2>
			<p>Nulla scelerisque dic</p>
		</div>
	</div>
	
	<div id="vows" data-0="display:none;" data-20000="display:block;">
		<div id="story_ease" data-20000="left:100%" data-26000="left:10%;">
			<div class="row clearfix">
				<div id="bml" data-0="position:static;" data-top-top="position:fixed;top:0;right:0" data-edge-strategy="set">
					<h3>September 27<sup>th</sup>, &nbsp;<span id="year">2014</span>.</h3>	
				</div>
				<div class="buy-love" style="margin:0 0 0 100px" data-0="position:static;" data-top-top="position:fixed;top:0;right:15%" data-edge-strategy="set">
					<p>&nbsp;</p>
					<a id="inline" href="#buy-love"><button>Buy Some Love</button></a>
				</div>
			<div>
		</div>
	</div>
	
	<div style="display:none">
		<div id="buy-love">
			<div id="wp-stripe-wrap">
				<form id="wp-stripe-payment-form">
				<input type="hidden" name="action" value="wp_stripe_charge_initiate" />
				<input type="hidden" name="nonce" value="bd39ddb4d5" />
				<div class="wp-stripe-details">
				    <div class="wp-stripe-notification wp-stripe-failure payment-errors" style="display:none"></div>
				    <div class="stripe-row"><input type="text" name="wp_stripe_name" class="wp-stripe-name" placeholder="Name *" autofocus required /></div>
				    <div class="stripe-row"><input type="email" name="wp_stripe_email" class="wp-stripe-email" placeholder="E-mail" /></div>
				    <div class="stripe-row"><textarea name="wp_stripe_comment" class="wp-stripe-comment" placeholder="Comments?"></textarea></div>
				</div>
				<div class="wp-stripe-card">
				    <div class="stripe-row"><input type="text" name="wp_stripe_amount" autocomplete="off" class="wp-stripe-card-amount" id="wp-stripe-card-amount" placeholder="Amount (USD) *" required /></div>
				    <div class="stripe-row"><input type="text" autocomplete="off" class="card-number" placeholder="Card Number *" required /></div>
				    <div class="stripe-row">
				        <div class="stripe-row-left"><input type="text" autocomplete="off" class="card-cvc" placeholder="CVC Number *" maxlength="4" required /></div>
				        <div class="stripe-row-right">
				            <span class="stripe-expiry">EXP</span>
				            <select class="card-expiry-month">
				                <option value="1">01</option>
				                <option value="2">02</option>
				                <option value="3">03</option>
				                <option value="4">04</option>
				                <option value="5">05</option>
				                <option value="6">06</option>
				                <option value="7">07</option>
				                <option value="8">08</option>
				                <option value="9">09</option>
				                <option value="10">10</option>
				                <option value="11">11</option>
				                <option value="12">12</option>
				            </select>
				            <span></span>
				            <select class="card-expiry-year">
				            <option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option>
							</select>
				        </div>
				    </div>
				    </div>
				    <div class="stripe-row">
				        <input type="checkbox" name="wp_stripe_public" value="public" checked="checked" /> <label class="public">share your comments on our event page
				    </div>
				    <div style="clear:both"></div>
				    <input type="hidden" name="wp_stripe_form" value="1"/>
				    <button type="submit" class="stripe-submit-button">Buy</button>
				    <div class="stripe-spinner"></div>
				</form>
			</div>
		</div>
	</div>
	
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.menu.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
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