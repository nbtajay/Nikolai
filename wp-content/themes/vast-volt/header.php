<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/fontawasome-all.min.css" media="screen" /> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/flaticon.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/owl.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/bootstrap.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/jquery.fancybox.min.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/animate.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/color.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/elpath.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/jquery-ui.css" media="screen" />
	<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/style.css" media="screen" /> -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/new-css/responsive.css" media="screen" />



</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
	</a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
