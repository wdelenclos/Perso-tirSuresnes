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
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Place favicon.ico in the root directory -->


	<!-- all css here -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/headline.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/et-line-icon.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/meanmenu.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/Pe-icon-7-stroke.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bundle.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/responsive.css">
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<header>

<!-- main-menu-area-start -->
<div class="main-menu-area">
	<div class="container-fluid">
		<div class="col-md-3 col-sm-3 col-sm">
			<div class="logo">
				<a href="/">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo/logo.png" alt="" />
				</a>
			</div>
		</div>
		<div class="col-md-7 col-sm-7">
			<div class="main-menu text-right">
				<nav>
					<ul>
						<li class="active">
							<a href="contact.html">Accueil</a>
						</li>
						<li>
							<a href="#">Le club</a>
							<ul class="sub-menu text-left">
								<li>
									<a href="courses-list.html">Découvrir le club</a>
								</li>
								<li>
									<a href="event-details.html">Actualités</a>
								</li>
								<li>
									<a href="courses-details.html">Boutique d'accessoires</a>
								</li>
								<li>
									<a href="login.html">Inscriptions & licences</a>
								</li>

							</ul>
						</li>
						<li>
							<a href="contact.html">Le tir sportif</a>
							<ul class="sub-menu text-left">
								<li>
									<a href="blog-left-sidebar.html">Les guides du tir sportif </a>
								</li>
								<li>
									<a href="blog-right-sidebar.html">Réglement de la FFT</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="blog-grid.html">Les évènements</a>
							<ul class="sub-menu text-left">
								<li>
									<a href="blog-no-sidebar.html">Challenges de tir</a>
								</li>
								<li>
									<a href="blog-left-sidebar.html">Evenements à venir</a>
								</li>
								<li>
									<a href="blog-right-sidebar.html">Resultats aux concours</a>
								</li>
								
							</ul>
						</li>
						
						<li>
							<a href="contact.html">Contact</a>
						</li>


					</ul>
				</nav>
			</div>
		</div>
		<div class="col-md-2 col-sm-2">
			<div class="header-search">
				<div class="search-wrapper">
					<a href="javascript:void(0);" class="search-open">
						<span class="ti-search"></span>
					</a>
					<div class="search-inside animated bounceInUp">
						<i class="icon-close search-close fa fa-times"></i>
						<div class="search-overlay"></div>
						<div class="position-center-center">
							<div class="search">
								<form>
									<input type="search" placeholder="Rechercher sur le site">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="col-xs-12">
			<div class="mobile-menu"></div>
		</div>
	</div>
</div>
<!-- main-menu-area-end -->
</header>