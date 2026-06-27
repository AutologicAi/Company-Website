<?php
/**
 * Core services — the five modern, AI-focused offerings.
 *
 * @package autologicai
 */

$services = array(
	array(
		'icon'  => 'ai',
		'tag'   => __( 'Build', 'autologicai' ),
		'title' => __( 'AI Application Development', 'autologicai' ),
		'desc'  => __( 'Design and ship AI-native products — from LLM copilots and RAG assistants to agentic workflows — engineered for production, security, and scale.', 'autologicai' ),
		'items' => array(
			__( 'Generative AI & LLM apps', 'autologicai' ),
			__( 'Agentic & RAG architectures', 'autologicai' ),
			__( 'MLOps & responsible AI', 'autologicai' ),
		),
	),
	array(
		'icon'  => 'modernize',
		'tag'   => __( 'Modernize', 'autologicai' ),
		'title' => __( 'Legacy Modernization with AI', 'autologicai' ),
		'desc'  => __( 'Use AI to accelerate the hardest part of modernization — understanding legacy code, refactoring, and re-platforming monoliths into cloud-native services.', 'autologicai' ),
		'items' => array(
			__( 'AI-assisted code analysis', 'autologicai' ),
			__( 'Automated refactoring & migration', 'autologicai' ),
			__( 'Monolith to microservices', 'autologicai' ),
		),
	),
	array(
		'icon'  => 'data',
		'tag'   => __( 'Data', 'autologicai' ),
		'title' => __( 'AI-Integrated Data Engineering', 'autologicai' ),
		'desc'  => __( 'Build trusted, AI-ready data platforms — pipelines, lakehouses, and feature stores — with intelligence baked into ingestion, quality, and governance.', 'autologicai' ),
		'items' => array(
			__( 'Lakehouse & streaming pipelines', 'autologicai' ),
			__( 'AI-driven data quality', 'autologicai' ),
			__( 'Vector & feature stores', 'autologicai' ),
		),
	),
	array(
		'icon'  => 'integrate',
		'tag'   => __( 'Integrate', 'autologicai' ),
		'title' => __( 'Data Integration Solutions', 'autologicai' ),
		'desc'  => __( 'Connect every system with a unified integration layer — ELT/ETL, APIs, and event streams — so data moves reliably across your enterprise in real time.', 'autologicai' ),
		'items' => array(
			__( 'ELT/ETL & CDC pipelines', 'autologicai' ),
			__( 'API & event-driven integration', 'autologicai' ),
			__( 'Master data & catalog', 'autologicai' ),
		),
	),
	array(
		'icon'  => 'quality',
		'tag'   => __( 'Assure', 'autologicai' ),
		'title' => __( 'AI-Augmented Quality Engineering', 'autologicai' ),
		'desc'  => __( 'Shift quality left with AI — self-healing test automation, intelligent test generation, and predictive defect analytics across the delivery lifecycle.', 'autologicai' ),
		'items' => array(
			__( 'AI test generation', 'autologicai' ),
			__( 'Self-healing automation', 'autologicai' ),
			__( 'Predictive defect analytics', 'autologicai' ),
		),
	),
);
?>
<section class="section services" id="services">
	<div class="container">
		<div class="section-head reveal">
			<span class="eyebrow"><?php esc_html_e( 'What we do', 'autologicai' ); ?></span>
			<h2 class="section-title"><?php esc_html_e( 'Five capabilities, one AI-native delivery model', 'autologicai' ); ?></h2>
			<p class="section-lead"><?php esc_html_e( 'We have evolved from traditional IT services into an AI-first engineering partner. Each capability is delivered by automation-first teams accountable to your outcomes.', 'autologicai' ); ?></p>
		</div>

		<div class="card-grid">
			<?php foreach ( $services as $i => $service ) : ?>
				<article class="service-card reveal" style="--delay: <?php echo esc_attr( $i * 60 ); ?>ms">
					<div class="service-icon"><?php echo autologicai_icon( $service['icon'] ); ?></div>
					<span class="service-tag"><?php echo esc_html( $service['tag'] ); ?></span>
					<h3><?php echo esc_html( $service['title'] ); ?></h3>
					<p><?php echo esc_html( $service['desc'] ); ?></p>
					<ul class="service-list">
						<?php foreach ( $service['items'] as $item ) : ?>
							<li><?php echo autologicai_icon( 'check' ); ?> <?php echo esc_html( $item ); ?></li>
						<?php endforeach; ?>
					</ul>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
