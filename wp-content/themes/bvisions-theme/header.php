<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> <?php // Add 'home-page' class conditionally in functions.php if needed ?>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bvisions-theme' ); ?></a>

    <header>
        <nav>
            <?php
            // Use #home for front page, otherwise home_url
            $logo_link_url = is_front_page() ? '#home' : esc_url( home_url( '/' ) );
            ?>
            <a href="<?php echo $logo_link_url; ?>" class="logo-link"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo" class="logo"></a>

            <?php
            // Use wp_nav_menu for dynamic menu management.
            // Requires a menu assigned to 'primary' location in Appearance > Menus.
            // Also requires a custom Walker in functions.php to add necessary classes.
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'main-nav', // Class for the main <ul>
                'container'      => false,      // No extra div wrapper
                'walker'         => new BVisions_Nav_Walker() // Use the custom walker
            ) );
            ?>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="header-cta-button">Tell Your Story</a> <?php // Added CTA Button ?>
        </nav>
    </header>

    <?php // The <main> tag will be opened in template files like front-page.php, index.php, page.php etc. ?>
