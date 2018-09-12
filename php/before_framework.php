<?php

// Post Tag colud size
function bt_tag_cloud_filter($args = array()) {
    $args['smallest'] = 0.8;
    $args['largest'] = 0.8;
    $args['unit'] = 'em';
    return $args;
}

add_filter('widget_tag_cloud_args', 'bt_tag_cloud_filter', 90);

// Product headline size
if ( ! function_exists( 'boldthemes_product_headline_size' ) ) {
	function boldthemes_product_headline_size( $size ) {
		return 'large';
	}
}
add_filter( 'boldthemes_product_headline_size', 'boldthemes_product_headline_size' );


// Custom header style
if ( ! function_exists( 'boldthemes_customize_header_style' ) ) {
	function boldthemes_customize_header_style( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[header_style]', array(
			'default'           => BoldThemes_Customize_Default::$data['header_style'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'header_style', array(
			'label'     => esc_html__( 'Header Style', 'squadrone' ),
			'section'   => BoldThemesFramework::$pfx . '_header_footer_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[header_style]',
			'priority'  => 62,
			'type'      => 'select',
			'choices'   => array(
				'transparent-light'  	=> esc_html__( 'Transparent Light', 'squadrone' ),
				'transparent-dark'   	=> esc_html__( 'Transparent Dark', 'squadrone' ),
				'accent-light' 			=> esc_html__( 'Accent + Light', 'squadrone' ),
				'accent-dark' 			=> esc_html__( 'Accent + Dark', 'squadrone' ),
				'light-accent' 			=> esc_html__( 'Light + Accent ', 'squadrone' ),
				'light-dark' 			=> esc_html__( 'Light + Dark', 'squadrone' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_header_style' );

//Shop share
if ( ! function_exists( 'boldthemes_shop_share_settings' ) ) {
	function boldthemes_shop_share_settings() {
		return array( 'xsmall', 'filled', 'circle' ); // 
	}
}
add_filter( 'boldthemes_shop_share_settings', 'boldthemes_shop_share_settings' );