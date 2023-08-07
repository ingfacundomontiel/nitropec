<?php
// Move Yoast metabox to bottom of every Page/Post
function yoasttobottom()
{
    return 'low';
}
add_filter('wpseo_metabox_prio', 'yoasttobottom');
