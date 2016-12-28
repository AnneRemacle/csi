<?php
/**
 * The default template for displaying aside content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 *
 *
 */
?>

<?php if(is_front_page()): ?>
	<aside class="aside clearfix">
		<h2 class="aside__title">Actualités</h2>
<?php else: ?>
	<aside class="aside-top clearfix">
		<h2 class="aside-top__title">Actualités</h2>
<?php endif; ?>

		<?php $posts = new WP_Query( [ 'post_type' => 'actualite', 'number' => 3, 'order' => 'DESC' ] ); ?>
			    <?php if ( $posts -> have_posts() ):
			        while ( $posts -> have_posts() ):
			            $posts -> the_post(); ?>

			        <div class="actu">
						<date class="actu__title"><?php the_date( 'l j F' ); ?></date>
						<p class="actu__text">
							<?php the_content(); ?>
						</p>
					</div>

				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>

	</aside>
