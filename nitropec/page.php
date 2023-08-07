<?php

/**
 * Default Page Template
 *	
 * The template for building any regular site page
 */

$dark_navigation = get_field('dark_navigation');

if (!$dark_navigation) {
	global $header_class;
	$header_class = 'header-white';
}

get_header();
?>

<main>
	<?php echo the_content(); ?>
</main>

<?php
get_footer();
?>