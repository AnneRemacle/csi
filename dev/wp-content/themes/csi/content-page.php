<?php
/**
 * The template used for displaying page content
 * template name: Content page
 *
 *
 *
 */ get_header();
?>
<section class="content clearfix">
	<h2 class="sro">contenu principal du site</h2>

	<article class="article clearfix">
		<h3 class="article__title" role="heading" aria-level="3"><?php the_title(); ?></h3>

		<?php the_content(); ?>
	</article>

</section>

<?php get_template_part( 'aside' ); ?>

<?php
	get_footer();
