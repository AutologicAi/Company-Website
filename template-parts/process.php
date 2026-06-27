<?php
/**
 * Engagement process / how we work.
 *
 * @package autologicai
 */

$steps = array(
	array( '01', __( 'Discover', 'autologicai' ), __( 'We assess your systems, data, and goals to find where AI delivers measurable value.', 'autologicai' ) ),
	array( '02', __( 'Design', 'autologicai' ), __( 'We architect the solution and a delivery roadmap with clear outcomes and guardrails.', 'autologicai' ) ),
	array( '03', __( 'Build', 'autologicai' ), __( 'Automation-first squads engineer, integrate, and test in rapid, transparent sprints.', 'autologicai' ) ),
	array( '04', __( 'Scale', 'autologicai' ), __( 'We harden, deploy, and operate — continuously improving with monitoring and feedback.', 'autologicai' ) ),
);
?>
<section class="section process" id="process">
	<div class="container">
		<div class="section-head reveal">
			<span class="eyebrow"><?php esc_html_e( 'How we work', 'autologicai' ); ?></span>
			<h2 class="section-title"><?php esc_html_e( 'From idea to production, the AI-native way', 'autologicai' ); ?></h2>
		</div>
		<div class="process-grid">
			<?php foreach ( $steps as $i => $step ) : ?>
				<div class="process-step reveal" style="--delay: <?php echo esc_attr( $i * 80 ); ?>ms">
					<span class="process-num"><?php echo esc_html( $step[0] ); ?></span>
					<h3><?php echo esc_html( $step[1] ); ?></h3>
					<p><?php echo esc_html( $step[2] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
