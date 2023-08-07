<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nitropec
 */

?>
	<footer id="colophon" class="site-footer bg-blue-dark">
		<div class="container">

			<section class="sitemap-footer">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-3 mb-4">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'nitropec-footer-menu-col-1',
								'menu_id'        => 'nitropec-footer-menu-col-1',
							)
						);
						?>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mb-4">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'nitropec-footer-menu-col-2',
								'menu_id'        => 'nitropec-footer-menu-col-2',
							)
						);
						?>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mb-4">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'nitropec-footer-menu-col-3',
								'menu_id'        => 'nitropec-footer-menu-col-3',
							)
						);
						?>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mb-4">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'nitropec-footer-menu-col-4',
								'menu_id'        => 'nitropec-footer-menu-col-4',
							)
						);
						?>
					</div>
				</div>
			</section>
			<section class="sub-footer">
				
			</section>
			<section class="copy-footer d-flex justify-content-between">
			</section>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>

</html>