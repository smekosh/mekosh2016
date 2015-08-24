<?php
/**
 * Template Name: Temp Home
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="//use.typekit.net/sov2tzu.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> style="max-width: 600px;">

	<?php
	// Start the Loop.
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>

	<h1><?php the_title(); ?></h1>

	<?php
		the_content();
	endwhile;
	endif;

wp_footer();

?>

</body>
</html>