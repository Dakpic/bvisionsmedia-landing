<?php
/**
 * Template Name: Media Services Page
 *
 * @package B-Visions_Theme
 */

get_header();
?>

    <main id="primary" class="site-main"> <?php // Keep #primary for skip link ?>

        <?php // Use post thumbnail for hero background if available, otherwise fallback ?>
        <?php
        $hero_image_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(),'full') : get_template_directory_uri() . '/images/services/media-services-hero-placeholder.jpg';
        ?>
        <!-- Hero Section -->
        <section class="service-hero" style="background-image: url('<?php echo esc_url($hero_image_url); ?>');">
            <div class="service-hero-overlay"></div>
            <div class="service-hero-content">
                <h1><?php the_title(); // Use the page title set in WordPress ?></h1>
                <?php
                // Display page content (excerpt or full content) if available
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        // You could use the_excerpt() or the_content() here
                        // Example using a custom field 'page_subtitle' (requires ACF or similar)
                        // $subtitle = get_field('page_subtitle');
                        // if ($subtitle) {
                        //     echo '<p>' . esc_html($subtitle) . '</p>';
                        // } else {
                        //     the_excerpt(); // Fallback to excerpt
                        // }
                        // For simplicity, using static text from HTML:
                        echo '<p>Comprehensive solutions to elevate your brand\'s visual presence.</p>';
                    endwhile;
                endif;
                ?>
            </div>
        </section>

        <!-- Media Services Section -->
        <section id="services">
            <?php // Section title could be dynamic or static ?>
            <h1>Media Services</h1>
            <p class="section-description">Explore the range of media solutions we offer.</p>
            <div class="section-content-wrapper">
                <div class="service-tiles-grid">
                    <?php // Links should ideally point to actual pages/posts ?>
                    <a href="<?php echo esc_url( home_url( '/video-production-services/' ) ); ?>" class="service-tile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/service-tiles/video-production.jpg');"> <?php // Removed video-production-tile class ?>
                        <div class="tile-overlay"></div>
                        <span class="tile-label">Video Production</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/photography-services/' ) ); ?>" class="service-tile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/service-tiles/photo-services.jpg');">
                        <div class="tile-overlay"></div>
                        <span class="tile-label">Photography Services</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/short-form-videos/' ) ); ?>" class="service-tile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/service-tiles/short-form.jpg');">
                        <div class="tile-overlay"></div>
                        <span class="tile-label">Short Form Videos</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/drone-video-photography/' ) ); ?>" class="service-tile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/service-tiles/drone-video-photography.jpg');">
                        <div class="tile-overlay"></div>
                        <span class="tile-label">Drone Services</span>
                    </a>
                    <!-- Empty Middle Tile -->
                    <div class="service-tile empty-tile" style="background-color: #e9ecef; border-color: #dee2e6;">
                        <?php // Intentionally left empty, or add logo later ?>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/digital-ads/' ) ); ?>" class="service-tile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/service-tiles/digital-ads-placeholder.jpg');"> <?php // Placeholder image ?>
                        <div class="tile-overlay"></div>
                        <span class="tile-label">Digital Ads</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/social-media-management/' ) ); ?>" class="service-tile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/service-tiles/social-media-management.jpg');">
                        <div class="tile-overlay"></div>
                        <span class="tile-label">Social Media Management</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/strategic-media-consulting/' ) ); ?>" class="service-tile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/service-tiles/strategic-media-consulting.jpeg');">
                        <div class="tile-overlay"></div>
                        <span class="tile-label">Strategic Consulting</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/brand-storytelling/' ) ); ?>" class="service-tile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/service-tiles/brand-storytelling.jpg');">
                        <div class="tile-overlay"></div>
                        <span class="tile-label">Brand Storytelling</span>
                    </a>
                </div>
            </div>
        </section>
    </main><!-- #primary -->

<?php
get_footer();
?>
