<?php get_header(); ?>

<!-- Hero Section -->
<main class="hero-section">
    <div class="hero-container">
        <div class="hero-content">
            <h1>Hello,<br>I'm <?php echo get_theme_mod('portfolio_name', 'Berkin'); ?></h1>
            <p><?php echo get_theme_mod('portfolio_title', 'Software Engineer'); ?></p>
            <div class="hero-buttons">
                <a href="#about" class="button">About me</a>
                <a href="<?php echo esc_url(get_theme_mod('portfolio_cv_file', '#')); ?>" class="button outline">Download CV</a>
            </div>
        </div>
        
        <div class="hero-image">
            <?php if(get_theme_mod('portfolio_image')): ?>
                <img src="<?php echo esc_url(get_theme_mod('portfolio_image')); ?>" alt="Profile">
            <?php endif; ?>
            
            <!-- Sosyal Medya İkonları -->
            <div class="hero-social-links">
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
        </div>
    </div>
</main>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="about-container">
        <div class="about-image">
            <?php if(get_theme_mod('about_image')): ?>
                <img src="<?php echo esc_url(get_theme_mod('about_image')); ?>" alt="About me">
            <?php endif; ?>
        </div>
        <div class="about-content">
            <h2>About me</h2>
            <h3><?php echo get_theme_mod('about_title', 'Software Engineer'); ?></h3>
            <p><?php echo get_theme_mod('about_description', 'Hello! I\'m a UI/UX designer and Flutter developer. Dive into my portfolio to discover a fusion of elegant design and seamless Flutter development. Welcome to a world where creativity meets functionality!'); ?></p>
            <div class="about-buttons">
                <a href="#contact" class="button">Contact me</a>
                <a href="<?php echo esc_url(get_theme_mod('portfolio_cv_file', '#')); ?>" class="button outline">Download CV</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <h2>Services</h2>
    <p class="services-intro"><?php echo get_theme_mod('services_intro', 'Embark on a journey of digital transformation with services that blend design brilliance with cutting-edge development. Let\'s create experiences that resonate and applications that captivate.'); ?></p>
    
    <div class="services-grid">
        <div class="service-card">
            <div class="service-number">1</div>
            <h3><?php echo get_theme_mod('service_1_title', 'UI/UX Designer'); ?></h3>
            <p><?php echo get_theme_mod('service_1_description', 'Crafting captivating interfaces that resonate. From wireframes to polished designs, I make sure your digital presence stands out with user-centric creativity.'); ?></p>
            <a href="#" class="learn-more">Learn More</a>
        </div>
        
        <div class="service-card">
            <div class="service-number">2</div>
            <h3><?php echo get_theme_mod('service_2_title', 'Flutter Developer'); ?></h3>
            <p><?php echo get_theme_mod('service_2_description', 'Turning app ideas into reality. As a Flutter developer, I build sleek, cross-platform applications for a seamless user experience and efficient performance.'); ?></p>
            <a href="#" class="learn-more">Learn More</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <h2>If You have any Query or Project ideas feel free to</h2>
    <a href="#" class="contact-button">Contact me</a>
</section>

<?php get_footer(); ?>
