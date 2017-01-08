<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- LOADER -->
		<div id="loader-wrapper">
			<div class="bubbles">
				<div class="title">loading</div>
				<span></span>
				<span id="bubble2"></span>
				<span id="bubble3"></span>
			</div>
		</div>
		<!-- #content-block -->
		<div id="content-block">
			<div class="content-center fixed-header-margin">
				<!-- header -->
				<div class="header-wrapper style-10">
					<header class="type-1">

						<div class="header-product">
							<div class="logo-wrapper">
								<!-- <a href="/" id="logo"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"></a> -->
								<?php
								// Display the Custom Logo
								the_custom_logo();

								// No Custom Logo, just display the site's name
								if (!has_custom_logo()) {
								    ?>
								    <h1><?php bloginfo('name'); ?></h1>
								    <?php
								}
								?>
							</div>
							<div class="product-header-message">

								<?php echo do_shortcode('[do_widget id=text-2]');?>

								<!-- <img src="http://www.makemoneyinlife.com/wp-content/uploads/2014/03/728x90-sample.png" alt="banner">-->
							</div>
							<div class="product-header-content">
								<div class="line-entry">
									<div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
									<div class="header-top-entry increase-icon-responsive">
										<a href="<?= get_permalink(get_option( 'woocommerce_myaccount_page_id' )); ?>"><div class="title"><i class="fa fa-user"></i> <span><?php _e( 'My Account', 'woocommerce' ); ?></span></div></a>
									</div>
									<div class="header-top-entry increase-icon-responsive">
										<a href="<?= WC()->cart->get_checkout_url(); ?>"><div class="title"><i class="fa fa-copy"></i><span><?php _e( 'Order', 'woocommerce' ); ?></span></div></a>
									</div>
									<!--div class="header-top-entry increase-icon-responsive">
										<div class="title"><i class="fa fa-heart-o"></i><span><?php _e( 'Wishlist', 'woocommerce' ); ?></span></div>
									</div-->
								</div>
								<div class="middle-line"></div>
								<div class="line-entry">
									<a href="#" class="header-functionality-entry open-search-popup"><i class="fa fa-search"></i> <span>Search</span></a>
									<a href="<?= WC()->cart->get_cart_url(); ?>" class="header-functionality-entry open-cart-popup"><i class="fa fa-shopping-cart"></i><span><?php _e( 'Cart', 'woocommerce' ); ?></span> <b><?= WC()->cart->get_cart_subtotal(); ?></b></a>
								</div>
							</div>
						</div>

						<div class="close-header-layer"></div>
						<div class="navigation">
							<div class="navigation-header responsive-menu-toggle-class">
								<div class="title">Navigation</div>
								<div class="close-menu"></div>
							</div>
							<div class="nav-overflow">
								<!-- nav -->
								<nav class="disable-animation">

									<?php custom_nav('main menu'); ?>


									<ul>
										<li class="fixed-header-visible">
											<a class="fixed-header-square-button open-cart-popup"><i class="fa fa-shopping-cart"></i></a>
											<a class="fixed-header-square-button open-search-popup"><i class="fa fa-search"></i></a>
										</li>
									</ul>
									<div class="clear"></div>

									<a href="/" class="fixed-header-visible additional-header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt=""></a>
								</nav>
								<!-- /nav -->
								<div class="navigation-footer responsive-menu-toggle-class">
									<div class="socials-box">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-youtube"></i></a>
										<a href="#"><i class="fa fa-linkedin"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-pinterest-p"></i></a>
										<div class="clear"></div>
									</div>
									<div class="navigation-copyright">Created by <a href="#">8theme</a>. All rights reserved</div>
								</div>
							</div>
						</div>
					</header>
					<div class="clear"></div>
				</div>
				<!-- /header -->
				<div class="content-push">