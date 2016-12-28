<?php
/**
 * The template used for displaying page content
 * template name: Links
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

		<ul class="links">
			<?php if( have_rows('lien') ): ?>
			<?php while ( have_rows('lien') ) : the_row(); ?>
				<li class="links__item">
					<a href="<?php the_sub_field('adresse'); ?>" title="Vers le site de <?php the_sub_field('nom'); ?> " class="links__item--url">
						<?php the_sub_field('nom'); ?>
					</a>
				</li>
			<?php endwhile; endif; ?>
		</ul>

		<p class="article__subtitle">Numéros de téléphone utiles</p>

		<ul class="links">
			<?php if( have_rows('numeros') ): ?>
			<?php while ( have_rows('numeros') ) : the_row(); ?>
					<li class="links__item">
						<?php the_sub_field('numero'); ?> -
						<a href="<?php the_sub_field('url'); ?>" title="Vers le site de <?php the_sub_field('nom'); ?> " class="links__item--url">
							<?php the_sub_field('nom'); ?>
						</a>
					</li>

			<?php endwhile; endif; ?>
		</ul>

	</article>

</section>

<?php get_template_part( 'aside' ); ?>


<?php
	get_footer();
