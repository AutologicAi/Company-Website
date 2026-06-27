<?php
/**
 * Default page template.
 *
 * @package autologicai
 */

get_header();
?>
<section class="section page-hero">
	<div class="container content-narrow">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<header class="page-header reveal">
				<h1 class="section-title"><?php the_title(); ?></h1>
			</header>
			<div class="page-content reveal">
				<?php
				the_content();

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'autologicai' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>
			<?php
		endwhile;
		?>
	</div>
</section>
<?php
get_footer();
