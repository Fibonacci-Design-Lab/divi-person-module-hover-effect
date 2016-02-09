<?php
class FDL_Builder_Module_Team_Member extends ET_Builder_Module {
	function init() {
		$this->name = __( 'Person', 'et_builder' );
		$this->slug = 'et_pb_team_member';

		$this->whitelisted_fields = array(
			'name',
			'url',
			'url_new_window',
			'position',
			'image_url',
			'animation',
			'background_layout',
			'facebook_url',
			'twitter_url',
			'google_url',
			'linkedin_url',
			'content_new',
			'admin_label',
			'module_id',
			'module_class',
			'icon_color',
			'icon_hover_color',
		);

		$this->fields_defaults = array(
			'animation'         => array( 'off' ),
			'background_layout' => array( 'light' ),
		);

		$this->main_css_element = '%%order_class%%.et_pb_team_member';
		$this->advanced_options = array(
			'fonts' => array(
				'header' => array(
					'label'    => __( 'Header', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} h4",
					),
				),
				'body'   => array(
					'label'    => __( 'Body', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} *",
					),
				),
			),
			'background' => array(
				'settings' => array(
					'color' => 'alpha',
				),
			),
			'border' => array(),
			'custom_margin_padding' => array(
				'css' => array(
					'important' => 'all',
				),
			),
		);
		$this->custom_css_options = array(
			'member_image' => array(
				'label'    => __( 'Member Image', 'et_builder' ),
				'selector' => '.et_pb_team_member_image',
			),
			'member_description' => array(
				'label'    => __( 'Member Description', 'et_builder' ),
				'selector' => '.et_pb_team_member_description',
			),
			'title' => array(
				'label'    => __( 'Title', 'et_builder' ),
				'selector' => '.et_pb_team_member_description h4',
			),
			'member_position' => array(
				'label'    => __( 'Member Position', 'et_builder' ),
				'selector' => '.et_pb_member_position',
			),
			'member_social_links' => array(
				'label'    => __( 'Member Social Links', 'et_builder' ),
				'selector' => '.et_pb_member_social_links',
			),
		);
	}

	function get_fields() {
		$fields = array(
			'name' => array(
				'label'           => __( 'Name', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => __( 'Input the name of the person', 'et_builder' ),
			),
			'url' => array(
				'label'           => __( 'Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => __( 'input your destination URL here.', 'et_builder' ),
			),
			'url_new_window' => array(
				'label'           => __( 'Url Opens', 'et_builder' ),
				'type'            => 'select',
				'options'         => array(
					'off' => __( 'In The Same Window', 'et_builder' ),
					'on'  => __( 'In The New Tab', 'et_builder' ),
				),
				'description' => __( 'Open link in a new window', 'et_builder' ),
			),
			'position' => array(
				'label'           => __( 'Position', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => __( "Input the person's position.", 'et_builder' ),
			),
			'image_url' => array(
				'label'              => __( 'Image URL', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => __( 'Upload an image', 'et_builder' ),
				'choose_text'        => __( 'Choose an Image', 'et_builder' ),
				'update_text'        => __( 'Set As Image', 'et_builder' ),
				'description'        => __( 'Upload your desired image, or type in the URL to the image you would like to display.', 'et_builder' ),
			),
			'animation' => array(
				'label'             => __( 'Animation', 'et_builder' ),
				'type'              => 'select',
				'options'           => array(
					'off'     => __( 'No Animation', 'et_builder' ),
					'fade_in' => __( 'Fade In', 'et_builder' ),
					'left'    => __( 'Left To Right', 'et_builder' ),
					'right'   => __( 'Right To Left', 'et_builder' ),
					'top'     => __( 'Top To Bottom', 'et_builder' ),
					'bottom'  => __( 'Bottom To Top', 'et_builder' ),
				),
				'description'       => __( 'This controls the direction of the lazy-loading animation.', 'et_builder' ),
			),
			'background_layout' => array(
				'label'           => __( 'Text Color', 'et_builder' ),
				'type'            => 'select',
				'option_category' => 'color_option',
				'options'           => array(
					'light' => __( 'Dark', 'et_builder' ),
					'dark'  => __( 'Light', 'et_builder' ),
				),
				'description' => __( 'Here you can choose the value of your text. If you are working with a dark background, then your text should be set to light. If you are working with a light background, then your text should be dark.', 'et_builder' ),
			),
			'facebook_url' => array(
				'label'           => __( 'Facebook Profile Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => __( 'Input Facebook Profile Url.', 'et_builder' ),
			),
			'twitter_url' => array(
				'label'           => __( 'Twitter Profile Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => __( 'Input Twitter Profile Url', 'et_builder' ),
			),
			'google_url' => array(
				'label'           => __( 'Google+ Profile Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => __( 'Input Google+ Profile Url', 'et_builder' ),
			),
			'linkedin_url' => array(
				'label'           => __( 'LinkedIn Profile Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => __( 'Input LinkedIn Profile Url', 'et_builder' ),
			),
			'content_new' => array(
				'label'           => __( 'Description', 'et_builder' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => __( 'Input the main text content for your module here.', 'et_builder' ),
			),
			'icon_color' => array(
				'label'             => __( 'Icon Color', 'et_builder' ),
				'type'              => 'color',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
			),
			'icon_hover_color' => array(
				'label'             => __( 'Icon Hover Color', 'et_builder' ),
				'type'              => 'color',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
			),
			'disabled_on' => array(
				'label'           => __( 'Disable on', 'et_builder' ),
				'type'            => 'multiple_checkboxes',
				'options'         => array(
					'phone'   => __( 'Phone', 'et_builder' ),
					'tablet'  => __( 'Tablet', 'et_builder' ),
					'desktop' => __( 'Desktop', 'et_builder' ),
				),
				'additional_att'  => 'disable_on',
				'description'     => __( 'This will disable the module on selected devices', 'et_builder' ),
			),
			'admin_label' => array(
				'label'       => __( 'Admin Label', 'et_builder' ),
				'type'        => 'text',
				'description' => __( 'This will change the label of the module in the builder for easy identification.', 'et_builder' ),
			),
			'module_id' => array(
				'label'           => __( 'CSS ID', 'et_builder' ),
				'type'            => 'text',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'et_pb_custom_css_regular',
			),
			'module_class' => array(
				'label'           => __( 'CSS Class', 'et_builder' ),
				'type'            => 'text',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'et_pb_custom_css_regular',
			),
		);
		return $fields;
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {
		$module_id         = $this->shortcode_atts['module_id'];
		$module_class      = $this->shortcode_atts['module_class'];
		$name              = $this->shortcode_atts['name'];
		$url               = $this->shortcode_atts['url'];
		$position          = $this->shortcode_atts['position'];
		$image_url         = $this->shortcode_atts['image_url'];
		$url_new_window    = $this->shortcode_atts['url_new_window'];
		$animation         = $this->shortcode_atts['animation'];
		$facebook_url      = $this->shortcode_atts['facebook_url'];
		$twitter_url       = $this->shortcode_atts['twitter_url'];
		$google_url        = $this->shortcode_atts['google_url'];
		$linkedin_url      = $this->shortcode_atts['linkedin_url'];
		$background_layout = $this->shortcode_atts['background_layout'];
		$icon_color        = $this->shortcode_atts['icon_color'];
		$icon_hover_color  = $this->shortcode_atts['icon_hover_color'];

		$module_class = ET_Builder_Element::add_module_order_class( $module_class, $function_name );
		$image = $social_links = '';

		if ( '' !== $icon_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%% .et_pb_member_social_links a',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $icon_color )
				),
			) );
		}

		if ( '' !== $icon_hover_color ) {
			ET_Builder_Element::set_style( $function_name, array(
				'selector'    => '%%order_class%% .et_pb_member_social_links a:hover',
				'declaration' => sprintf(
					'color: %1$s;',
					esc_html( $icon_hover_color )
				),
			) );
		}

		if ( '' !== $facebook_url ) {
			$social_links .= sprintf(
				'<li><a href="%1$s" class="et_pb_font_icon et_pb_facebook_icon"><span>%2$s</span></a></li>',
				esc_url( $facebook_url ),
				esc_html__( 'Facebook', 'et_builder' )
			);
		}

		if ( '' !== $twitter_url ) {
			$social_links .= sprintf(
				'<li><a href="%1$s" class="et_pb_font_icon et_pb_twitter_icon"><span>%2$s</span></a></li>',
				esc_url( $twitter_url ),
				esc_html__( 'Twitter', 'et_builder' )
			);
		}

		if ( '' !== $google_url ) {
			$social_links .= sprintf(
				'<li><a href="%1$s" class="et_pb_font_icon et_pb_google_icon"><span>%2$s</span></a></li>',
				esc_url( $google_url ),
				esc_html__( 'Google+', 'et_builder' )
			);
		}

		if ( '' !== $linkedin_url ) {
			$social_links .= sprintf(
				'<li><a href="%1$s" class="et_pb_font_icon et_pb_linkedin_icon"><span>%2$s</span></a></li>',
				esc_url( $linkedin_url ),
				esc_html__( 'LinkedIn', 'et_builder' )
			);
		}

		if ( '' !== $social_links ) {
			$social_links = sprintf( '<ul class="et_pb_member_social_links">%1$s</ul>', $social_links );
		}

		if ( '' !== $image_url ) {
			$image = sprintf(
				'<div class="et_pb_team_member_image et-waypoint%3$s">
					<img src="%1$s" alt="%2$s" />	
				</div>',
				esc_attr( $image_url ),
				esc_attr( $name ),
				esc_attr( " et_pb_animation_{$animation}" )
			);
		}
		if ( '' !== $title && '' !== $url ) {
			$name = sprintf( '<a href="%1$s"%3$s>%2$s</a>',
				esc_url( $url ),
				esc_html( $title ),
				( 'on' === $url_new_window ? ' target="_blank"' : '' )
			);
		}
		$output = sprintf(
			'<div%3$s class="view et_pb_module et_pb_team_member%4$s%9$s et_pb_bg_layout_%8$s clearfix">
				%2$s
				<div class="et_pb_team_member_description fdl_overlay">
					%5$s
					%6$s
					%1$s
					%7$s
				</div> <!-- .et_pb_team_member_description -->
				</div> <!-- .et_pb_team_member -->',
			$this->shortcode_content,
			( '' !== $image ? $image : '' ),
			( '' !== $module_id ? sprintf( ' id="%1$s"', esc_attr( $module_id ) ) : '' ),
			( '' !== $module_class ? sprintf( ' %1$s', esc_attr( $module_class ) ) : '' ),
			( '' !== $name ? sprintf( '<h4>%1$s</h4>', esc_html( $name ) ) : '' ),
			( '' !== $position ? sprintf( '<p class="et_pb_member_position">%1$s</p>', esc_html( $position ) ) : '' ),
			$social_links,
			$background_layout,
			( '' === $image ? ' et_pb_team_member_no_image' : '' )
		);

		return $output;
	}
}
new ET_Builder_Module_Team_Member;
