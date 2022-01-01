<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<div id="fb-root"></div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0&appId=2425188241074515&autoLogAppEvents=1"></script>
	
<?php do_action( 'wp_body_open' ); ?>

<div class="site" id="page">



	
	<header id="wrapper-navbar">

	<!--********************Title and Social Links************************-->
	<div id="title-bar" class="container-fluid">

		<div class="container d-flex">

			<div class="mr-auto p-2"><h4><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>&nbsp;-&nbsp;<?php echo get_bloginfo( 'description' ); ?></h4></div>
						
			<div class="p-2"><a href="https://www.facebook.com/FlyingDucksIrl/"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>&nbsp;</a></div>
						
			<div class="p-2"><a href="https://twitter.com/flyingducksirl?lang=en"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i>&nbsp;</a></div>
			
		</div>

	</div>

<!-- ******************* The Navbar Area ******************* -->
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>

	
</header><!-- #wrapper-navbar end -->
