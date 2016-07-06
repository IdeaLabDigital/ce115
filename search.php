<?php
/**
 * The template for displaying search results pages.
 *
 * @package idealabstarter
 * @since idealabstarter 1.0.0
 */

get_header(); ?>

<div class="page-wrap center-copy">

  <div class="row">
    <div class="large-12 columns">

			<?php do_action( 'idealabstarter_before_content' ); ?>

			<h4><?php _e( 'Search Results for', 'idealabstarter' ); ?> "<?php echo get_search_query(); ?>"</h4>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif;?>

			<?php do_action( 'idealabstarter_before_pagination' ); ?>

			<?php if ( function_exists( 'idealabstarter_pagination' ) ) { idealabstarter_pagination(); } else if ( is_paged() ) { ?>

				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'idealabstarter' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'idealabstarter' ) ); ?></div>
				</nav>
			<?php } ?>

			<?php do_action( 'idealabstarter_after_content' ); ?>
		</div>
	</div>

</div>
<?php get_footer();