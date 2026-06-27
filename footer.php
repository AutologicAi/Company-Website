<?php
/**
 * Theme footer.
 *
 * @package autologicai
 */
?>
</main><!-- #main -->

<footer class="site-footer" id="contact">
	<div class="container footer-grid">
		<div class="footer-brand">
			<a class="brand-mark" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<span class="brand-logo" aria-hidden="true">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3.5"/><path d="M12 2v3M12 19v3M2 12h3M19 12h3M5.2 5.2l2 2M16.8 16.8l2 2M18.8 5.2l-2 2M7.2 16.8l-2 2"/></svg>
				</span>
				<span class="brand-name">autologic<strong>AI</strong></span>
			</a>
			<p class="footer-tagline"><?php esc_html_e( 'AI-native engineering for application development, modernization, data, and quality.', 'autologicai' ); ?></p>
			<div class="footer-contact">
				<a href="mailto:sales@autologicai.com"><?php echo autologicai_icon( 'mail' ); ?> sales@autologicai.com</a>
				<a href="mailto:info@autologicai.com"><?php echo autologicai_icon( 'mail' ); ?> info@autologicai.com</a>
				<span><?php echo autologicai_icon( 'pin' ); ?> 8 The Green, STE 4000, Dover, DE 19901</span>
			</div>
		</div>

		<div class="footer-col">
			<h3><?php esc_html_e( 'Services', 'autologicai' ); ?></h3>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'AI Application Development', 'autologicai' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Legacy Modernization with AI', 'autologicai' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'AI-Integrated Data Engineering', 'autologicai' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#solutions' ) ); ?>"><?php esc_html_e( 'Data Integration Solutions', 'autologicai' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'AI-Augmented Quality Engineering', 'autologicai' ); ?></a></li>
			</ul>
		</div>

		<div class="footer-col">
			<h3><?php esc_html_e( 'Company', 'autologicai' ); ?></h3>
			<?php
			if ( has_nav_menu( 'footer' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'footer-menu',
						'depth'          => 1,
					)
				);
			} else {
				echo '<ul class="footer-menu">';
				echo '<li><a href="' . esc_url( home_url( '/#about' ) ) . '">' . esc_html__( 'About Us', 'autologicai' ) . '</a></li>';
				echo '<li><a href="' . esc_url( home_url( '/#why' ) ) . '">' . esc_html__( 'Why autologicAI', 'autologicai' ) . '</a></li>';
				echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">' . esc_html__( 'Contact', 'autologicai' ) . '</a></li>';
				echo '</ul>';
			}
			?>
		</div>

		<div class="footer-col footer-cta">
			<h3><?php esc_html_e( 'Start a conversation', 'autologicai' ); ?></h3>
			<p><?php esc_html_e( 'Tell us where AI can move the needle. We will map it to outcomes.', 'autologicai' ); ?></p>
			<a class="btn btn-primary" href="mailto:sales@autologicai.com"><?php esc_html_e( 'Email our team', 'autologicai' ); ?></a>
		</div>
	</div>

	<div class="container footer-bottom">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> autologicAI. <?php esc_html_e( 'All rights reserved.', 'autologicai' ); ?></p>
		<p><?php esc_html_e( 'Harnessing AI to deliver unparalleled business value.', 'autologicai' ); ?></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
