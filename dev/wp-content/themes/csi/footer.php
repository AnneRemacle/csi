<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<footer class="footer clearfix">
	<nav class="footer__menu">
		<h2 class="sro">Navigation secondaire</h2>
		<?php wp_nav_menu( array(
			'menu' => 'footer',
			'theme-location' => 'footer' ) ); ?>
		<?php wp_reset_query(); ?>
	</nav>
	<div class="footer__coord coord">
		<div class="coord__left">
			<p class="coord__address">
				<?php echo get_field('adresse', 'option'); ?>
			</p>
		</div>
		<div class="coord__right">
			<p class="coord__data">Tél&nbsp;: <?php echo get_field('telephone', 'option'); ?></p>
			<p class="coord__data">Email&nbsp;: <?php echo get_field('email', 'option'); ?></p>
		</div>
	</div>
	<div class="footer__news">
		<div class="footer__news--text">
			<?php echo get_field('intro_newsletter', 'option'); ?>
		</div>
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
		<form class="footer__form" action="//anne-remacle.us15.list-manage.com/subscribe/post?u=06e8994cfe5cc4d170a29846a&amp;id=45f540f195" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
			<label for="mce-EMAIL" class="footer__label">Email</label>
			<input type="email" value="" name="EMAIL" class="email footer__input" id="mce-EMAIL" placeholder="ex: jean@dupont.be" required>
		    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

		    <div class="clear footer__button"><input type="submit" value="OK" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
			<div aria-hidden="true"><input type="hidden" name="b_06e8994cfe5cc4d170a29846a_45f540f195" tabindex="-1" value=""></div>
		    </div>
		</form>
		</div>

		<!--End mc_embed_signup-->
	</div>
</footer>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClfGzs3JWygOHF-J3GQqJke__tElojigQ"></script>

</script>

</script>
</body>
</html>
