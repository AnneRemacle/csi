<?php
/**
 * Template name: Activités
 *
 */
get_header();
 ?>

 <section class="content clearfix">
 	<h2 class="sro">contenu principal du site</h2>

 	<article class="article clearfix">
 		<h3 class="article__title" role="heading" aria-level="3"><?php the_title(); ?></h3>

 		<?php the_content(); ?>
 	</article>

    <article class="last-activity">
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

    <article class="activities">
        <h4 class="activities__section">Toutes les activités</h4>
        <ul class="activities__list">
            <?php $posts = new WP_Query( [ 'orderby' => 'date', 'order' => 'DESC', 'post_type' => 'activite' ] ); ?>
            <?php if ( $posts -> have_posts() ):
                while ( $posts -> have_posts() ):
                    $posts -> the_post(); ?>

                    <li class="activities__single">
                        <div class="activities__container">
                            <?php $image = get_field('image'); ?>
                            <img src="<?php echo $image['url']; ?>" alt="" class="activities__img">
                        </div>
                        <div class="activities__info">
                            <p class="activities__title"><?php the_title(); ?></p>
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

 <?php get_template_part( 'aside' ); ?>

 <?php
 	get_footer();
