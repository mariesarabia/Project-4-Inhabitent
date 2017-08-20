<?php
/**
 * Template part for displaying product posts on the archive loop.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-header">
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'large' ); ?>
		</a>
	<?php endif; ?>
</div><!-- entry-header -->

<div class="entry-content">
	<ul class="leaders">
		<li>
			<?php the_title( '<span><h2 class="entry-title">' , '</h2></span>' ); ?>
			<span><?php echo CFS()->get( 'price' ); ?></span>
		</li>
	</ul><!-- leaders -->
</div><!-- entry-content -->
</article><!-- #post-## -->