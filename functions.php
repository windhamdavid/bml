<?php

if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'bml_setup' ) ) :

function bml_setup() {
	require( get_template_directory() . '/inc/tweaks.php' );
	
	load_theme_textdomain( 'bml', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'bml' ), ) );
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	add_theme_support( 'custom-background', apply_filters( 'bml_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; 
add_action( 'after_setup_theme', 'bml_setup' );


add_filter('show_admin_bar', '__return_false');

function bml_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bml' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'bml_widgets_init' );

add_action( 'wp_enqueue_scripts', 'bml_scripts' );
function bml_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'bml', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'bml2', get_template_directory_uri() . '/css/stripe.css');
	wp_enqueue_script( 'bmlcountdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array(), '1.0.0', true);
	//wp_enqueue_script( 'bmlscript', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bmlinit', get_template_directory_uri() . '/js/init.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bmlskroll', get_template_directory_uri() . '/js/skrollr.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bmlskrollmenu', get_template_directory_uri() . '/js/skrollr.menu.min.js', array(), '1.0.0', true );
    
	if( is_page('wish') )
    {
		
	}
	
	if( is_front_page() )
    {
		

    }
}
