<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nitropec
 */

?>

<!doctype html>
<?php
global $header_class;
?>

<html <?php language_attributes(); ?>>

<head>

	<!-- Google Tag Manager -->
	<script></script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<!-- <noscript><iframe src=""
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
	<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>

	<header class="navbar navbar-expand-lg nitropec-navbar <?php echo $header_class; ?>">
		<?php include 'navigation.php'; ?>
	</header>