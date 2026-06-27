<?php
/**
 * Homepage template — the redesigned, AI-native landing experience.
 *
 * @package autologicai
 */

get_header();

get_template_part( 'template-parts/hero' );
get_template_part( 'template-parts/logos' );
get_template_part( 'template-parts/services' );
get_template_part( 'template-parts/solutions' );
get_template_part( 'template-parts/process' );
get_template_part( 'template-parts/why' );
get_template_part( 'template-parts/stats' );
get_template_part( 'template-parts/cta' );

get_footer();
