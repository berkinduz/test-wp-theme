<button id="scrollToTop" class="scroll-to-top">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 4L4 12H9V20H15V12H20L12 4Z" fill="currentColor"/>
    </svg>
</button>

<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-branding">
            <div class="logo"><?php echo get_theme_mod('header_logo_text', 'A'); ?></div>
            <h3><?php echo get_theme_mod('portfolio_name', 'Your Name'); ?></h3>
        </div>
        
<div class="social-links">
    <?php
    $theme_directory = get_template_directory_uri();
    
    $social_icons = array(
        'instagram' => get_theme_mod('social_instagram', '#'),
        'facebook' => get_theme_mod('social_facebook', '#'),
        'twitter' => get_theme_mod('social_twitter', '#'),
        'youtube' => get_theme_mod('social_youtube', '#')
    );

    foreach($social_icons as $icon => $url): 
        $svg_path = $theme_directory . '/assets/images/' . $icon . '.svg';
    ?>
        <a href="<?php echo esc_url($url); ?>" class="social-icon" target="_blank">
            <img src="<?php echo esc_url($svg_path); ?>" 
                 alt="<?php echo ucfirst($icon); ?>"
            />
        </a>
    <?php endforeach; ?>
</div>

        <div class="footer-meta">
            <span class="location"><?php echo get_theme_mod('footer_location', 'Istanbul'); ?></span>
            <span class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</span>
        </div>
    </div>
</footer>