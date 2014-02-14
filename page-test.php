<?php /* Template Name: Test */ ?>
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
	<div class="twelve">
		<div class="content">
			<main class="main" role="main">
				<?php the_content(); ?>
				<?php echo wp_stripe_form(); ?>
			</main>
		</div>
	</div>
	<footer class="footer" role="info">
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>