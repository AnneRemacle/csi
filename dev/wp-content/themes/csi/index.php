<?php
/**
 * The main template file
 * Template name: Homepage
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage CSI
 *
 */
get_header();
 ?>

<section class="content clearfix">
	<h2 class="sro">Contenu principal du site</h2>

    <?php if( have_rows('article') ): ?>

	<?php while ( have_rows('article') ) : the_row(); ?>

		<article class="article clearfix">
			<h3 class="article__title">
				<?php the_sub_field('titre'); ?>
				<small class="article__title--small"><?php the_sub_field('sous-titre'); ?></small>
			</h3>
			<div class="article__text">
				<?php the_sub_field('texte'); ?>
			</div>
		</article>
	<?php endwhile; ?>
	<?php else: ?>
		<p>Pas de champ à afficher</p>
	<?php endif; ?>

</section>

<?php get_template_part( 'aside' ); ?>

<?php
	get_footer();
