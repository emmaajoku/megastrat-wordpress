<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Wplms_Vibe_Popup extends \Elementor\Widget_Base  // We'll use this just to avoid function name conflicts 
{
	function init(){
       add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );
    }


    public function get_name() {
		return 'vibe_popup';
	}

	public function get_title() {
		return __( 'Vibe Popup', 'vibe-customtypes' );
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
			'id',
			[
				'label' => __( 'popup id', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( '', 'vibe-customtypes' ),
			]
		);

		$this->add_control(
			'auto',
			[
				'label' => __( 'Show Popup on Page-load', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'0' => [
						'title' => __( 'No', 'plugin-domain' ),
						'icon' => 'fa fa-x',
					],
					'1' => [
						'title' => __( 'Yes', 'plugin-domain' ),
						'icon' => 'fa fa-check',
					],
				],
			]
		);

		$this->add_control(
			'classes',
			[
				'label' => __( 'Anchor Style', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
						'default' =>'Default',
						'btn'=> 'Button',
						'btn primary' => 'Primary'
				],
			]
		);

		$this->add_control(
			'content',
			[
				'label' => __( 'Popup/Modal Anchor', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => __( 'content', 'vibe-customtypes' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$shortcode = '[popup id="'.($settings['id']).'" auto="'.($settings['auto']).'" classes="'.($settings['classes']).'"] '.($settings['content']).' [/popup]';

		echo do_shortcode($shortcode);
	}
}