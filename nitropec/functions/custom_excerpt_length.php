<?php
// Make excerpt length 27 words 
function custom_excerpt_length($length)
{
    return 27;
}
add_filter('excerpt_length', 'custom_excerpt_length');
