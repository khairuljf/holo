<?php

BoldThemes_Customize_Default::$data['body_font'] = 'Montserrat';
BoldThemes_Customize_Default::$data['heading_supertitle_font'] = 'Poppins';
BoldThemes_Customize_Default::$data['heading_font'] = 'Poppins';
BoldThemes_Customize_Default::$data['heading_subtitle_font'] = 'Merriweather';
BoldThemes_Customize_Default::$data['menu_font'] = 'Poppins';
BoldThemes_Customize_Default::$data['buttons_shape'] = 'hard-rounded';

BoldThemes_Customize_Default::$data['accent_color'] = '#01b1ec';
BoldThemes_Customize_Default::$data['alternate_color'] = '#fa5b13';
BoldThemes_Customize_Default::$data['logo_height'] = '80';

BoldThemes_Customize_Default::$data['template_skin'] = false;
BoldThemes_Customize_Default::$data['heading_style'] = 'default';

// OVERLAY LINES

BoldThemes_Customize_Default::$data['heading_style'] = 'default';

if ( ! function_exists( 'boldthemes_customize_heading_style' ) ) {
	function boldthemes_customize_heading_style( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[heading_style]', array(
			'default'           => BoldThemes_Customize_Default::$data['heading_style'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'heading_style', array(
			'label'     => esc_html__( 'Heading Style', 'squadrone' ),
			'section'   => BoldThemesFramework::$pfx . '_typography_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[heading_style]',
			'priority'  => 95,
			'type'      => 'select',
			'choices'   => array(
				'default' => esc_html__( 'Default', 'squadrone' ),
				'compact' => esc_html__( 'Compact (small line height + bold)', 'squadrone' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_heading_style' );

// NEW PARAM: IMAGE SLIDER

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_slider', array(
		array( 'param_name' => 'show_arrows',
			'type' => 'dropdown',
			'heading' => __( 'Show Arrows', 'squadrone' ),
			'preview' => true,
			'value' => array(
				__( 'Show', 'squadrone' ) => 'show',
				__( 'Hide', 'squadrone' ) => 'hide_arrows'
			)
		)
	) );
}

function squadrone_bt_bb_slider_class( $class, $atts ) {
	if ( isset( $atts['show_arrows'] ) && $atts['show_arrows'] != '' ) {
		$class[] = 'bt_bb_show_arrows' . '_' . $atts['show_arrows'];
	}
	return $class;
}
add_filter( 'bt_bb_slider_class', 'squadrone_bt_bb_slider_class', 10, 2 );


// NEW PARAM: PRICE LIST HIGHLIGHTED

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_price_list', array(
		array( 'param_name' => 'price_list_style',
			'type' => 'checkbox_group',
			'heading' => __( 'Show highlighted', 'squadrone' ),
			'preview' => true,
			'value' => array(
				__( 'Yes', 'squadrone' ) => 'show_highlighted'
			)
		)
	) );
}

function squadrone_bt_bb_price_list_class( $class, $atts ) {
	if ( isset( $atts['price_list_style'] ) && $atts['price_list_style'] != '' ) {
		$class[] = 'bt_bb_price_list_style' . '_' . $atts['price_list_style'];
	}
	return $class;
}
add_filter( 'bt_bb_price_list_class', 'squadrone_bt_bb_price_list_class', 10, 2 );