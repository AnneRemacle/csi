<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CSI Angleur</title>

		<script src="https://use.fontawesome.com/1712970157.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClfGzs3JWygOHF-J3GQqJke__tElojigQ"></script>
		<script src="<?php echo get_template_directory_uri() . '/build/script/script.js';?>"></script>
		<script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous">
		</script>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/build/css/styles.css'; ?>?v=0.5">

	</head>
	<body>
		<div class="container">
		<header class="header" id="header">
			<div class="header__up">
				<div class="header__left">
					<a href="<?php echo get_home_url(); ?>" class="header__logo">
						<img src="<?php echo get_template_directory_uri() . '/build/assets/images/logo.svg';?>" alt="Logo du Centre de Santé Intégré d'Angleur" class="header__logo--img">
					</a>
					<h1 class="sro">
						Centre de Santé Intégré d'Angleur
					</h1>
				</div>

				<nav id="header-nav" class="header__nav">
					<h2 class="sro">Navigation principale</h2>
					<a href="#header-nav" class="header__btn header__burger"><i class="fa fa-bars"></i></a>
					<a href="#header" class="header__btn header__close"><i class="fa fa-times"></i></a>
					<?php wp_nav_menu( array(
						'menu' => "header",
						'theme-location' => 'header' ) ); ?>
	        		<?php wp_reset_query(); ?>
				</nav>
			</div>

			<figure class="header__hero">
				<img src="<?php echo get_template_directory_uri() . '/build/assets/images/hero.jpg';?>" alt="" class="header__hero--img"/>
			</figure>

			<div class="header__frames">
				<div class="frame">
					<p class="frame__title">Heures d'ouverture</p>
					<ul class="frame__content">
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

				<div class="frame">
					<p class="frame__title">CSI Angleur</p>
					<div class="frame__content">
						<div class="frame__content--address">
							<i class="fa fa-envelope icon"></i><?php the_field('adresse', 'options'); ?>
						</div>
						<div class="frame__content--phone">
							<i class="fa fa-phone icon"></i><?php the_field('telephone', 'options'); ?>
						</div>
						<div class="frame__content--mail">
							<i class="fa fa-paper-plane icon"></i><?php the_field('email', 'options'); ?>
						</div>
					</div>

				</div>
				<div class="frame">
					<p class="frame__title">Dernières news</p>
					<?php $posts = new WP_Query( [ 'post_type' => 'actualite', 'number' => 1, 'order' => 'DESC' ] ); ?>
						<?php if ( $posts -> have_posts() ):
							while ( $posts -> have_posts() ):
								$posts -> the_post(); ?>

							<div class="frame__content actu">
								<date class="actu__title"><?php the_date( 'l j F' ); ?></date>
								<p class="actu__text">
									<?php the_content(); ?>
								</p>
							</div>

						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>

		</header>
