<?php
/**
 * Template name: Team
 *
 */
get_header();
 ?>

 <section class="page clearfix">
 	<h2 class="sro">contenu principal du site</h2>

    <section class="section clearfix team">
		<h3 class="section__title" role="heading" aria-level="3"><?php the_title(); ?></h3>

		<div class="section__content">
		    <?php the_content(); ?>
		</div>

        <div class="team__list">
            <ul>
                <?php if( have_rows('membres') ): ?>
                    <?php while ( have_rows('membres') ) : the_row(); ?>
                        <li class="team__member">
                            <figure class="team__member--figure">
                                <?php $image = get_sub_field('photo'); ?>
                                <img src="<?php echo $image['url']; ?>" alt="Portrait de <?php the_sub_field('nom'); ?>" class="team__member--portrait" />
                            </figure>
                            <div class="team__member--infos">
                                <p class="team__member--name"><?php the_sub_field('nom'); ?></p>
                                <p class="team__member--function"><?php the_sub_field('fonction'); ?></p>
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
