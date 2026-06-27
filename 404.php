<?php
/**
 * 404 template.
 *
 * @package autologicai
 */

get_header();
?>
<section class="section page-hero">
	<div class="container content-narrow center">
		<span class="eyebrow"><?php esc_html_e( 'Error 404', 'autologicai' ); ?></span>
		<h1 class="section-title"><?php esc_html_e( 'This page took a different path.', 'autologicai' ); ?></h1>
		<p class="section-lead"><?php esc_html_e( 'The page you are looking for cannot be found. Let us get you back on track.', 'autologicai' ); ?></p>
		<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'autologicai' ); ?></a>
	</div>
</section>
<?php
get_footer();
