<?php
/**
 * Hero section.
 *
 * @package autologicai
 */
?>
<section class="hero" id="top">
	<div class="hero-bg" aria-hidden="true">
		<div class="orb orb-1"></div>
		<div class="orb orb-2"></div>
		<div class="grid-overlay"></div>
	</div>
	<div class="container hero-inner">
		<div class="hero-copy reveal">
			<span class="eyebrow"><?php echo autologicai_icon( 'spark' ); ?> <?php esc_html_e( 'AI-Native Engineering Partner', 'autologicai' ); ?></span>
			<h1 class="hero-title">
				<?php esc_html_e( 'Build, modernize, and scale with', 'autologicai' ); ?>
				<span class="gradient-text"><?php esc_html_e( 'applied AI at the core.', 'autologicai' ); ?></span>
			</h1>
			<p class="hero-sub">
				<?php esc_html_e( 'autologicAI helps enterprises ship intelligent applications, modernize legacy systems with AI, engineer trusted data platforms, and raise quality — faster and at lower cost.', 'autologicai' ); ?>
			</p>
			<div class="hero-actions">
				<a class="btn btn-primary btn-lg" href="#contact"><?php esc_html_e( 'Start your AI roadmap', 'autologicai' ); ?> <?php echo autologicai_icon( 'arrow' ); ?></a>
				<a class="btn btn-ghost btn-lg" href="#services"><?php esc_html_e( 'Explore capabilities', 'autologicai' ); ?></a>
			</div>
			<ul class="hero-points">
				<li><?php echo autologicai_icon( 'check' ); ?> <?php esc_html_e( 'Outcome-based delivery', 'autologicai' ); ?></li>
				<li><?php echo autologicai_icon( 'check' ); ?> <?php esc_html_e( 'Automation-first teams', 'autologicai' ); ?></li>
				<li><?php echo autologicai_icon( 'check' ); ?> <?php esc_html_e( 'Enterprise-grade governance', 'autologicai' ); ?></li>
			</ul>
		</div>

		<div class="hero-visual reveal">
			<div class="hero-card">
				<div class="hero-card-head">
					<span class="dot"></span><span class="dot"></span><span class="dot"></span>
					<span class="hero-card-title">autologic.pipeline</span>
				</div>
				<div class="hero-card-body">
					<div class="flow-node"><?php echo autologicai_icon( 'ai' ); ?><span><?php esc_html_e( 'AI App Dev', 'autologicai' ); ?></span></div>
					<div class="flow-line"></div>
					<div class="flow-node"><?php echo autologicai_icon( 'modernize' ); ?><span><?php esc_html_e( 'Modernize', 'autologicai' ); ?></span></div>
					<div class="flow-line"></div>
					<div class="flow-node"><?php echo autologicai_icon( 'data' ); ?><span><?php esc_html_e( 'Data', 'autologicai' ); ?></span></div>
					<div class="flow-line"></div>
					<div class="flow-node"><?php echo autologicai_icon( 'quality' ); ?><span><?php esc_html_e( 'Quality', 'autologicai' ); ?></span></div>
				</div>
				<div class="hero-card-foot">
					<div class="metric"><strong>40%</strong><span><?php esc_html_e( 'faster delivery', 'autologicai' ); ?></span></div>
					<div class="metric"><strong>2&times;</strong><span><?php esc_html_e( 'test coverage', 'autologicai' ); ?></span></div>
					<div class="metric"><strong>99.9%</strong><span><?php esc_html_e( 'pipeline uptime', 'autologicai' ); ?></span></div>
				</div>
			</div>
		</div>
	</div>
</section>
