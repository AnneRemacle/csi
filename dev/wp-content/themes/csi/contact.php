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

 	<article class="contact block clearfix">
 		<h3 class="sro" role="heading" aria-level="3">Nos coordonnées</h3>

        <p class="contact__name">
            <?php the_field('nom'); ?>
        </p>
        <div class="contact__address">
            <?php the_field('adresse'); ?>
        </div>
        <p class="contact__tel">
            Tel&nbsp;: <?php the_field('telephone'); ?>
        </p>
        <p class="contact__email">
            Email&nbsp;: <a class="contact__email--address" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
        </p>

 	</article>

    <article class="contact-form clearfix">
        <h3 class="article__title"><?php the_title(); ?></h3>
        <div class="form-container">
            <?php the_field('formulaire'); ?>
        </div>
    </article>

 </section>

 <?php
 	get_footer();
