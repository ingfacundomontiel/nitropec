<?php

/**
 * Default Page Template
 *	
 * The template for building any regular site page
 */

get_header();
?>

<main>
	<?php echo the_content(); ?>
</main>

<?php
get_footer();
?>