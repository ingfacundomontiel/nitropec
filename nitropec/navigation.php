<?php
$main_navigation = get_field('main_navigation', 'option');
$main_nav_logo = $main_navigation['main_nav_logo'];
$main_nav_dark_logo = $main_navigation['main_nav_dark_logo'];
$main_nav_cta_button = $main_navigation['main_nav_cta_button'];
$main_nav_cta_button_visible = $main_nav_cta_button['visible'];
$button_link = $main_nav_cta_button['button_link'];
$display_language_switcher = $main_navigation['display_language_switcher'];
?>

<nav class="container" aria-label="Main navigation">
    <div class="header-mobile">
        <a class="navbar-brand" href="/" aria-label="Nitropec">
            <?php
            if ($main_nav_logo) {
            ?>
                <img class="brand-light no-lazy" width="100%" height="32px" src="<?php echo $main_nav_logo['url'] ?>" alt="<?php echo $main_nav_logo['alt'] ?>" />
            <?php
            }
            if ($main_nav_dark_logo) {
            ?>
                <img class="brand-dark no-lazy" width="100%" height="32px" src="<?php echo $main_nav_dark_logo['url'] ?>" alt="<?php echo $main_nav_dark_logo['alt'] ?>" />
            <?php
            }
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="icon-hamburger" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="7" width="24" height="2" fill="white" />
                <rect x="3" y="14" width="24" height="2" fill="white" />
                <rect x="3" y="21" width="24" height="2" fill="white" />
            </svg>
            <svg class="icon-close" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="7.41418" y="6" width="24" height="2" transform="rotate(45 7.41418 6)" fill="white" />
                <rect x="24.5773" y="7.41406" width="24" height="2" transform="rotate(135 24.5773 7.41406)" fill="white" />
            </svg>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
        <div class="menu-header-menu-navigation-container">
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'nitropec-header-menu',
                    'menu_id'         => 'nitropec-header-menu',
                    'container'       => false,
                    'menu_class'      => '',
                    'fallback_cb'     => '__return_false',
                    'items_wrap'      => '<ul id="%1$s" class="menu %2$s">%3$s</ul>',
                    'depth'           => 3,
                    'walker'          => new mega_menu_bootstrap_5_wp_nav_menu_walker()
                )
            );
            ?>
            <ul class="navbar-nav nitropec-navbar-right">
                <?php
                if ($main_nav_cta_button_visible && $button_link) {
                ?>
                    <li class="menu-item">
                        <a href="<?php echo $button_link['url'] ?>" class="btn btn-animated btn-primary btn-demo-menu" target="<?php echo $button_link['target'] ? $button_link['target'] : '_self' ?>" title="<?php echo $button_link['title'] ?>">
                            <?php echo nitropec_generate_button_content($button_link['title']); ?>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>