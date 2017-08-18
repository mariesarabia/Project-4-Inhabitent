

<?php
/**
 * The main template file.
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


















<!-- <?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		$args = array( 
			'numberposts' => 12, 'order'=> 'DESC', 'orderby' => 'date' );
			$journal_posts = get_posts( $args ); // returns an array of posts
		?>
		<ul>

							<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
							
						<li>
							<div class="thumbnail">
								<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
							</div>
							<div class="post-info">
								<span class="publication-date"><?php the_date(); ?></span> / <?php comments_number ( '0 Comments', '1 Comment', '% Comments' ); ?>
								<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								</div>
								<a class="read-button" href="http://tent.academy.red/2016/04/van-camping-photo-contest/">Read Entry</a>
						</li>
				
					
								
					<?php endforeach; wp_reset_postdata(); ?>
					</ul>
						
		</div> <!-- journal-container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?> -->