<?php?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="David + Ginny">
<title>D+G (Can't Buy Me Love)</title>
<?php wp_head(); ?>
</head>
<body>
<div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile;?>
</div>
<?php wp_footer(); ?>
</body>
</html>