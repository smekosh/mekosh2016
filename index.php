<?php 

get_header();

if ( have_posts() ) {
?>

<?php if ( is_archive() || is_home() ) { ?>
	<header class="card"><h2 class="page-title"><span class="card-title-inner"><?php 
		if ( is_archive() ) {
			the_archive_title();
			//single_cat_title();
		} elseif ( is_home() ) {
			single_post_title();
		}
	?></span></h2></header>
<?php } ?>


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
		<div class="card-footer-item">
			<meta itemprop="datePublished" content="<?php echo get_the_date( 'c' ); ?>" />
			<time class="pub-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><i class="fa fa-lg fa-calendar" title="Published on"></i> <?php if ( !is_single() ) { ?><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>"><?php } ?><?php echo get_the_date(); ?><?php if ( !is_single() ) { ?></a><?php } ?></time>
		</div>
		<div class="card-footer-item">
			<i class="fa fa-lg fa-tag"></i> <?php the_category( ', ' ); ?>
		</div>
	</footer>
	<?php } ?>

</article><!-- end .card -->


<?php
endwhile;
} // end if have_posts()

get_footer();

?>