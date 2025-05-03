<?php
/**
 * The template for displaying the static front page.
 *
 * @package B-Visions_Theme
 */

get_header();
?>

    <!-- Video Hero Section - Moved outside main -->
    <section id="home" class="video-hero">
        <div class="video-background">
            <video autoplay loop muted playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/home-page-video/Wedding Film Reel - BVISIONS MEDIA 1080.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="video-overlay"></div> <!-- Optional dark overlay for text readability -->
        <div class="hero-content">
            <h1>Visual Storytelling for Local Brands</h1>
            <p>Check out the video and photography work we're proud to have produced.</p>
            <a href="#portfolio" class="cta-button">View Our Work</a>
        </div>
    </section>

    <main id="primary" class="home-main"> <?php // Added home-main class, kept #primary for skip link ?>
        <div class="home-hero-spacer"></div> <?php // Spacer div to push content below absolute hero ?>

        <!-- Client Logos Section -->
        <section id="client-logos" class="client-logos-section">
            <div class="logos-container">
                <div class="logos-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/@properties.svg" alt="@properties Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/acres-logo.png" alt="Acres Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/advanced-plumbing-systems-logo-319w.png" alt="Advanced Plumbing Systems Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/bigriverrally.png" alt="Big River Rally Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/countryboomlogo.png" alt="Country Boom Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/dbs group.svg" alt="DBS Group Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/ffplogo.png" alt="FFP Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/GerrardHoeschler.jpg" alt="Gerrard Hoeschler Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/habitatforhumanityblack.png" alt="Habitat for Humanity Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/kickapoo-logo.svg" alt="Kickapoo Coffee Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/ltc.png" alt="LTC Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/marketandjohnsonlogo.png" alt="Market & Johnson Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/oktoberfest.svg" alt="Oktoberfest Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/organicvalley.png" alt="Organic Valley Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/theboardstore.png" alt="The Board Store Logo">
                    <!-- Duplicate set for scrolling animation -->
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/@properties.svg" alt="@properties Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/acres-logo.png" alt="Acres Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/advanced-plumbing-systems-logo-319w.png" alt="Advanced Plumbing Systems Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/bigriverrally.png" alt="Big River Rally Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/countryboomlogo.png" alt="Country Boom Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/dbs group.svg" alt="DBS Group Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/ffplogo.png" alt="FFP Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/GerrardHoeschler.jpg" alt="Gerrard Hoeschler Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/habitatforhumanityblack.png" alt="Habitat for Humanity Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/kickapoo-logo.svg" alt="Kickapoo Coffee Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/ltc.png" alt="LTC Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/marketandjohnsonlogo.png" alt="Market & Johnson Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/oktoberfest.svg" alt="Oktoberfest Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/organicvalley.png" alt="Organic Valley Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/brand-logos/theboardstore.png" alt="The Board Store Logo">
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio-section-fullwidth">
            <h1><a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="section-title-link">Portfolio</a></h1>
            <div class="portfolio-video-grid">
                <!-- Using filenames from portfolio/ as IDs and thumbnail sources -->
                <!-- Row 1 - Pointing to highlights folder -->
                <div class="video-item" data-youtube-id="DjYheW-cGJc">
                    <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/DjYheW-cGJc.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="d-ui15UJ6no">
                    <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/d-ui15UJ6no.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="hUK59BW-Xng">
                    <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/hUK59BW-Xng.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="eNuqvCkzSOc">
                    <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/eNuqvCkzSOc.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <!-- Row 2 - Pointing to highlights folder -->
                <div class="video-item" data-youtube-id="EI_-cUkJECQ">
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/EI_-cUkJECQ.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="IVnIecXA6wk">
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/IVnIecXA6wk.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                 <div class="video-item" data-youtube-id="MdX4dizw07g">
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/MdX4dizw07g.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="pQDLVEb2E7Y">
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/pQDLVEb2E7Y.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <!-- Row 3 - Pointing to highlights folder -->
                <div class="video-item" data-youtube-id="sTp4IaxKIaA">
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/sTp4IaxKIaA.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="w7KDRV9QAIA">
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/w7KDRV9QAIA.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="YqjP2sBGTUw">
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/YqjP2sBGTUw.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
                <div class="video-item" data-youtube-id="Z1u4WpysITs">
                     <img src="<?php echo get_template_directory_uri(); ?>/portfolio/highlights/Z1u4WpysITs.jpg" alt="Video Thumbnail" class="video-thumbnail"> <!-- Updated path -->
                    <div class="video-player-container"></div>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about"> <!-- Removed content-section class -->
            <h1><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="section-title-link">About BVisionsMedia</a></h1>
            <p class="section-description">Learn more about our passion and process.</p>
            <div class="section-content-wrapper"> <!-- Added wrapper -->
                <h2>Our Story</h2>
                <p>BVisionsMedia started with a passion for visual storytelling. We believe that every moment, event, or project has a unique story waiting to be told. Our mission is to capture these stories with creativity, professionalism, and technical expertise.</p>
                <h2>Our Approach</h2>
                <p>We work closely with our clients to understand their vision and goals. Whether it's a wedding, a corporate event, or a real estate listing, we tailor our approach to deliver exceptional results that exceed expectations. We combine state-of-the-art equipment with artistic vision to create compelling photos and videos.</p>
                <h2>Meet the Team (Optional)</h2>
                <p>[Placeholder for team member introductions or a general statement about the team's experience.]</p>
            </div>
        </section>

        <!-- Media Services Snippet Section -->
        <section id="media-services-snippet"> <!-- Removed content-section class -->
            <h1><a href="<?php echo esc_url( home_url( '/media-services/' ) ); ?>" class="section-title-link">Our Media Services</a></h1>
            <p class="section-description">Explore the range of professional media services we offer.</p>
            <div class="section-content-wrapper"> <!-- Added wrapper -->
                <div class="service-tiles-grid">
                    <a href="<?php echo esc_url( home_url( '/video-production-services/' ) ); ?>" class="service-tile video-production-tile" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/service-tiles/video-production.jpg');">
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
                    <!-- Add more tiles if needed -->
                </div>
            </div>
        </section>


        <!-- Contact Section -->
        <section id="contact"> <!-- Removed content-section class -->
            <h1><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="section-title-link">Contact Us</a></h1>
            <p class="section-description">Get in touch to discuss your project.</p>
            <div class="section-content-wrapper contact-layout"> <!-- Added wrapper and layout class -->
                <div class="contact-form"> <!-- Renamed class -->
                    <h2>Send Us a Message</h2>
                    <?php // Placeholder for contact form - Use a plugin like WPForms or Contact Form 7 ?>
                    <form action="#" method="post"> <!-- Needs backend processing -->
                        <div class="form-group">
                         <label for="name">Name:</label>
                         <input type="text" id="name" name="name" required>
                     </div>
                     <div class="form-group">
                         <label for="email">Email:</label>
                         <input type="email" id="email" name="email" required>
                     </div>
                     <div class="form-group">
                         <label for="subject">Subject:</label>
                         <input type="text" id="subject" name="subject">
                     </div>
                     <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="cta-button">Send Message</button>
                    </form>
                </div>
                <div class="contact-info"> <!-- Renamed class -->
                    <h2>Other Ways to Reach Us</h2>
                    <p>Email: <a href="mailto:info@bvisionsmedia.com">info@bvisionsmedia.com</a></p>
                    <p>Phone: (555) 123-4567</p>
                <!-- Add social media links if available -->
            </div>
        </section>

    </main><!-- #primary -->

<?php
get_footer();
?>
