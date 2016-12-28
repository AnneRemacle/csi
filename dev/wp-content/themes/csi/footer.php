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
		<?php echo get_field('formulaire', 'option'); ?>
		<!-- <form action="" method="POST" class="footer__form">
			<label for="email" class="sro">Votre email</label>
			<input type="email" class="footer__form--input" name="email" id="email" placeholder="ex.: jean.dupont@mail.com" />
			<input type="button" class="footer__form--button" value="OK" />
		</form> -->
	</div>
</footer>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClfGzs3JWygOHF-J3GQqJke__tElojigQ"></script>

</script>

</script>
</body>
</html>
