<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php /* <title><?php echo ( is_front_page() ? get_bloginfo('name') . ' | ' . get_bloginfo('description') : wp_title( '|', false ) ); ?></title> */ ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />

	<?php /* Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php */ ?>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<script src="//use.typekit.net/sov2tzu.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<div id="page">

		<header id="header" role="banner" class="clearfix">
			
			<div id="masthead" class="max">
				<h1 id="site-title" class="c2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php wp_nav_menu( array( 'theme_location' => 'socialbar', 'container_class' => 'socialbar' ) ); ?>
			</div><!-- end #masthead -->

			<nav id="navigation" role="navigation">
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'mekosh2015' ); ?>"><?php _e( 'Skip to content', 'mekosh2015' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'navbar', 'container_class' => 'navbar max' ) ); ?>
			</nav><!-- end #site-navigation -->

		</header><!-- end #header -->

		<div id="after-header" class="max"></div>

		<div id="intro-wrapper" class="max">
			<div id="intro">
				<?php if (is_front_page()) { ?>
				<h2 class="site-description"><?php echo get_option('extended_description'); ?></h2>
				<?php } /* else { ?>
				<h2><?php echo get_the_title( get_the_ID() ); ?></h2>
				<?php } */ ?>
			</div>
		</div>

		<div id="main" class="max">
