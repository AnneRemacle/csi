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
		<script src="https://use.fontawesome.com/81b9ac47bc.js"></script>
        <script
              src="https://code.jquery.com/jquery-2.2.4.min.js"
              integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
              crossorigin="anonymous">
        </script>

		<meta charset="UTF-8">
		<title>CSI Angleur</title>

		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/build/css/styles.css'; ?>?v=0.5">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/build/assets/fonts/font-awesome/css/font-awesome.min.css'; ?>?v=0.5">

		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/build/script/lancement.js'; ?>"></script><!-- permet le lancement de la fonction de scroll -->
		<script src="<?php echo get_template_directory_uri() . '/build/script/script.js';?>"></script>
	</head>
	<body>

		<?php if(is_front_page()): ?>
			 <div class="welcome">
			 	<img class="welcome__logo" src="<?php echo get_template_directory_uri() . '/build/assets/images/logo-csi-bicolore.png';?>" alt="Logo du Centre de Santé Intégré d'Angleur">
			 	<p class="welcome__title">
			 		Centre de Santé Intégré
			 		<smal class="welcome__title--second">Angleur</smal>
			 	</p>
			 	<p class="welcome__punchline">
			 		Des soins de qualité pour tous
			 	</p>

			 	<a href="#header" class="welcome__button">
			 		Cliquez ici <br>
			 		<!-- <i class="welcome__button--icon fa fa-arrow-down"></i> -->
			 	</a>
			 </div>
		<?php endif; ?>


		<header class="header" id="header">
			<div class="header__left">
				<a href="<?php echo get_home_url(); ?>" class="header__logo">
					<img src="<?php echo get_template_directory_uri() . '/build/assets/images/logo-csi-bicolore.png';?>" alt="Logo du Centre de Santé Intégré d'Angleur" class="header__logo--img">
				</a>
				<h1 class="sro">
					Centre de Santé Intégré d'Angleur
				</h1>
			</div>

			<nav class="header__nav">
				<h2 class="sro">Navigation principale du site du Centre de Santé Intégré d'Angleur</h2>
				<?php wp_nav_menu( array(
					'menu' => "header",
					'theme-location' => 'header' ) ); ?>
        		<?php wp_reset_query(); ?>
			</nav>

		</header>
