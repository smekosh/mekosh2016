<?php

function mekosh2016_theme_setup () {
	
	add_theme_support( 'title-tag' );

	register_nav_menu( 'navbar', __( 'Nav Bar', 'mekosh2016' ));
	register_nav_menu( 'socialbar', __( 'Social Bar', 'mekosh2016' ));
}

add_action( 'init', 'mekosh2016_theme_setup' );




/*
register_nav_menu( 'primary', 'Primary Menu' );



function sm13_scripts_styles() {
	wp_enqueue_style( 'sm13-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'typekit', '//use.typekit.net/zaa7soi.js', false );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js' );
	wp_enqueue_script( 'sm13_main_js', get_template_directory_uri() . '/js/main.js', array('typekit', 'jquery') );
}

add_action( 'wp_enqueue_scripts', 'sm13_scripts_styles' );



function extended_description() {
	register_setting( 'general', 'extended_description', 'esc_attr' );
	
	add_settings_field(
		'extended_description',
		'Extended Description',
		'extended_description_html',
		'general'
	);
}

function extended_description_html() {
	$value = get_option( 'extended_description', '' );
	echo '<textarea id="extended_description" name="extended_description" rows="4" cols="60">' . $value . '</textarea>';
}

add_action( 'admin_init', 'extended_description' );
*/
