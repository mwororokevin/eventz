<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package eventZ
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container">
		<div class="row">
			<div class="footer-nav col-md-6">
				<?php wp_nav_menu( array( 'eventz' => 'secondary' )); ?>
			</div>
			<div class="theme-info col-md-6">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'eventz' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( '', 'eventz' ), 'WordPress' );
					// Proudly powered by %s
					?>
				</a>
				<!-- <span class="sep"> | </span> -->
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s', 'eventz' ), 'eventz', '<a href="http://mwororokevin.com">mwororokevin.com</a>' );
					?>
			</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
