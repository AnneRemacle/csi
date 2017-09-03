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

	<section class="section clearfix">
		<h3 class="section__title" role="heading" aria-level="3"><?php the_title(); ?></h3>

		<div class="section__content">
			<?php the_content(); ?>
		</div>

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
	</section>
	<section class="section">
		<h3 class="section__title">Numéros de téléphone utiles</h3>

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
	</section>


</section>




<?php
	get_footer();
