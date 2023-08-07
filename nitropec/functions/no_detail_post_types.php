<?php

// Functions to exclude CPTs withouth Single (Detail) Page from sitemap, search results, and redirect to Homepage if user try to access the Single (Detail) Page

/**
 * Exclude a post type from XML sitemaps.
 *
 * @param boolean $excluded  Whether the post type is excluded by default.
 * @param string  $post_type The post type to exclude.
 *
 * @return bool Whether or not a given post type should be excluded.
 */

// function nitropec_sitemap_exclude_post_types($excluded, $post_type)
// {
//   $excludedPostTypes = array("works", "partners", "team_member", "u_tutorials", "sales_contact", "awards", "offices");
//   if (in_array($post_type, $excludedPostTypes))
//     return true;
//   return false;
// }
// add_filter('wpseo_sitemap_exclude_post_type', 'nitropec_sitemap_exclude_post_types', 10, 2);

/**
 * Change meta robots using Yoast SEO
 * Credit: Yoast development team
 * 
 * The return false removes the robots tag on the page
 * Or you can return index/noindex follow/nofollow like
 * return 'noindex, follow';
 * Or
 * return 'noindex, nofollow';
 * 
 * Using this function to check if is Resource Single, if 'External URL' is set, add noindex & nofollow tags.
 */

// function nitropec_tags_exclude_cpts_single($robots)
// {
//   if (is_singular('partners') || is_singular('team_member') || is_singular('sales_contact') || is_singular('awards') || is_singular('offices')) {
//     return 'noindex, nofollow';
//   } else if (is_singular('resource')) {
//     if (get_field('external_link')) {
//       return 'noindex, nofollow';
//     } else {
//       return $robots;
//     }
//   }
// }

// add_filter('wpseo_robots', 'nitropec_tags_exclude_cpts_single');

/**
 * Redirect to Homepage if trying to access the Single (Detail) Page of a CPT without Single (Detail) Page
 *
 * @param boolean $excluded  Whether the post type is excluded by default.
 * @param string  $post_type The post type to exclude.
 *
 * @return bool Whether or not a given post type should be excluded.
 */

// function nitropec_redirect_no_detail_posts()
// {
//   if (is_singular('partners') || is_singular('team_member') || is_singular('sales_contact') || is_singular('awards') || is_singular('offices')) {
//     // Redirect to Homepage if is single Works, Partners, Team Member, Sales Contact, Awards, Offices
//     wp_redirect(get_home_url(), 301);
//     exit;
//   }
// }

// add_action('template_redirect', 'nitropec_redirect_no_detail_posts');
