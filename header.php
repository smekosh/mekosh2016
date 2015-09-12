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
	<?php /* <title><?php wp_title( '|', true, 'right' ); ?></title> */ ?>
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

<?php //get_template_part( 'partials/metrics' ); ?>

	
	<div id="page">

		<header id="header">
			
			<div id="masthead">
				<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php /*bloginfo( 'name' );*/ ?>mekosh</a></h1>
				<div id="menu-toggle">Menu <i class="fa fa-bars"></i></div>
			</div><!-- end #masthead -->

			<nav id="navigation" class="clearfix">
				<?php wp_nav_menu( array( 'theme_location' => 'navbar', 'container_class' => 'navbar' ) ); ?>
			</nav><!-- end #navigation -->

			<div id="social">
				<?php wp_nav_menu( array( 'theme_location' => 'socialbar', 'container_class' => 'socialbar' ) ); ?>
			</div><!-- end #social -->

		</header><!-- end #header -->

		

		<div id="main">
