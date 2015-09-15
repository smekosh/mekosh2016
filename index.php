<?php 

get_header();

if ( have_posts() ) {
?>

<?php if ( is_category() ) { ?>
	<header class="card"><h2 class="page-title"><span class="card-title-inner"><?php single_cat_title(); ?></span></h2></header>
<?php } /* elseif () { ?>
	<header class="card"><h2 class="page-title"><span class="card-title-inner"><?php post_type_archive_title(); ?></span></h2></header>
} */ ?>


<?php while ( have_posts() ) : the_post(); ?>



<article  id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> itemscope itemtype="http://schema.org/BlogPosting">
	
	<header class="card-header">
	<?php if ( is_page() ) { ?>
		<h2 class="page-title"><span class="card-title-inner"><?php the_title(); ?></span></h2>
	<?php } elseif ( is_single() ) { ?>
		<h2 itemprop="headline"><span class="card-title-inner"><?php the_title(); ?></span></h2>
	<?php } else { ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="card-title-inner"><?php the_title(); ?></span></a></h2>
	<?php } ?>
	</header>
	
	<div class="card-content" itemprop="articleBody">
		<?php the_content(); ?>
	</div>
	
	<?php if ( !is_page() ) { ?>
	<footer class="card-footer">
		<meta itemprop="datePublished" content="<?php echo get_the_date( 'c' ); ?>" />
		<time class="pub-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><i class="fa fa-calendar" title="Published on"></i> <?php echo get_the_date(); ?></time>
		<i class="fa fa-tag"></i> <?php the_category( ', ' ); ?>
	</footer>
	<?php } ?>

</article><!-- end .card -->


<?php
endwhile;
} // end if have_posts()

get_footer();

?>