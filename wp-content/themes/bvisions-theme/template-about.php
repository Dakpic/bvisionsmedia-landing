<?php
/**
 * Template Name: About Page
 *
 * @package B-Visions_Theme
 */

get_header();
?>

    <?php // Add the 'about-page' class to the body tag via functions.php filter if needed, or add it here manually if simpler ?>
    <main id="primary" class="about-main site-main"> <?php // Keep #primary for skip link, add about-main ?>
        <div class="about-grid-container">
            <!-- Row 1: Text | Image -->
            <div class="grid-row">
                <div class="text-block color-1">
                    <?php // You might want to use ACF or Customizer for this content ?>
                    <h2>Our Story</h2>
                    <p>BVisionsMedia started with a passion for visual storytelling. We believe that every moment, event, or project has a unique story waiting to be told. Our mission is to capture these stories with creativity, professionalism, and technical expertise.</p>
                </div>
                <div class="image-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-story.jpg" alt="Placeholder image representing our story">
                </div>
            </div>

            <!-- Row 2: Image | Text -->
            <div class="grid-row">
                <div class="image-block">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-approach.jpg" alt="Placeholder image representing our approach">
                </div>
                <div class="text-block color-2">
                    <h2>Our Approach</h2>
                    <p>We work closely with our clients to understand their vision and goals. Whether it's a wedding, a corporate event, or a real estate listing, we tailor our approach to deliver exceptional results that exceed expectations. We combine state-of-the-art equipment with artistic vision to create compelling photos and videos.</p>
                </div>
            </div>

            <!-- Row 3: Text | Image -->
            <div class="grid-row">
                <div class="text-block color-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-person1.jpg" alt="Team Member 1 Photo" class="team-photo-inline">
                    <h3>Team Member One</h3>
                    <p class="team-title-inline">Role / Title</p>
                    <p class="team-bio-inline">[Placeholder for biography of the first team member. Describe their background, expertise, and passion related to media production.]</p>
                </div>
                <div class="image-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-person1-action.jpg" alt="Placeholder image representing team member one">
                </div>
            </div>

            <!-- Row 4: Image | Text -->
            <div class="grid-row">
                 <div class="image-block">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-person2-action.jpg" alt="Placeholder image representing team member two">
                </div>
                <div class="text-block color-4">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder-person2.jpg" alt="Team Member 2 Photo" class="team-photo-inline">
                    <h3>Team Member Two</h3>
                    <p class="team-title-inline">Role / Title</p>
                    <p class="team-bio-inline">[Placeholder for biography of the second team member. Describe their background, expertise, and passion related to media production.]</p>
                </div>
            </div>
        </div>
    </main><!-- #primary -->

<?php
get_footer();
?>
