<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
		
		
		<div class="card">
			
			<h2 class="card-title"><span class="card-title-inner">Search mekosh.org</span></h2>
			<?php get_search_form(); ?>

		</div><!-- end .card -->



		<div class="card">

			<h2 class="card-title"><span class="card-title-inner">Archives by Month</span></h2>
			<ul id="date-archive">
				<?php compact_archive('block', '<li>', '</li>'); ?>
			</ul>

		</div><!-- end .card -->



		<div class="card">
			
			<h2 class="card-title"><span class="card-title-inner">Last 20 Posts</span></h2>
			<ul>
				<?php wp_get_archives('type=postbypost&limit=20&format=html'); ?> 
			</ul>
			
			
		</div><!-- end .card -->
		
		
		
		<div class="card">
					
			<h2 class="card-title"><span class="card-title-inner">Archives by Subject</span></h2>
			
			<div class="textwidget">
				
				<ul id="cat-archive">
					<?php
					wp_list_categories('title_li=&show_count=1');
					//wp_list_categories('show_last_updated=1&show_count=1&title_li=&feed_image=/wp-content/themes/polaroid/images/silk/feed.png');
					?>
				</ul>
				
			</div>

		</div><!-- end .card -->
		
		
<?php get_footer(); ?>
