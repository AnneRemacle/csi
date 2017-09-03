<?php
/**
 * Template name: Contact
 *
 */
get_header();
 ?>

 <section class="page clearfix">
 	<h2 class="sro">contenu principal du site</h2>

    <div class="map" id="gmap">
        <?php the_field('carte'); ?>
        <div class="marker" id="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
        </div>
    </div>

 	<article class=" section contact block clearfix">
 		<h3 class="sro" role="heading" aria-level="3">Nos coordonnées</h3>
        <p class="contact__name">
            <?php the_field('nom'); ?>
        </p>
        <div class="contact__address">
            <i class="fa fa-envelope icon"></i><?php the_field('adresse'); ?>
        </div>
        <p class="contact__tel">
            <i class="fa fa-phone icon"></i>Tel&nbsp;: <?php the_field('telephone'); ?>
        </p>
        <p class="contact__email">
            <i class="fa fa-paper-plane icon"></i>Email&nbsp;: <a class="contact__email--address" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
        </p>

 	</article>

    <article class="contact-form clearfix">
        <h3 class="section__title"><?php the_title(); ?></h3>
        <div class="form-container">
            <?php the_field('formulaire'); ?>
        </div>
    </article>

    <section class="section ">
        <h3 class="section__title">Nos horaires</h3>
        <div class="colored">
            <p>Voici un rappel de nos horaires d'ouverture, pendant lesquels nous sommes également joignables par téléphone</p>
            <ul class="section__content">
                <?php if( have_rows('heures', 'options') ): ?>
                    <?php while ( have_rows('heures', 'options') ) : the_row(); ?>
                        <li class="frame__content--item">
                            <span><?php the_sub_field('jour'); ?></span>&nbsp;: <span><?php the_sub_field('heures'); ?></span>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="frame__content--more"><?php the_field('complement', 'options'); ?></div>
        </div>

    </section>

 </section>

 <?php
 	get_footer();
