public function init() {

		// Register Widget Scripts
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );

	}

	public function widget_scripts() {

		wp_register_script( 'some-library', plugins_url( 'js/libs/some-library.js', __FILE__ ) );
		wp_register_script( 'widget-1', plugins_url( 'js/widget-1.js', __FILE__ ) );
		wp_register_script( 'widget-2', plugins_url( 'js/widget-2.js', __FILE__ ), [ 'jquery', 'some-library' ] );

	}
