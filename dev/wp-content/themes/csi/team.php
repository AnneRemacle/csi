<?php
/**
 * Template name: Team
 *
 */
get_header();
 ?>

 <section class="page clearfix">
 	<h2 class="sro">contenu principal du site</h2>

    <section class="article clearfix team">
		<h3 class="article__title" role="heading" aria-level="3"><?php the_title(); ?></h3>

		<?php the_content(); ?>

        <div class="team__list">
            <ul>
                <?php if( have_rows('membres') ): ?>
                    <?php while ( have_rows('membres') ) : the_row(); ?>
                        <li class="team__member">
                            <figure class="team__member--figure">
                                <?php $image = get_sub_field('photo'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="Portrait de <?php the_sub_field('nom'); ?>" class="team__member--portrait" />
                            </figure>
                            <p class="team__member--name"><?php the_sub_field('nom'); ?></p>
                            <p class="team__member--function"><?php the_sub_field('fonction'); ?></p>
                            <div class="team__member--see">
                                <span class="team__member--link">Voir son horaire</span>
                                <div class="team__member--schedule">
                                    <?php the_sub_field('horaires'); ?>
                                </div>
                            </div>

                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
	</section>

 <?php
    get_footer();
