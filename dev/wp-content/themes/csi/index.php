<?php
/**
 * The main template file
 * Template name: Homepage
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage CSI
 *
 */
get_header();
 ?>

<section class=" clearfix">
	<h2 class="sro">Contenu principal du site</h2>

	<section class="section">
	    <h3 class="section__title"><?php the_title(); ?></h3>
        <div class="section__content">
            <?php the_content(); ?>
        </div>
	</section>

    <div class="section__hero">
        <figure class="section__hero--figure">
            <img src="<?php echo get_template_directory_uri() . '/build/assets/images/doctor.jpg';?>" class="section__hero--text">
        </figure>
        <p class="section__hero--title">Des soins de qualité pour tous</p>
    </div>

    <section class="section">
        <h3 class="section__title"><?php the_field("newsletter_titre"); ?></h3>
        <div class="section__content">
            <?php the_field('newsletter_pub'); ?>
        </div>
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
            <form class="news__form" action="//anne-remacle.us15.list-manage.com/subscribe/post?u=06e8994cfe5cc4d170a29846a&amp;id=45f540f195" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                <label for="mce-EMAIL" class="news__label">Votre adresse email</label>
                <input type="email" value="" name="EMAIL" class="email news__input" id="mce-EMAIL" placeholder="ex: jean@dupont.be" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                <div class="clear news__button"><input type="submit" value="Je m’inscris!" name="subscribe" id="mc-embedded-subscribe" class="news__submit"></div>
                <div aria-hidden="true"><input type="hidden" name="b_06e8994cfe5cc4d170a29846a_45f540f195" tabindex="-1" value=""></div>
                </div>
                <p class="news__small">Vous pourrez vous désinscrire de cette newsletter à tout moment</p>
            </form>
        </div>
        <!--End mc_embed_signup-->
    </section>


</section>

<?php
	get_footer();
