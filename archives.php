<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
		
		
		<div id="c1">
			
			
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			
			
			<h2>Archives by Month:</h2>
			<ul id="date-archive">
				<?php compact_archive('block', '<li>', '</li>'); ?>
			</ul>
			
			
			<h2>Last 20 Posts</h2>
			<ul>
				<?php wp_get_archives('type=postbypost&limit=20&format=html'); ?> 
			</ul>
			
			
		</div><!-- end #c1 -->
		
		<div id="c2">&nbsp;</div>
		
		<div id="c3">
			
			<ul>
				<li>
					
					<h2>Archives by Subject:</h2>
					
					<div class="textwidget">
						
						<ul id="cat-archive">
							<?php
							wp_list_categories('title_li=&show_count=1');
							//wp_list_categories('show_last_updated=1&show_count=1&title_li=&feed_image=/wp-content/themes/polaroid/images/silk/feed.png');
							?>
						</ul>
						
					</div>
					
				</li>
				
			</ul>
			
		</div>
		
		
<?php get_footer(); ?>
