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
			
<section class="shop-container">
	<h2 class="shop-heading">shop stuff</h2>

	<?php
		$terms = get_terms( 'product-type' );
		if ( !empty( $terms ) && !is_wp_error ( $terms )) : 
	?>
	<div class="product-type-grid">	
	<?php foreach( $terms as $term ) : ?>
			<div class="product-type-box">
				<img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';  ?>">
				<p><?php echo $term->description; ?></p>
				<a class="product-type-button" href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> stuff</a>
			</div>
	<?php endforeach; ?>
	</div>
	<?php endif;?>
</section>
		
		
			<section class="latest-posts">
			<div class="journal-container">
				<h2>Inhabitent Journal</h2>
					
		<?php
		$args = array( 
			'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
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
		</section>
		<section class="latest-adventures"></div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

