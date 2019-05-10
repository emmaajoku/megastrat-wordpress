<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Wplms_Vibe_Iframe extends \Elementor\Widget_Base  // We'll use this just to avoid function name conflicts 
{
	function init(){
       add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );
    }


    public function get_name() {
		return 'vibe_iframe';
	}

	public function get_title() {
		return __( 'Vibe Iframe', 'vibe-customtypes' );
	}

	public function get_icon() {
		return 'fa fa-exchange';
	}

	public function get_categories() {
		return [ 'wplms' ];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Controls', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'height',
			[
				'label' => __( 'Enter iframe Height', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'enter height', 'vibe-customtypes' ),
			]
		);

		$this->add_control(
			'src',
			[
				'label' => __( 'Enter iframe URL', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'URl', 'vibe-customtypes' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$shortcode = '[iframe height="'.($settings['height']).'"] '.($settings['src']).' [/iframe]';

		echo do_shortcode($shortcode);
	}
}