<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header">
		
        <nav id="site-navigation" class="main-navigation">
        <div class="site-branding">
            <?php
            the_custom_logo();
            ?>
        </div><!-- .site-branding -->
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'open-3' ); ?></button>
            <?php
            wp_nav_menu(
                array(
                    //'theme_location' => 'navigation',
                    'menu_id' => 21,
                )
            );
            ?>
        </nav>
		<div class="header">

    
<div class="logos">

<img src="<?php echo get_template_directory_uri(); ?>/img/Groupe47.png" alt="">
<img src="<?php echo get_template_directory_uri(); ?>/img/cart-solid-240.png" alt="">
<img src="<?php echo get_template_directory_uri(); ?>/img/user-solid-240.png" alt="">
</div>
</div><!-- #site-navigation -->
    </header><!-- #masthead --><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
