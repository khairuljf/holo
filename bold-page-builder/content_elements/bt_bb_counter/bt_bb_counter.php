<?php

class bt_bb_counter extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'icon'     		=> '',
			'number'   		=> '',
			'title'			=> '',
			'size'     		=> '',
			'style'    		=> '',
			'icon_size'     => '',
			'color_scheme'  => ''
		) ), $atts, $this->shortcode ) );
		
		$class = array(); //array( $this->shortcode );
		
		$class[] = 'bt_bb_counter_holder';

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . $el_id . '"';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . $el_style . '"';
		}

		if ( $size != '' ) {
			$class[] = $this->prefix . 'size' . '_' . $size;
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		$class_attr = implode( ' ', $class );
		
		if ( $el_class != '' ) {
			$class_attr = $class_attr . ' ' . $el_class;
		}

		$icon = bt_bb_icon::get_html( $icon, '');

		$output = '<div class="' . $this->shortcode . '_content">';
			//if ( $icon != '' ) $output .= '<div class="' . $this->shortcode . '_icon">' . $icon . '</div>';
			if ( $icon != '' ) $output .= $icon;
			$output .= '<div class="' . $this->shortcode . '_box">';
				$output .= '<span class="bt_bb_counter animate" data-digit-length="' . strlen( $number ) . '">';		
					for ( $i = 0; $i < strlen( $number ); $i++ ) {
							
						$output .= '<span class="onedigit p' . ( strlen( $number ) - $i ) . ' d' . $number[ $i ] . '" data-digit="' . $number[ $i ] . '">';
							
							if ( ctype_digit( $number[ $i ] ) ) {
								for ( $j = 0; $j <= 9; $j++ ) {
									$output .= '<span class="n' . $j . '">' . $j . '</span>';
								}
								$output .= '<span class="n0">0</span>';				
							} else {
								$output .= '<span class="t">' . $number[ $i ] . '</span>';	
							}
						$output .= '</span>';
					}
				$output .= '</span>';
				$output .= '<div class="' . $this->shortcode . '_content_title">';
					$output .= '<span class="' . $this->shortcode . '_title">' . $title . '</span>';
				$output .= '</div>';
			$output .= '</div>';
		$output .= '</div>';
		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '>' . $output . '</div>';


		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
			
		return $output;
	}

	function map_shortcode() {

		if ( function_exists('boldthemes_get_icon_fonts_bb_array') ) {
			$icon_arr = boldthemes_get_icon_fonts_bb_array();
		} else {
			require_once( dirname(__FILE__) . '/../../../../../content_elements_misc/fa_icons.php' );
			require_once( dirname(__FILE__) . '/../../../../../content_elements_misc/s7_icons.php' );
			$icon_arr = array( 'Font Awesome' => bt_bb_fa_icons(), 'S7' => bt_bb_s7_icons() );
		}

		$color_scheme_arr = bt_bb_get_color_scheme_param_array();

		bt_bb_map( $this->shortcode, array( 'name' => __( 'Counter', 'bold-builder' ), 'description' => __( 'Animated counter', 'bold-builder' ), 
			'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => __( 'Icon', 'bold-builder' ), 'value' => $icon_arr, 'preview' => true ),
				array( 'param_name' => 'number', 'type' => 'textfield', 'heading' => __( 'Number', 'bold-builder' ), 'preview' => true ),
				array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => __( 'Title', 'bold-builder' ), 'preview' => true ),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => __( 'Counter size', 'bold-builder' ), 'preview' => true,
					'value' => array(
						__( 'Small', 'bold-builder' ) => 'small',
						__( 'Extra small', 'bold-builder' ) => 'xsmall',
						__( 'Normal', 'bold-builder' ) => 'normal',
						__( 'Large', 'bold-builder' ) => 'large',
						__( 'Extra large', 'bold-builder' ) => 'xlarge'		
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => __( 'Color scheme', 'bold-builder' ), 'value' => $color_scheme_arr, 'preview' => true ),
				)
			)
		) );
	}
}