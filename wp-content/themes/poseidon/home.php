<?php
/**
 * The template for displaying the blog index (latest posts)
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Poseidon
 */

get_header();

// Get Theme Options from Database.
$theme_options = poseidon_theme_options();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		// Display Magazine Homepage Widgets.
		if ( ! is_paged() && is_active_sidebar( 'magazine-homepage' ) ) : ?>

			<div id="magazine-homepage-widgets" class="widget-area clearfix">

				<?php dynamic_sidebar( 'magazine-homepage' ); ?>

			</div><!-- #magazine-homepage-widgets -->

			<?php
		endif;

		if ( have_posts() ) :

			// Display Latest Posts Title.
			if ( '' !== $theme_options['latest_posts_title'] ) : ?>

				<header class="page-header">

					<h2 class="archive-title"><?php echo wp_kses_post( $theme_options['latest_posts_title'] ); ?></h2>

				</header><!-- .page-header -->

			<?php endif; ?>

			<div id="post-wrapper" class="post-wrapper clearfix">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', esc_attr( $theme_options['post_content'] ) );

				endwhile; ?>

			</div>

			<?php poseidon_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
