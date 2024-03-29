<?php
function silkway_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'silkway_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'silkway_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'silkway_customize_register' );

function silkway_customize_partial_blogname() {
	bloginfo( 'name' );
}

function silkway_customize_partial_blogdescription() {
	bloginfo( 'description' );
}