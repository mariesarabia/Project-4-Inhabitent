<?php
/** 
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
						<p><a class="product-type-button" href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?> stuff</a></p>
				</div>
					<?php endforeach; ?>
				</div>
					<?php endif;?>
			</section> <!-- #shop container -->
		
		
			<section class="journal-container">
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
							<a class="read-button" href="<?php the_permalink(); ?>">Read Entry</a>
					</li>
							<?php endforeach; wp_reset_postdata(); ?>
				</ul>
						
			</section><!-- journal-container -->

			<section class="adventures-container">
				<h2>Latest Adventures</h2>
				<div class="adventures">	
					<div class="canoe">
						<div class="adventures-info">
							<h3>Getting Back to Nature in a Canoe<a href="<?php the_permalink(); ?>"></a></h3>
							<a class="read-button-adv" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>

				<div class="adventure-box-2">
					<div class="friends">
						<div class="adventures-info">
							<h3>A Night with Friends at the Beach<a href="<?php the_permalink(); ?>"></a></h3>
							<a class="read-button-adv" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>

					<div class="mountain">
						<div class="adventures-info">
							<h3>Taking in the View at Big Mountain<a href="<?php the_permalink(); ?>"></a></h3>
							<a class="read-button-adv" href="<?php the_permalink(); ?>">Read More</a>
						</div>
					</div>

					<div class="night-sky">
						<div class="adventures-info">
							<h3>Star-Gazing at the Night Sky<a href="<?php the_permalink(); ?>"></a></h3>
							<a class="read-button-adv" href="<?php the_permalink(); ?>">Read More</a>
						<div>
					</div>
				</div>
			</section>


			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

