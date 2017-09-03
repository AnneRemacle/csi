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

	<article class="section clearfix article">
		<h3 class="section__title" role="heading" aria-level="3"><?php the_title(); ?></h3>
		<div class="section__content">
			<?php the_content(); ?>
		</div>

	</article>

</section>



<?php
	get_footer();
