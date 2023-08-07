<?php

/**
 * The template for displaying Category archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nitropec
 */

global $header_class;
get_header();
?>

<main>
    <section>
        <div>
            <h1>
                <p><?php the_archive_title() ?></p>
            </h1>
            <?php
            if (get_the_archive_description()) {
            ?>
                <div>
                    <p><?php the_archive_description() ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_title();
        endwhile;
    endif;
    ?>
</main>

<?php
get_sidebar();
get_footer();
