<?php
/**
 * Why autologicAI — differentiators.
 *
 * @package autologicai
 */

$reasons = array(
	array( __( 'Outcome-based delivery', 'autologicai' ), __( 'We price and deliver against business outcomes, not hours.', 'autologicai' ) ),
	array( __( 'Automation-first teams', 'autologicai' ), __( 'AI and automation are built into how every team works.', 'autologicai' ) ),
	array( __( 'Decades of delivery', 'autologicai' ), __( 'World-class, certified engineers with deep enterprise experience.', 'autologicai' ) ),
	array( __( 'Responsible AI', 'autologicai' ), __( 'Security, governance, and explainability are non-negotiable.', 'autologicai' ) ),
	array( __( 'Self-driven squads', 'autologicai' ), __( 'Managed, accountable teams that move fast without hand-holding.', 'autologicai' ) ),
	array( __( 'Trusted partnership', 'autologicai' ), __( 'A long-term partner invested in your success, not a vendor.', 'autologicai' ) ),
);
?>
<section class="section why" id="why">
	<div class="container">
		<div class="why-layout">
			<div class="why-intro reveal" id="about">
				<span class="eyebrow"><?php esc_html_e( 'Why autologicAI', 'autologicai' ); ?></span>
				<h2 class="section-title"><?php esc_html_e( 'A technology partner rebuilt around AI', 'autologicai' ); ?></h2>
				<p class="section-lead"><?php esc_html_e( 'We started in traditional IT services. As the industry evolved, so did we — re-centering every offering around applied AI, automation, and measurable value. The result is a partner that builds end to end for you.', 'autologicai' ); ?></p>
				<a class="btn btn-ghost" href="#contact"><?php esc_html_e( 'Work with us', 'autologicai' ); ?> <?php echo autologicai_icon( 'arrow' ); ?></a>
			</div>
			<div class="why-grid">
				<?php foreach ( $reasons as $i => $reason ) : ?>
					<div class="why-card reveal" style="--delay: <?php echo esc_attr( $i * 50 ); ?>ms">
						<span class="why-check"><?php echo autologicai_icon( 'check' ); ?></span>
						<div>
							<h3><?php echo esc_html( $reason[0] ); ?></h3>
							<p><?php echo esc_html( $reason[1] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
