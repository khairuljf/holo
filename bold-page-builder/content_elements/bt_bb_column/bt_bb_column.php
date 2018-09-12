<?php

class bt_bb_column extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {

		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'width'    		   			=> '',
			'align'   		   			=> 'left',
			'vertical_align'   			=> 'top',
			'animation'		   			=> '',
			'padding'          			=> 'normal',
			'background_image'      	=> '',
			'inner_background_image'    => '',
			'background_color' 			=> '',
			'inner_background_color' 	=> '',
			'opacity'	       			=> '',
			'triangle'					=> ''
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}
		
		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = 'id="' . $el_id . '"';
		}

		$array = explode( '/', $width );

		if ( empty( $array ) || $array[0] == 0 || $array[1] == 0 ) {
			$width = 12;
		} else {
			$top = $array[0];
			$bottom = $array[1];
			
			$width = 12 * $top / $bottom;
			
			if ( ! is_int( $width ) || $width < 1 || $width > 12 ) {
				$width = 12;
			}
		}

		if ( $width == 2 ) {
			$class[] = 'col-md-2 col-sm-4 col-ms-12';
		} else if ( $width == 3 ) {
			$class[] = 'col-md-3 col-sm-6 col-ms-12';
		} else if ( $width == 4 ) {
			$class[] = 'col-md-4 col-ms-12';
		} else if ( $width == 6 ) {
			$class[] = 'col-md-6 col-sm-12';	
		} else if ( $width == 8 ) {
			$class[] = 'col-md-8 col-ms-12';
		} else {
			$class[] = 'col-md-' . $width . ' ' . 'col-ms-12';
		}
		
		if ( $align != '' ) {
			$class[] = $this->prefix . 'align' . '_' . $align;
		}
		
		if ( $vertical_align != '' ) {
			$class[] = $this->prefix . 'vertical_align' . '_' . $vertical_align;
		}
		
		if ( $animation != 'no_animation' && $animation != '' ) {
			$class[] = $this->prefix . 'animation' . '_' . $animation;
			$class[] = 'animate';
		}

		if ( $padding != '' ) {
			$class[] = $this->prefix . 'padding' . '_' . $padding;
		}

		$triangle_style = '';

		if ( $background_color != '' ) {
			$background_color = bt_bb_column::hex2rgb( $background_color );
			if ( $opacity == '' ) {
				$opacity = 1;
			}
			$el_style .= 'background-color: rgba(' . $background_color[0] . ', ' . $background_color[1] . ', ' . $background_color[2] . ', ' . $opacity . ');';
			$triangle_style .= 'border-color: rgba(' . $background_color[0] . ', ' . $background_color[1] . ', ' . $background_color[2] . ', ' . $opacity . ');';
		}

		if ( $triangle != '' ) {
			$class[] = $this->prefix . 'triangle' . '_' . $triangle;
		}

		$el_inner_style = '';
		
		if ( $inner_background_color != '' ) {
			$inner_background_color = bt_bb_column::hex2rgb( $inner_background_color );
			if ( $opacity == '' ) {
				$opacity = 1;
			}
			$el_inner_style .= 'background-color:rgba(' . $inner_background_color[0] . ', ' . $inner_background_color[1] . ', ' . $inner_background_color[2] . ', ' . $opacity . ');';
		}
		
		if ( $inner_background_image != '' ) {
			$inner_background_image = wp_get_attachment_image_src( $inner_background_image, 'full' );
			$inner_background_image_url = $inner_background_image[0];
			$el_inner_style .= 'background-image:url(\'' . $inner_background_image_url . '\');';	
			$class[] = 'bt_bb_column_inner_background_image';
		}
		
		if ( $el_inner_style != '' ) {
			$el_inner_style = ' style="' . $el_inner_style . '"';
		}
		
		if ( $background_image != '' ) {
			$background_image = wp_get_attachment_image_src( $background_image, 'full' );
			$background_image_url = $background_image[0];
			$el_style .= 'background-image:url(\'' . $background_image_url . '\');';	
			$class[] = 'bt_bb_column_background_image';
		}
		
		$style_attr = '';

		if ( $el_style != '' ) {
			$style_attr = 'style="' . $el_style . '"';
		}


		if ( $triangle_style != '' ) {
			$triangle_style = ' style="' . $triangle_style . '"';
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		$output = '<div ' . $id_attr . ' class="' . implode( ' ', $class ) . '" ' . $style_attr . ' data-width="' . $width . '">';
			$output .= '<div class="' . $this->shortcode . '_content"' . $el_inner_style . '>';
				$output .= wptexturize( do_shortcode( $content ) );
			$output .= '</div>';
			if ( $triangle != '' ) $output .= '<div class="' . $this->shortcode . '_triangle_box" ' . $triangle_style . '></div>';
		$output .= '</div>';

		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, array( 'name' => __( 'Column', 'bold-builder' ), 'description' => __( 'Column element', 'bold-builder' ), 'width_param' => 'width', 'container' => 'vertical', 'accept' => array( 'bt_bb_section' => false, 'bt_bb_row' => false, 'bt_bb_column' => false, 'bt_bb_column_inner' => false, 'bt_bb_tab_item' => false, 'bt_bb_accordion_item' => false, 'bt_bb_cost_calculator_item' => false, 'bt_cc_group' => false, 'bt_cc_multiply' => false, 'bt_cc_item' => false, 'bt_bb_content_slider_item' => false, 'bt_bb_google_maps_location' => false, '_content' => false ), 'accept_all' => true, 'toggle' => false,
			'params' => array(
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => __( 'Align', 'bold-builder' ), 'preview' => true,
					'value' => array(
						__( 'Left', 'bold-builder' ) => 'left',
						__( 'Right', 'bold-builder' ) => 'right',
						__( 'Center', 'bold-builder' ) => 'center'
					)
				),
				array( 'param_name' => 'vertical_align', 'type' => 'dropdown', 'heading' => __( 'Vertical align', 'bold-builder' ), 'preview' => true,
					'value' => array(
						__( 'Top', 'bold-builder' )     => 'top',
						__( 'Middle', 'bold-builder' )  => 'middle',
						__( 'Bottom', 'bold-builder' )  => 'bottom'
					)
				),
				array( 'param_name' => 'animation', 'type' => 'dropdown', 'heading' => __( 'Animation', 'bold-builder' ), 'preview' => true,
					'value' => array(
						__( 'No Animation', 'bold-builder' ) => 'no_animation',
						__( 'Fade In', 'bold-builder' ) => 'fade_in',
						__( 'Move Up', 'bold-builder' ) => 'move_up',
						__( 'Move Left', 'bold-builder' ) => 'move_left',
						__( 'Move Right', 'bold-builder' ) => 'move_right',
						__( 'Move Down', 'bold-builder' ) => 'move_down',
						__( 'Zoom in', 'bold-builder' ) => 'zoom_in',
						__( 'Zoom out', 'bold-builder' ) => 'zoom_out',
						__( 'Fade In / Move Up', 'bold-builder' ) => 'fade_in move_up',
						__( 'Fade In / Move Left', 'bold-builder' ) => 'fade_in move_left',
						__( 'Fade In / Move Right', 'bold-builder' ) => 'fade_in move_right',
						__( 'Fade In / Move Down', 'bold-builder' ) => 'fade_in move_down',
						__( 'Fade In / Zoom in', 'bold-builder' ) => 'fade_in zoom_in',
						__( 'Fade In / Zoom out', 'bold-builder' ) => 'fade_in zoom_out'
					)
				),				
				array( 'param_name' => 'padding', 'type' => 'dropdown', 'heading' => __( 'Padding', 'bold-builder' ), 'preview' => true,
					'value' => array(
						__( 'Normal', 'bold-builder' ) => 'normal',
						__( 'Double', 'bold-builder' ) => 'double',
						__( 'Text Indent', 'bold-builder' ) => 'text_indent'				
					)
				),
				array( 'param_name' => 'background_image', 'type' => 'attach_image',  'preview' => true, 'heading' => __( 'Background image', 'bold-builder' ), 'group' => __( 'Design', 'bold-builder' ) ),
				array( 'param_name' => 'inner_background_image', 'type' => 'attach_image',  'preview' => true, 'heading' => __( 'Inner background image', 'bold-builder' ), 'group' => __( 'Design', 'bold-builder' ) ),
				array( 'param_name' => 'background_color', 'type' => 'colorpicker', 'heading' => __( 'Background color', 'bold-builder' ), 'group' => __( 'Design', 'bold-builder' ) ),
				array( 'param_name' => 'inner_background_color', 'type' => 'colorpicker', 'heading' => __( 'Inner background color', 'bold-builder' ), 'group' => __( 'Design', 'bold-builder' ) ),
				array( 'param_name' => 'opacity', 'type' => 'textfield', 'heading' => __( 'Background color opacity (e.g. 0.4)', 'bold-builder' ), 'group' => __( 'Design', 'bold-builder' ) ),
				array( 'param_name' => 'triangle', 'type' => 'dropdown', 'heading' => __( 'Triangle', 'bold-builder' ),  'group' => __( 'Design', 'bold-builder'), 'description' => 'Set column background color in order to manage triangle color',
					'value' => array(
						__( 'No', 'bold-builder' ) => '',
						__( 'Top', 'bold-builder' ) => 'top',
						__( 'Bottom', 'bold-builder' ) => 'bottom',
						__( 'Left', 'bold-builder' ) => 'left',
						__( 'Right', 'bold-builder' ) => 'right'
					)
				)
			)
		) );
	}

	static function hex2rgb( $hex ) {
		$hex = str_replace( '#', '', $hex );
		if ( strlen( $hex ) == 3 ) {
			$r = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
			$g = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
			$b = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
		} else {
			$r = hexdec( substr( $hex, 0, 2 ) );
			$g = hexdec( substr( $hex, 2, 2 ) );
			$b = hexdec( substr( $hex, 4, 2 ) );
		}
		$rgb = array( $r, $g, $b );
		return $rgb;
	}	

}