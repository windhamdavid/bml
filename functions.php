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


function bml_scripts() {
	//wp_enqueue_style( 'bml-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bml', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'bml2', get_template_directory_uri() . '/css/stripe.css');
	//wp_enqueue_script( 'bscript', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
	//wp_enqueue_script( 'binit', get_template_directory_uri() . '/js/init.js', array(), '1.0.0', true );
	//wp_enqueue_script( 'bml-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	//wp_enqueue_script( 'bml-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'bml-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'bml_scripts' );


require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
//require get_template_directory() . '/inc/jetpack.php';
