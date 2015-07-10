<?php
/**
 * The Header for our theme.
 */


?><!DOCTYPE html>
<html class="no-js" lang="es">

<head>

	
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />	
	
	<link rel="stylesheet" href="assets/stylesheets/foundation/foundation.css" />
	<link rel="stylesheet" href="assets/stylesheets/foundation/normalize.css" />
	<link rel="stylesheet" href="assets/stylesheets/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/web fonts/dejavusans_extralight_macroman/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/web fonts/dejavusans_book_macroman/stylesheet.css" />
	<link rel="stylesheet" type="text/css" href="assets/stylesheets/web fonts/dejavusans_bold_macroman/stylesheet.css" />

	<link rel="shortcut icon" href="assets/images/favicon.ico">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="stylesheet" href="assets/owl/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="assets/owl/owl-carousel/owl.theme.css">


	<script src="assets/scripts/vendor/modernizr.js"></script>
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div>

	<header>
		
		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>

	</header>
