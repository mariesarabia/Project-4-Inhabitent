<?php

get_header(); ?>

<?php
		$args = array( 
			'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
			$journal_posts = get_posts( $args ); // returns an array of posts
		?>

							<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
							
		
							<div class="thumbnail">
								<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
							</div>
							<div class="post-info">
								<span class="publication-date"><?php the_date(); ?></span> / <?php comments_number ( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php the_author(); ?>  
								<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
							<a class="read-button" href="http://tent.academy.red/2016/04/van-camping-photo-contest/">Read More</a>
				
				
					
								
					<?php endforeach; wp_reset_postdata(); ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>