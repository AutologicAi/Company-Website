<?php
/**
 * Impact stats.
 *
 * @package autologicai
 */

$stats = array(
	array( '40%', __( 'faster time to market', 'autologicai' ) ),
	array( '30%+', __( 'cost reduction', 'autologicai' ) ),
	array( '2&times;', __( 'engineering throughput', 'autologicai' ) ),
	array( '99.9%', __( 'platform reliability', 'autologicai' ) ),
);
?>
<section class="section stats">
	<div class="container">
		<div class="stats-grid reveal">
			<?php foreach ( $stats as $stat ) : ?>
				<div class="stat">
					<strong class="stat-num"><?php echo wp_kses_post( $stat[0] ); ?></strong>
					<span class="stat-label"><?php echo esc_html( $stat[1] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
