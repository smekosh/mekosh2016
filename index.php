<?php 

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<article  id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
	
	<?php if ( is_single() || is_page() ) { ?>
		<h2><span class="card-title-inner"><?php the_title(); ?></span></h2>
	<?php } else { ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="card-title-inner"><?php the_title(); ?></span></a></h2>
	<?php } ?>
	
	<?php the_content(); ?>
	
	<?php if ( !is_page() ) { ?>
	<div class="card-footer">
		<i class="fa fa-calendar"></i> <?php the_date(); ?>
		<i class="fa fa-tag"></i> <?php the_category( ', ' ); ?>
	</div>
	<?php } ?>

</article><!-- end .card -->


<?php
endwhile;
endif;

get_footer();

?>