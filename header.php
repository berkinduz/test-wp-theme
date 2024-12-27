<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-container">
        <div class="logo-container">
            <a href="<?php echo home_url(); ?>">
                <div class="logo"><?php echo get_theme_mod('header_logo_text', 'A'); ?></div>
            </a>
        </div>
        <nav class="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => false,
                'menu_class' => 'nav-links'
            ));
            ?>
        </nav>
    </div>
</header>