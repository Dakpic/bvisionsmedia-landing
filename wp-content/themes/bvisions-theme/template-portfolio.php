<?php
/**
 * Template Name: Portfolio Page
 *
 * @package B-Visions_Theme
 */

get_header();
?>

    <main id="primary" class="site-main"> <?php // Keep #primary for skip link ?>
        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio-section-fullwidth">
            <h1><?php the_title(); // Use the page title set in WordPress ?></h1>

            <!-- Filter Buttons -->
            <div class="portfolio-filters">
                <button class="filter-button active" data-filter="highlights">Highlights</button> <!-- Changed from All -->
                <button class="filter-button" data-filter="weddings">Weddings</button>
                <button class="filter-button" data-filter="real-estate">Real Estate</button>
                <button class="filter-button" data-filter="events">Events</button>
                <button class="filter-button" data-filter="corporate">Corporate</button>
                <button class="filter-button" data-filter="construction">Construction</button>
            </div>

            <div class="portfolio-video-grid">
                <?php // Note: In a real theme, this grid would likely be populated dynamically using custom post types or ACF repeaters. ?>
                <?php // For this conversion, we'll keep the static HTML structure. ?>
                <!-- Using filenames from portfolio/ as IDs and thumbnail sources -->
                <!-- Assign 'highlights' plus ONE specific category per item for testing -->
                <!-- Row 1 -->
                <div class="video-item" data-youtube-id="DjYheW-cGJc" data-category="highlights weddings"> <!-- Vid 1: Weddings -->
                    <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/DjYheW-cGJc.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="d-ui15UJ6no" data-category="highlights weddings"> <!-- Vid 2: Weddings -->
                    <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/d-ui15UJ6no.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="hUK59BW-Xng" data-category="highlights real-estate"> <!-- Vid 3: Real Estate -->
                    <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/hUK59BW-Xng.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="eNuqvCkzSOc" data-category="highlights real-estate"> <!-- Vid 4: Real Estate -->
                    <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/eNuqvCkzSOc.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <!-- Row 2 -->
                <div class="video-item" data-youtube-id="EI_-cUkJECQ" data-category="highlights events"> <!-- Vid 5: Events -->
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/EI_-cUkJECQ.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="IVnIecXA6wk" data-category="highlights events"> <!-- Vid 6: Events -->
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/IVnIecXA6wk.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                 <div class="video-item" data-youtube-id="MdX4dizw07g" data-category="highlights corporate"> <!-- Vid 7: Corporate -->
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/MdX4dizw07g.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="pQDLVEb2E7Y" data-category="highlights corporate"> <!-- Vid 8: Corporate -->
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/pQDLVEb2E7Y.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <!-- Row 3 -->
                <div class="video-item" data-youtube-id="sTp4IaxKIaA" data-category="highlights construction"> <!-- Vid 9: Construction -->
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/sTp4IaxKIaA.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="w7KDRV9QAIA" data-category="highlights construction"> <!-- Vid 10: Construction -->
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/w7KDRV9QAIA.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="YqjP2sBGTUw" data-category="highlights weddings"> <!-- Vid 11: Weddings -->
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/YqjP2sBGTUw.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="Z1u4WpysITs" data-category="highlights weddings"> <!-- Vid 12: Weddings -->
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/Z1u4WpysITs.jpg" alt="Video Thumbnail" class="video-thumbnail">
                    <div class="video-player-container"></div>
                </div>
            </div>
        </section>
    </main><!-- #primary -->

<?php
get_footer();
?>
