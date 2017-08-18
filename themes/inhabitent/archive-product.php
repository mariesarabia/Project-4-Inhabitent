<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<!-- <h1 class="page-title">Shop Stuff</h1> -->
			<ul><?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					$terms = get_terms( array(
						'taxonomy' => 'product-type',
						'hide_empty' => false,
					) );
					if ( ! empty( $terms ) && ! is_wp_error( $terms )) :
						foreach ( $terms as $term ) : ?>
						
					<li><a href="<?php echo get_term_link( $term ); ?>">
							<?php echo $term->name; ?>
					</a></li>
					
					<?php endforeach; 

					endif;
					
				?>
				</ul>
			</header><!-- .page-header -->

						
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
