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
<?php
$footer = get_field('footer', 'option');
if ($footer) {
	$form_snippet = $footer['form_snippet'];
	$company_address = $footer['company_address'];
	$company_phone = $footer['company_phone'];
	$logo = $footer['logo'];
	$copyright = $footer['copyright'];
	$legal_links = $footer['legal_links'];
	$social_networks = $footer['social_networks'];
?>
	<footer id="colophon" class="site-footer bg-blue-dark">
		<div class="container">
			<section class="newsletter-footer">
				<div class="brand-footer col-12 col-sm-6">
					<?php if ($logo) { ?><img src="<? echo $logo['url'] ?>" alt="<? echo $logo['alt'] ?>"><?php } ?>
				</div>
				<?php
				if ($form_snippet) {
				?>
					<div class="brand-footer col-12 col-sm-6">
						<form class="newsletter form-style-dark" style="display:block;">
							<h4 class="mb-4">Newsletter Signup</h4>
							<?php echo $form_snippet ?>
						</form>
					</div>
				<?php
				}
				?>
			</section>

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
				<div class="contact-info d-flex align-items-end">
					<?php if ($company_address) { ?><p class="color-white"><?php echo $company_address ?></p><?php } ?>
					<?php if ($company_phone) { ?><p><a href="tel:<?php echo $company_phone ?>" target="_blank"><?php echo $company_phone ?></a></p><?php } ?>
				</div>
				<div class="social-lang">
					<li class="footer-lang dropdown">
						<a href="#" class="lang-link" id="navbarLanguageFooter" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<span>
								<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M11.4998 23C5.15539 23 0 17.8445 0 11.4999C0 5.26757 4.97733 0.18721 11.1668 0.00889969C11.2757 -0.00205612 11.3884 0.000289917 11.4998 0.000289917C11.6111 0.000289917 11.7238 -0.00244904 11.8327 0.00889969C18.0224 0.187336 23 5.26807 23 11.5004C23 17.845 17.8443 23 11.4998 23ZM10.9389 21.7991V17.6706H7.70464C7.86781 18.1376 8.04409 18.5846 8.23936 18.9853C9.00828 20.5637 9.96383 21.5298 10.9389 21.7991ZM12.0607 21.7991C13.0361 21.53 13.9914 20.5639 14.7603 18.9853C14.9556 18.5846 15.1318 18.1376 15.295 17.6706H12.0607V21.7991ZM8.49324 21.4308C8.01703 20.885 7.5956 20.2244 7.23112 19.4763C6.9621 18.9242 6.72049 18.3163 6.51228 17.6706H3.15534C4.467 19.4409 6.33212 20.7787 8.49324 21.4308ZM14.5061 21.4308C16.6674 20.7787 18.5324 19.4409 19.8438 17.6706H16.4869C16.2789 18.3163 16.0371 18.9241 15.768 19.4763C15.4035 20.2245 14.9823 20.885 14.5061 21.4308ZM2.4363 16.5487H6.19648C5.85899 15.1824 5.6569 13.6649 5.61794 12.0609H1.13891C1.2252 13.6876 1.68736 15.2065 2.4363 16.5487ZM7.3624 16.5487H10.9385V12.0609H6.74884C6.7909 13.6841 7.00886 15.2102 7.3624 16.5487ZM12.0605 16.5487H15.6366C15.9902 15.2102 16.2081 13.6841 16.2502 12.0609H12.0605V16.5487ZM16.8025 16.5487H20.5627C21.3116 15.2065 21.7736 13.6874 21.8598 12.0609H17.3808C17.3419 13.6649 17.1402 15.1824 16.8025 16.5487ZM1.13901 10.9389H5.61804C5.65619 9.33569 5.86005 7.81899 6.19658 6.45116H2.42759C1.68195 7.79099 1.22511 9.3163 1.13901 10.9389ZM6.74869 10.9389H10.9383V6.45116H7.35343C7.00106 7.79079 6.79036 9.3175 6.74869 10.9389ZM12.0603 10.9389H16.25C16.2083 9.3175 15.9974 7.79079 15.6452 6.45116H12.0603V10.9389ZM17.381 10.9389H21.86C21.774 9.3163 21.3171 7.79099 20.5715 6.45116H16.8025C17.139 7.81914 17.3427 9.33569 17.381 10.9389ZM3.14648 5.3291H6.50341C6.71276 4.67581 6.95948 4.07201 7.23082 3.51458C7.59218 2.77284 8.01302 2.11039 8.48413 1.56859C6.32315 2.22303 4.45613 3.55671 3.14648 5.3291ZM7.69552 5.3291H10.9386V1.2006C9.96368 1.46805 9.00773 2.42754 8.23906 4.00549C8.04126 4.41147 7.86048 4.85442 7.69552 5.3291ZM12.0604 5.3291H15.3035C15.1386 4.85444 14.9578 4.4115 14.76 4.00549C13.9913 2.42754 13.0353 1.46806 12.0604 1.2006V5.3291ZM16.4956 5.3291H19.8526C18.5425 3.55666 16.6756 2.22328 14.5149 1.56884C14.9862 2.11058 15.4069 2.77289 15.7682 3.51483C16.0398 4.07206 16.2863 4.67561 16.4956 5.3291Z" fill="white" />
								</svg>
							</span>
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarLanguageFooter">
							<li><a class="dropdown-item" href="#">English</a></li>
							<li><a class="dropdown-item" href="#">Français</a></li>
							<li><a class="dropdown-item" href="#">Español</a></li>
							<li><a class="dropdown-item" href="#">日本語</a></li>
						</ul>
					</li>
					<ul class="social d-flex">
						<?php if ($social_networks['facebook']) { ?>
							<li>
								<a href="<? echo $social_networks['facebook'] ?>" target="_blank" aria-label="Facebook" rel="noopener">
									<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M17.9582 9.49449L16.6163 9.49539C15.564 9.49539 15.36 9.99525 15.36 10.7286V12.3467H17.87L17.543 14.8816H15.36V21.3843H12.743V14.8816H10.5547V12.3467H12.743V10.4782C12.743 8.30854 14.068 7.12793 16.0024 7.12793C16.9291 7.12793 17.7257 7.19654 17.9582 7.22772V9.49449ZM14.2564 0C6.38331 0 0 6.38242 0 14.2564C0 22.1295 6.38331 28.5128 14.2564 28.5128C22.1304 28.5128 28.5128 22.1295 28.5128 14.2564C28.5128 6.38242 22.1304 0 14.2564 0Z" fill="white" />
									</svg>
								</a>
							</li>
						<?php } ?>
						<?php if ($social_networks['twitter']) { ?>
							<li>
								<a href="<? echo $social_networks['twitter'] ?>" target="_blank" aria-label="Twitter" rel="noopener">
									<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M20.2774 11.3489C20.2827 11.4746 20.2863 11.6002 20.2863 11.7276C20.2863 15.592 17.3441 20.0489 11.9641 20.0489C10.3121 20.0489 8.77513 19.5651 7.48047 18.7355C7.70946 18.7623 7.94202 18.7756 8.17814 18.7756C9.54854 18.7756 10.8093 18.3087 11.8109 17.5237C10.5304 17.5006 9.45053 16.655 9.07808 15.4931C9.25717 15.5269 9.43983 15.5448 9.62873 15.5448C9.89515 15.5448 10.1535 15.5091 10.3995 15.4423C9.06115 15.1741 8.0534 13.9917 8.0534 12.575C8.0534 12.5625 8.0534 12.55 8.0534 12.5376C8.44723 12.7567 8.89898 12.8886 9.37835 12.9038C8.59336 12.3789 8.07656 11.4835 8.07656 10.4695C8.07656 9.93308 8.22091 9.43054 8.47307 8.9984C9.91564 10.768 12.071 11.9325 14.5018 12.0546C14.4519 11.8408 14.426 11.6171 14.426 11.3881C14.426 9.7727 15.7358 8.46289 17.3504 8.46289C18.1924 8.46289 18.9524 8.81841 19.4853 9.38688C20.1517 9.2559 20.7781 9.01265 21.343 8.67763C21.1247 9.36015 20.6605 9.93308 20.0573 10.2957C20.6489 10.2244 21.2121 10.0676 21.7369 9.83507C21.3448 10.4214 20.8485 10.9364 20.2774 11.3489ZM14.609 0C6.73496 0 0.352539 6.38242 0.352539 14.2564C0.352539 22.1295 6.73496 28.5128 14.609 28.5128C22.4829 28.5128 28.8654 22.1295 28.8654 14.2564C28.8654 6.38242 22.4829 0 14.609 0Z" fill="white" />
									</svg>
								</a>
							</li>
						<?php } ?>
						<?php if ($social_networks['linkedin']) { ?>
							<li>
								<a href="<? echo $social_networks['linkedin'] ?>" target="_blank" aria-label="LinkedIn" rel="noopener">
									<svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M21.8716 21.3715H18.9178V16.7488C18.9178 15.6466 18.8982 14.229 17.3826 14.229C15.8456 14.229 15.6112 15.4301 15.6112 16.6704V21.3715H12.6602V11.866H15.4918V13.166H15.5328C15.9267 12.4184 16.8907 11.6299 18.328 11.6299C21.3191 11.6299 21.8716 13.5982 21.8716 16.1581V21.3715ZM9.32957 10.5675C8.38063 10.5675 7.61523 9.79945 7.61523 8.85407C7.61523 7.90869 8.38063 7.14062 9.32957 7.14062C10.2741 7.14062 11.0412 7.90869 11.0412 8.85407C11.0412 9.79945 10.2741 10.5675 9.32957 10.5675ZM10.807 21.3717H7.84973V11.8662H10.807V21.3717ZM14.7437 0C6.86972 0 0.487305 6.38242 0.487305 14.2564C0.487305 22.1295 6.86972 28.5128 14.7437 28.5128C22.6177 28.5128 29.0001 22.1295 29.0001 14.2564C29.0001 6.38242 22.6177 0 14.7437 0Z" fill="white" />
									</svg>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</section>
			<section class="copy-footer d-flex justify-content-between">
				<ul class="d-flex">
					<?php
					if ($legal_links) {
						foreach ($legal_links as $legal_link) {
							$item_link = $legal_link['link'];
							$item_link_target = $item_link['target'] ? $item_link['target'] : '_self';
					?>
							<li><a href="<?php echo $item_link['url'] ?>" target="<?php echo $item_link_target ?>"><?php echo $item_link['title'] ?></a></li>
					<?php
						}
					}
					?>
				</ul>
				<?php
				if ($copyright) {
				?>
					<p><?php echo $copyright ?></p>
				<?php } ?>
			</section>
		</div>
	</footer>
<?php } ?>

<?php wp_footer(); ?>

</body>

</html>