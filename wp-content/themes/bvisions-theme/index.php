<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package B-Visions_Theme
 */

get_header();
?>

	<main id="primary" class="site-main" style="padding-top: 100px;"> <?php // Add padding to clear fixed header ?>

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('section-content-wrapper'); ?>> <?php // Add wrapper class for basic centering ?>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title" style="text-align: left; color: #19468e;">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bvisions-theme' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bvisions-theme' ),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->

				</article><!-- #post-<?php the_ID(); ?> -->
				<?php

			endwhile; // End of the loop.

			// Previous/next page navigation.
			the_posts_navigation();

		else : // If no content, include the "No posts found" template. ?>

			<section class="no-results not-found section-content-wrapper">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'bvisions-theme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php
					if ( is_home() && current_user_can( 'publish_posts' ) ) :

						printf(
							'<p>' . wp_kses(
								/* translators: 1: link to WP admin new post page. */
								__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bvisions-theme' ),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							) . '</p>',
							esc_url( admin_url( 'post-new.php' ) )
						);

					elseif ( is_search() ) :
						?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bvisions-theme' ); ?></p>
						<?php
						get_search_form();

					else :
						?>

						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bvisions-theme' ); ?></p>
						<?php
						get_search_form();

					endif;
					?>
				</div><!-- .page-content -->
			</section><!-- .no-results -->

		<?php endif; ?>

	</main><!-- #primary -->

<?php
get_footer();
?>
