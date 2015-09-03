<?php 

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="card">
	<div class="inner">
	<?php
	echo '<h2>'.get_the_title().'</h2>';
	the_content();
	?>
	</div>
</div><!-- end .card -->

<?php
endwhile;
endif;

get_footer();

?>