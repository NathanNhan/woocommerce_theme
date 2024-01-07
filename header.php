<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woocommerce_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'woocommerce_theme' ); ?></a>
    <!-- Topbar Menu -->
    <div class="anoucement pt-2">
      <div class="container">
		<div class="row">
			<div class="col-md-5">
			   <ul class="anoucement__list-left d-flex justify-content-start gap-3 flex-md-column flex-lg-row">
				<!-- Danh sách điện thoại -->
				<li class="d-flex align-items-center">
					<i class="bi bi-telephone rounded-circle"></i>
					<a class="text-decoration-none text-black-100" href="tel:0933498976">+849 33349845</a>
				</li>
	
				<li class="d-flex align-items-center">
					<i class="bi bi-envelope rounded-circle"></i>
					<a class="text-decoration-none text-black-100" href="mailto:trongnhan8150@gmail.com">trongnhan8150@gmail.com</a>
				</li>
			   </ul>
			</div>
			<div class="col-md-7">
			  <ul class="anouncement__list-right d-flex justify-lg-content-end gap-lg-5 justify-content-md-center flex-md-column flex-lg-row gap-md-1 align-items-lg-center">
				<li class="d-flex align-items-center">
					<i class="bi bi-truck rounded-circle"></i>
					Free EU Shipping
				</li>
				<li class="d-flex align-items-center">
					<i class="bi bi-clock-history rounded-circle"></i>
					30 Day Menu Back
				</li>
				<li class="d-flex align-items-center">
					<i class="bi bi-person rounded-circle"></i>
					24/7 Customer Support
				</li>
			  </ul>
			</div>
		</div>
	  </div>
	</div>





	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$woocommerce_theme_description = get_bloginfo( 'description', 'display' );
			if ( $woocommerce_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $woocommerce_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'woocommerce_theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
