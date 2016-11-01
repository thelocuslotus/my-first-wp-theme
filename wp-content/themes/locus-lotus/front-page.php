<head>
    <meta name="google-site-verification" content="VjHXqgnhDJBhJVqANo5A7oTeayV74k6Ri9r41IrWYRs" />
</head>
<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
            <img src="http://thelocuslotus.wpengine.com/wp-content/uploads/2016/09/Devils-Courthouse.png">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
                    <div class="image"></div>
				<h1><?php the_title(); ?></h1>
                                
                                <div class="text">
                                    <?php the_content(); ?>
                                </div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>