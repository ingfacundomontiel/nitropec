<?php

if (!function_exists('nitropec_get_featured_image_data')) :
    /**
     * Returns an array with the data of the Featured Image for the provided Post ID. If no Featured Image, returns false.
     * $post_id: The ID of the Post to get the Featured Image data from.
     */
    function nitropec_get_featured_image_data($post_id)
    {
        if (has_post_thumbnail($post_id)) {
            $featured_image_data = array();
            $featured_image_data['url'] = wp_get_attachment_url(get_post_thumbnail_id($post_id));
            $featured_image_data['alt'] = get_post_meta(get_post_thumbnail_id($post_id), '_wp_attachment_image_alt', true);

            return $featured_image_data;
        } else {
            return false;
        }
    }
endif;
