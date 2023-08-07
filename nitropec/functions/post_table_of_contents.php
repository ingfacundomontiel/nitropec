<?php

/**
 * Create a table of contents for the current post
 * 
 * Example of use: post_table_of_contents(1, 'desktop' / 'mobile', 'page-scroll');
 * 
 */
function post_table_of_contents($levels, $type, $li_class)
{
	global $post;
	$blocks = parse_blocks($post->post_content);
	$headings = array();
	if ($type == 'desktop') {
		echo '<aside class="aside-nav block-sticky"><nav><ul class="table-of-contents-ul">';
	} else {
		echo '<div class="swiper swiper-nav-tab d-block d-md-none">
		<div class="nav nav-tabs swiper-wrapper table-of-contents-div">';
	}
	$i = 1;
	foreach ($blocks as $block) {
		if ('core/heading' === $block['blockName']) {

			$innerContent =  $block['innerContent'][0];
			$tag =  substr($innerContent, 2, 2);
			if ($levels == 1) {
				$pos = strrpos($innerContent, '<h2');
			}
			$id_pos_0 = strrpos($innerContent, 'class="');
			$id_pos_1 = stripos($innerContent, '">');
			$id = substr($innerContent, $id_pos_0 + 6, $id_pos_1 - 9);

			$id = 'anchor_' . $i;

			if ($pos) {
				$link_title = strip_tags($block['innerHTML']);
				$link_title = trim(str_replace('&nbsp;', '', $link_title));
				if (strlen($link_title) > 0) {

					if ($type == 'desktop') {
						echo '<li class="' . $li_class . '"><a href="#' . $id . '">' . $link_title . '</a></li>';
					} else {
						echo '<a class="' . $li_class . ' swiper-slide nav-link" href="#' . $id . '"><span>' . strip_tags($block['innerHTML']) . '</span></a>';
					}
				}
			}
		}
		$i++;
	}
	if ($type == 'desktop') {
		echo '</ul></nav></aside>';
	} else {
		echo '</div></div>';
	}

	wp_enqueue_script('table-of-contents-script', get_template_directory_uri() . '/js/table-of-contents.js', array());
}

function nitropec_parse_heading_blocks($blocks)
{
	$i = 1;
	foreach ($blocks as $block) {
		if ('core/heading' === $block['blockName']) {
			$id = 'anchor_' . $i;
			echo str_replace('<h2', '<h2 id="' . $id . '"', $block['innerHTML']);
		} else {
			echo apply_filters('the_content', render_block($block));
		}
		$i++;
	}
}
