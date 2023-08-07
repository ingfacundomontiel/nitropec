<?php

// Set Search Results to include only the following post types:

function customize_search($query)
{
    if ($query->is_main_query() && $query->is_search() && !is_admin()) {
        $query->set('post_type', array('resource', 'product', 'industries', 'use_cases', 'case_studies', 'news_releases', 'u_tutorials'));
    }
}

add_filter('pre_get_posts', 'customize_search');

// Set Search Results order to show Products CPT first:

add_action('pre_get_posts', function ($query) {
    if ($query->is_search()) {
        $query->set('orderby', 'relevance');
    }
});

add_filter('posts_search_orderby', function ($search_orderby) {
    global $wpdb;
    return "{$wpdb->posts}.post_type LIKE 'product' DESC, {$search_orderby}";
});
