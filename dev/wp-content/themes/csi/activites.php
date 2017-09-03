<?php
/**
 * Template name: Activités
 *
 */
get_header();
 ?>

 <section class="content clearfix">
 	<h2 class="sro">contenu principal du site</h2>

 	<article class="section clearfix">
 		<h3 class="section__title" role="heading" aria-level="3"><?php the_title(); ?></h3>

 		<div class="section__content">
 		    <?php the_content(); ?>
 		</div>
 	</article>

    <article class="last-activity section">
        <?php $posts = new WP_Query( [ 'orderby' => 'date', 'order' => 'DESC', 'showposts' => 1, 'post_type' => 'activite' ] ); ?>
        <?php if ( $posts -> have_posts() ):
            while ( $posts -> have_posts() ):
                $posts -> the_post(); ?>

                <p class="last-activity__date">
                    <?php the_field('date'); ?>
                </p>
                <h3 class="last-activity__title"><?php the_title(); ?></h3>
                <div class="last-activity__content">
                    <?php the_field('description'); ?>
                </div>

        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
    </article>

    <article class="activities section">
        <h4 class="activities__section">Toutes les activités</h4>
        <ul class="activities__list">
            <?php $posts = new WP_Query( [ 'orderby' => 'date', 'order' => 'DESC', 'post_type' => 'activite' ] ); ?>
            <?php if ( $posts -> have_posts() ):
                while ( $posts -> have_posts() ):
                    $posts -> the_post(); ?>

                    <li class="activities__single">
                        <a href="<?php the_permalink(); ?>" title="Lire plus d'informations sur <?php the_title(); ?>" class="activities__container">
                            <?php $image = get_field('image'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="" class="activities__img">
                        </a>
                        <div class="activities__info">
                            <a href="<?php the_permalink(); ?>" title="Lire plus d'informations sur <?php the_title(); ?>" class="activities__title"><?php the_title(); ?></a>
                            <p class="activities__date"><?php the_field('date'); ?></p>
                            <div class="activities__description">
                                <?php the_activity_excerpt(); ?>…
                                <a href="<?php the_permalink(); ?>" class="activities__all">
                                    Plus d'informations <span class="sro">sur l'acvitité <?php the_title(); ?></span>
                                </a>
                            </div>
                        </div>
                    </li>

            <?php endwhile; endif; ?>

        </ul>

        <?php the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( 'Page précédente', 'csi' ),
            'next_text' => __( 'Page suivante', 'csi' ),
            'posts_per_page' => 2,
        ) ) ?>
        <?php wp_reset_query(); ?>
    </article>

 </section>



 <?php
 	get_footer();
