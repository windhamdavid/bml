<?php /* Template Name: Form */ ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="David + Ginny">
<title>Wish Us Well | D+G</title>
<?php wp_head(); ?>
</head>
<body>
<div class="container">
	<div class="column sixteen">
		<div class="form_header">
			<h5 class="vibes">&#10087; &nbsp; David A. Windham&nbsp;  &amp; &nbsp; Ginny L. Gast &nbsp; &#10087;</h5>
			<h5 class="cardo">The Twenty-Seventh Of September, Two Thousand Fourteen</h4><br />
			<img src="../wp-content/themes/bml/img/swirl.png" width="100">
			
		</div>
		<div id="gform">
			<?php gravity_form(1, false, false, false, '', true); ?>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
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