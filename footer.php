
		</div><!-- end #main -->

		
		<footer id="footer">
			<div id="footer-content">
				&copy; 2003 &ndash; <?php echo date('Y'); ?> Stephen Mekosh
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- end #page -->

	<?php wp_footer(); ?>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			
			$( '#menu-toggle' ).click(function() {
				$( '#navigation, #social' ).slideToggle( 400 );
			});

			$( window ).resize(function() {
				if ( $(window).width() >= 750 ) {
					$( '#navigation, #social' ).show();
				} else {
					$( '#navigation, #social' ).hide();
				}
			});



			// add Font Awesome icon before text label
			$( '#menu-main-nav li' ).each(function(index) {
				$(this).find('a').prepend( '<i class="fa fa-lg fa-' + $(this).attr('class').split(' ')[0] + '"></i>' );
			});

			// replace text label with Font Awesome icon
			$( '#menu-social-networks li' ).each(function(index) {
				$(this).find('a').html( '<i class="fa fa-lg fa-' + $(this).attr('class').split(' ')[0] + '"></i>' );
			});
			
		});

	</script>

</body>
</html>