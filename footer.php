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

	<footer id="colophon" class="site-footer container-fluid">
		<div class="container">
			<div class="row">
				<div class="footer-nav col-md-12">
					<?php wp_nav_menu( array( 'eventz' => 'secondary' )); ?>
				</div>
			</div>
			<div class="row">
				<div class="theme-info col-md-12">
					<div class="theme-author-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'eventz' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( '', 'eventz' ), 'WordPress' );
							// Proudly powered by %s
							?>
						</a>
						<!-- <span class="sep"> | </span> -->
							<?php
							echo("&copy ");
							echo date("Y");
							echo(" - Light Madam Ltd Kenya. All Rights Reserved.");
							?>
					</div>
				</div>	
			</div>	
			<div class="row">
				<div class="theme-info col-md-12">
					<div class="theme-author-info">
						<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( ' Theme: %1$s Designed & Developed by %2$s', 'eventz' ), 'eventz', '<a href="http://mwororokevin.com" target="_blank">Kevin Mwororo</a>' );
						?>
					</div>
				</div>
			</div>		
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

 <!-- © 2018 - jaykiarie.com. All Rights Reserved. Designed & Developed by James Kiarie
 Theme: eventz by mwororokevin.com -->
 
<?php wp_footer(); ?>

</body>
</html>
