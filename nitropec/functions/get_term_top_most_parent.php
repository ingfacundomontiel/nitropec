<?php

/**
 * Helper function to return the top most level term
 * @param  int $term_id
 * @param  string $taxonomy
 * @return stdClass Term object
 */
function get_term_top_most_parent($term_id, $taxonomy)
{
    // start from the current term
    $parent  = get_term_by('id', $term_id, $taxonomy);
    // climb up the hierarchy until we reach a term with parent = '0'
    while ($parent->parent != '0') {
        $term_id = $parent->parent;

        $parent  = get_term_by('id', $term_id, $taxonomy);
    }
    return $parent;
}
