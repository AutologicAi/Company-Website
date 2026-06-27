<?php
/**
 * Spotlight on the Data Integration solution (ignate-style platform offering).
 *
 * @package autologicai
 */
?>
<section class="section solutions" id="solutions">
	<div class="container solutions-inner">
		<div class="solutions-copy reveal">
			<span class="eyebrow"><?php echo autologicai_icon( 'integrate' ); ?> <?php esc_html_e( 'Solution Spotlight', 'autologicai' ); ?></span>
			<h2 class="section-title"><?php esc_html_e( 'A unified Data Integration platform for the AI era', 'autologicai' ); ?></h2>
			<p class="section-lead">
				<?php esc_html_e( 'Our integration solution unifies fragmented systems into a single, governed data fabric — connecting applications, databases, SaaS, and event streams so your AI and analytics run on trusted, real-time data.', 'autologicai' ); ?>
			</p>
			<div class="solutions-features">
				<div class="solutions-feature">
					<h4><?php echo autologicai_icon( 'spark' ); ?> <?php esc_html_e( 'Connect anything', 'autologicai' ); ?></h4>
					<p><?php esc_html_e( 'Pre-built connectors for databases, SaaS apps, files, and APIs with no-code mapping.', 'autologicai' ); ?></p>
				</div>
				<div class="solutions-feature">
					<h4><?php echo autologicai_icon( 'data' ); ?> <?php esc_html_e( 'Move in real time', 'autologicai' ); ?></h4>
					<p><?php esc_html_e( 'Change data capture and streaming keep every destination continuously in sync.', 'autologicai' ); ?></p>
				</div>
				<div class="solutions-feature">
					<h4><?php echo autologicai_icon( 'quality' ); ?> <?php esc_html_e( 'Trust every record', 'autologicai' ); ?></h4>
					<p><?php esc_html_e( 'Built-in validation, lineage, and governance so data stays accurate and auditable.', 'autologicai' ); ?></p>
				</div>
				<div class="solutions-feature">
					<h4><?php echo autologicai_icon( 'cloud' ); ?> <?php esc_html_e( 'Deploy anywhere', 'autologicai' ); ?></h4>
					<p><?php esc_html_e( 'Cloud, hybrid, or on-prem — with elastic scale and enterprise security.', 'autologicai' ); ?></p>
				</div>
			</div>
			<a class="btn btn-primary" href="#contact"><?php esc_html_e( 'See it in action', 'autologicai' ); ?> <?php echo autologicai_icon( 'arrow' ); ?></a>
		</div>

		<div class="solutions-visual reveal">
			<div class="integration-diagram">
				<div class="int-sources">
					<span><?php esc_html_e( 'CRM', 'autologicai' ); ?></span>
					<span><?php esc_html_e( 'ERP', 'autologicai' ); ?></span>
					<span><?php esc_html_e( 'SaaS', 'autologicai' ); ?></span>
					<span><?php esc_html_e( 'Databases', 'autologicai' ); ?></span>
				</div>
				<div class="int-core">
					<div class="int-core-ring">
						<?php echo autologicai_icon( 'integrate' ); ?>
						<strong><?php esc_html_e( 'autologicAI', 'autologicai' ); ?></strong>
						<span><?php esc_html_e( 'Integration Fabric', 'autologicai' ); ?></span>
					</div>
				</div>
				<div class="int-targets">
					<span><?php esc_html_e( 'Lakehouse', 'autologicai' ); ?></span>
					<span><?php esc_html_e( 'Analytics', 'autologicai' ); ?></span>
					<span><?php esc_html_e( 'AI Models', 'autologicai' ); ?></span>
					<span><?php esc_html_e( 'Apps', 'autologicai' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
