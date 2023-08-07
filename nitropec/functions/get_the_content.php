<?php

if (!function_exists('nitropec_get_the_content')) :
    /**
     * Returns the content stripped of HTML tags
     * $post_id: The ID of the Post to get the content from.
     */
    function nitropec_get_the_content($post_id)
    {
        $content_post = get_post($post_id);
        $content = $content_post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        if ($content != '' || get_the_excerpt($post_id)) {
            if ($content != '') {
                return $content;
            } else if (get_the_excerpt($post_id)) {
                return get_the_excerpt($post_id);
            } else {
                return false;
            }
        }
    }
endif;
