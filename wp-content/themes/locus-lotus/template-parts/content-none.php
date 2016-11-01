<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Locus_Lotus
 */

?>

<section class="<?php if ( is_404() ) { echo 'error-404'; } else { echo 'no-results'; } ?> not-found">
	<header class="page-header">
		<h1 class="page-title">
                    <?php 
                    if ( is_404() ) { esc_html_e( 'Page not available', 'locus-lotus' );
                    } else if (is_search() ) {
                        /* translators: %s = search query */
                        printf( esc_html__( 'Nothing found for &ldquo;%s&rdquo;', 'locus-lotus'), '<em>' . get_search_query() . '</em>' );
                    } else {
                        esc_html_e( 'Nothing Found', 'locus-lotus' );
                    }
                    ?>
                </h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'locus-lotus' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'locus-lotus' ); ?></p>
			<?php
				get_search_form(); ?>
                
                <?php elseif ( is_404() ) : ?>

                <p><?php esc_html_e( 'You seem to be lost. To find what you are looking for check out the most recent articles below or try a search:', 'locus-lotus' ); ?></p>
                <?php
                        get_search_form();                             

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'locus-lotus' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
        
        <?php
        if ( is_404() || is_search() ) {
            ?>
        <h1 class="page-title secondary-title"><?php esc_html_e( 'Most recent posts:', 'locus-lotus' ); ?></h1>
        <?php
        // Get the 6 latest posts
        $args = array(
            'posts_per_page' => 6
        );
        $latest_posts_query = new WP_Query( $args );
        // The loop
        if ( $latest_posts_query->have_posts() ) {
                while ( $latest_posts_query->have_posts() ) {
                    $latest_posts_query->the_post();
                    // Get the standard index page content
                    get_template_part( 'template-parts/content', get_post_format() );
                }
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        } //endif
         ?>
</section><!-- .no-results -->
