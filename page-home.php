<?php /* Template Name: BML */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>
<body>
<div class="container">
	<div class="twelve columns">
		<div class="row clearfix">
			<p>&nbsp;</p>
		<div>
		<div class="row clearfix">
			<p>&nbsp;</p>
		<div>
		<div class="row clearfix">
		<div class="six columns alpha">
		<img src="<?php echo get_template_directory_uri(); ?>/img/bml_thermo.png" style="float:right;"/>
		</div>
		<div class="six columns omega">
		<div class="content">
			<main class="main" role="main">
				<div id="bml">
					<h3>September 27<sup>th</sup>, &nbsp;<span id="year">2014</span>.</h3>	
				</div>
				<div class="buy-love" style="margin:0 0 0 100px">
					<p>&nbsp;</p>
					<a id="inline" href="#buy-love"><button>Buy Some Love</button></a>
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
			</main>
		</div>
	</div>
	</div>
	<footer class="footer" role="info">
	</footer>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.min.js"></script>
<script>window.jQuery || document.write("<script src='<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.min.js'>\x3C/script>")</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
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