<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Wplms_Vibe_Sell_Content extends \Elementor\Widget_Base  // We'll use this just to avoid function name conflicts 
{
	function init(){
       add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );
    }


    public function get_name() {
		return 'vibe sell content';
	}

	public function get_title() {
		return __( 'Vibe Sell Content', 'vibe-customtypes' );
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
			'product_id',
			[
				'label' => __( 'Enter Product Id', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __('enter Product id', 'vibe-customtypes')
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$shortcode = '[sell_content product_id="'.($settings['product_id']).'"]';
		echo do_shortcode($shortcode);
	}
}