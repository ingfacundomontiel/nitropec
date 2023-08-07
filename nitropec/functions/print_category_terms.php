<?php

if (!function_exists('nitropec_print_categories')) :
    /**
     * Displays the names of the Categories in the list provided, separated by a comma. 
     * $category_list: Array of WP Category (or Custom Taxonomy) Terms 
     */
    function nitropec_print_categories($category_list)
    {
        if (!empty($category_list)) :
            $count = 0;
            foreach ($category_list as $cat) {
                $count++;
                echo $cat->name;
                if ($count != sizeof($category_list)) {
                    echo ', ';
                }
            }
        endif;
    }
endif;
