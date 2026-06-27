<?php
/**
 * Fallback template — used for the blog index and as the ultimate fallback.
 *
 * @package autologicai
 */

get_header();
?>
<section class="section">
	<div class="container content-narrow">
		<?php if ( have_posts() ) : ?>
			<div class="post-list">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'post-card' ); ?>>
						<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="post-meta"><?php echo esc_html( get_the_date() ); ?></div>
						<div class="post-excerpt"><?php the_excerpt(); ?></div>
						<a class="btn btn-ghost" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'autologicai' ); ?></a>
					</article>
					<?php
				endwhile;

				the_posts_pagination();
			else :
				?>
				<h1 class="section-title"><?php esc_html_e( 'Nothing here yet', 'autologicai' ); ?></h1>
				<p class="section-lead"><?php esc_html_e( 'Content is on the way. In the meantime, explore what we do.', 'autologicai' ); ?></p>
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'autologicai' ); ?></a>
			<?php endif; ?>
	</div>
</section>
<?php
get_footer();
