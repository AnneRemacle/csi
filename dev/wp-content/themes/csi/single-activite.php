<?php
/**
 * Template Name: Single Activite
 *
 */

get_header(); ?>

<section class="single clearfix">
	<h2 class="sro">contenu principal du site</h2>

	<article class="article clearfix">
		<h3 class="article__title" role="heading" aria-level="3"><?php the_title(); ?></h3>

		<?php the_field('description'); ?>
	</article>

	<?php
		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav next" aria-hidden="true">' . __( 'Article Suivant&nbsp;:', 'csi' ) . '</span> ' .
				'<span class="sro">' . __( 'Article suivant:', 'csi' ) . '</span> ' .
				'<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav previous" aria-hidden="true">' . __( 'Article précédent&nbsp;:', 'csi' ) . '</span> ' .
				'<span class="sro">' . __( 'Article précédent:', 'csi' ) . '</span> ' .
				'<span class="post-title">%title</span>',
		) );
	?>
	

</section>




<?php get_footer(); ?>
