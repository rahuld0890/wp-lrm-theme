<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LRM Static
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="col-sm-12">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lrm' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'lrm' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( '%1$s.', 'lrm' ), '<a href="https://leftrightmind.com">Left Right Mind</a>' );
						?>
				</div><!-- .site-info -->
			</div><!-- end col -->
		</div><!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<!-- Adding Bootstrap core JavaScript to the end of doc to load it faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.2.4.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<!-- Prachi -->

<!-- Bootstrap core JavaScript -->
<script src="/lrm/js/jquery.min.js"></script>
<script src="/lrm/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="/lrm/js/skrollr.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript">
	// skrollr.init({
	//     forceHeight: false
	// });
	AOS.init({
		duration: 2000,
	});
</script>
</body>
</html>