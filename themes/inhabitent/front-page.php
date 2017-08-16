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

		<?php
		$args = array( 
			'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
			$journal_posts = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>
		
			<?php the_date(); ?>
			<?php comments_number ( '0 Comments', '1 Comment', '% Comments' ); ?>
			<h2><a href="<?php the_permalink(); ?>">
			<?php the_title(); ?></a></h2>  
	
		<?php endforeach; wp_reset_postdata(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

