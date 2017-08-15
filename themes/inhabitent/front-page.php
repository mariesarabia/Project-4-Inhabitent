<?php
/** 
* Template Name: Front-Page
*
* @package Inhabitent_Theme
*/

get_header(); ?>

            

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="hero">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" class="logo" alt="Inhabitent full logo";>
            </section>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; // End of the loop. ?>
            
           

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>