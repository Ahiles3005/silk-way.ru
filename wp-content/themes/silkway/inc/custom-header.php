<?php
function silkway_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'silkway_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
//				'wp-head-callback'   => 'silkway_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'silkway_custom_header_setup' );
