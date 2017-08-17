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
				
		
			<section class="latest-posts">
			<div class="container">
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
						
		</div> <!-- #container -->
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

