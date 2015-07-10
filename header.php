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

	<div class="fixed">
		<nav class="top-bar" data-topbar role="navigation">
	    <ul class="title-area">
	        <li class="logo">
	            <a href="#WTF"><p>DEVSCOLA</p></a>
	            <?php wp_nav_menu( array( 
	                       'theme_location' => 'primary',
	                       'container' => false,
	                       'menu_class' => 'menu'
	                 ) ); ?>
	        </li>
	        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
	        </li>
	    </ul>

	    	<section class="top-bar-section">
		        <ul class="right">
		            <li class="divider"></li>
		            <li><a href="#WTF">DEVSCOLA WTF?</a></li>
		            <li class="divider"></li>
		            <li><a href="#TRACKS">TRACKS</a></li>
		            <li class="divider"></li>
		            <li><a href="#COMPROMISO">COMPROMISO</a></li>
		            <li class="divider"></li>
		            <li class="has-dropdown"><a>DEVSCOLA WHO?</a>
		                <ul class="dropdown">
			                	<li><a href="#WHO">DEVSCOLA WHO?</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#WHO-PICS">INTEGRANTES</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#MENTORING">MENTORING</a></li>
		                    <li class="divider"></li>
		                </ul>

		            <li class="divider"></li>
		            <li class="has-dropdown"><a>PARTICIPAR</a>
		                <ul class="dropdown">
			                	<li><a href="#JOIN">PARTICIPAR</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#SPONSOR">APOYAR</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#SOCIAL">SOCIAL</a></li>
		                    <li class="divider"></li>
		                </ul>
		      
		            <li class="divider"></li>
		            <li class="active"><a href="#CONTACT">CONTACT</a></li>
	 			</ul>
 			</section>

		</nav>
	</div>



