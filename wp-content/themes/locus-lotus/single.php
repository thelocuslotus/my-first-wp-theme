<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Locus_Lotus
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
                        
                        the_post_navigation( array(		
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next &rarr;', 'locus-lotus' ) . '</span> ' .		
					'<span class="screen-reader-text">' . __( 'Next post:', 'locus-lotus' ) . '</span> ' .		
					'<span class="post-title">%title</span>',		
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '&larr; Previous', 'locus-lotus' ) . '</span> ' .		
					'<span class="screen-reader-text">' . __( 'Previous post:', 'locus-lotus' ) . '</span> ' .		
					'<span class="post-title">%title</span>',		
			) );		

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();