<?php
/**
 * Theme header.
 *
 * @package autologicai
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'autologicai' ); ?></a>

<header class="site-header" id="site-header">
	<div class="container header-inner">
		<div class="brand">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="brand-mark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<span class="brand-logo" aria-hidden="true">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3.5"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M5.2 5.2l2 2M16.8 16.8l2 2M18.8 5.2l-2 2M7.2 16.8l-2 2"/></svg>
					</span>
					<span class="brand-name">autologic<strong>AI</strong></span>
				</a>
			<?php endif; ?>
		</div>

		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary navigation', 'autologicai' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'nav-menu',
						'container'      => false,
					)
				);
			} else {
				autologicai_default_menu();
			}
			?>
		</nav>

		<div class="header-cta">
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Book a discovery call', 'autologicai' ); ?></a>
		</div>

		<button class="nav-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle menu', 'autologicai' ); ?>">
			<span></span><span></span><span></span>
		</button>
	</div>
</header>

<main id="main" class="site-main">
