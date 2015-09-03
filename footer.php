
		</div><!-- end #main -->

		<div class="push"></div>

	</div><!-- end #page -->

	<footer id="footer">
		<div id="footer-content" class="max">
			&copy; <?php echo date('Y'); ?> Stephen Mekosh, All rights reserved. <a href="http://wordpress.org/" title="Semantic Personal Publishing Platform">Proudly powered by WordPress</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php wp_footer(); ?>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			
			// var faBefore = '<span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa ';
			// var faAfter  = ' fa-stack-1x fa-inverse"></i></span>';

			var faBefore = '<i class="fa ';
			var faAfter  = '"></i>';
			
			$( '.nav-about a' ).prepend( faBefore + 'fa-user' + faAfter );
			$( '.nav-data a' ).prepend( faBefore + 'fa-align-left fa-rotate-270' + faAfter );
			$( '.nav-movies a' ).prepend( faBefore + 'fa-film' + faAfter );
			//$( '.nav-photos a' ).prepend( faBefore + 'fa-camera' + faAfter );
			$( '.nav-photos a' ).prepend( faBefore + 'fa-photo' + faAfter );
			//$( '.nav-words a' ).prepend( faBefore + 'fa-paragraph' + faAfter );
			$( '.nav-words a' ).prepend( faBefore + 'fa-pencil-square-o' + faAfter );
			$( '.nav-work a' ).prepend( faBefore + 'fa-code' + faAfter );

		});

	</script>

</body>
</html>