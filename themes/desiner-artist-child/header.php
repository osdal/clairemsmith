<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package Designer Artist
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
	  	<meta charset="<?php bloginfo( 'charset' ); ?>">
	  	<meta name="viewport" content="width=device-width">
	  	<?php wp_head(); ?>
	</head>

	<body >


	<header role="banner" class="header">
	<div class="top-panel">
		<div class="top-panel__container">
			<div class="top-credentials">
				<div class="top-mail  _icon-envelope-icon">
					<p>clairesmith.12323@yahoo.com</p>
				</div>
				<div class="top-phone _icon-phone-icon">
					<p>3104631007</p>
				</div>
			</div>
			<div class="cart _icon-basket-shopping">
				<a href="#">
					Cart
				</a>
			</div>
		</div>
	</div>


		<div class="header__container">
			<div class="wrapper-site-name">
				<div class="site_name">
					<h1>
						Claire M. Smith
					</h1>
				</div>
				<div class="arts">
					Arts
				</div>
				<div class="slogan">
					Colors in Harmony
				</div>
			</div>
			<div class="logo-img">
				<img src="@img/logo.png" alt="">
			</div>
		</div>
			

		</div>
	</header>

