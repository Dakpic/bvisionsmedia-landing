<?php
/**
 * Template Name: Contact Page
 *
 * @package B-Visions_Theme
 */

get_header();
?>

    <main id="primary" class="site-main"> <?php // Keep #primary for skip link ?>
        <!-- Contact Section -->
        <section id="contact">
            <h1><?php the_title(); // Use the page title set in WordPress ?></h1>
            <p class="section-description">Get in touch to discuss your project.</p>
            <div class="section-content-wrapper contact-layout"> <?php // Added wrapper and layout class from static CSS ?>
                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <?php
                    // Check if the page content exists (e.g., for a contact form shortcode)
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            // Display page content - useful for shortcodes from contact form plugins
                            the_content();
                        endwhile;
                    else :
                        // Fallback static form if no content/shortcode is provided
                    ?>
                        <form action="#" method="post"> <?php // Needs backend processing (e.g., plugin) ?>
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
                    <?php endif; ?>
                </div>
                <div class="contact-info">
                    <h2>Other Ways to Reach Us</h2>
                    <?php // Consider using Customizer or ACF for these details ?>
                    <p>Email: <a href="mailto:info@bvisionsmedia.com">info@bvisionsmedia.com</a></p>
                    <p>Phone: (555) 123-4567</p>
                </div>
            </div>
        </section>
    </main><!-- #primary -->

<?php
get_footer();
?>
