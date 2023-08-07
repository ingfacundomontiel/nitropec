<?php

// Update CSS within Admin
function admin_styles()
{
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'admin_styles', false, '1.0.0');
