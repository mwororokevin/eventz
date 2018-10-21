<?php
/**
 * Template Name: Galleries Page Template
 * Template Page Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package eventz
 */
get_header();
?>  
    
	<div id="primary" class="content-area container-fluid">
       
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer();
