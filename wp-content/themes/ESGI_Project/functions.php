<?php
	function my_theme_support(){
		add_theme_support('title-tag');
	};

	function my_google_fonts() {
		wp_enqueue_style(
			'my-google-fonts',
			'https://fonts.googleapis.com/css2?family=Mulish:wght@200;700;800&display=swap',
			false
		);
	}

	function my_theme_css_and_js(){
		wp_enqueue_style('main', get_stylesheet_uri());
		wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
		wp_enqueue_script('main-js', get_template_directory_uri() .'/assets/js/main.js');
		wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js',[]);


		foreach( glob( get_template_directory(). '/assets/css/*.css' ) as $file ) {
			$file = str_replace(get_template_directory(), '', $file);
			wp_enqueue_style( $file.'style', get_template_directory_uri() . $file);
		}
	};

	function esgi_customize_register( $wp_customize ) {
		$wp_customize->add_setting( 'simplistic_body_bg', array(
			'default' => 'img/bright_squares.png'
		) );
	}

	function register_theme_settings($wp_customize) {
		$wp_customize->add_section( 'mytheme_options',
			array(
				'title'       => __('MyTheme Options RR', 'ESGI_Project' ), //Visible title of section
				'priority'    => 3, //Determines what order this appears in
				'capability'  => 'edit_theme_options', //Capability needed to tweak
				'description' => __('Allows you to customize some example settings for MyTheme.', 'ESGI_Project'), //Descriptive tooltip
			)
		);

		//2. Register new settings to the WP database...
		$wp_customize->add_setting( 'link_textcolor',
			array(
				'default'    => '#333333', //Default setting/value to save
				'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
				'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
				'transport'  => 'refresh', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
				'sanitize_callback'  => 'esc_attr', //sanitization (optional?)
			)
		);

		$wp_customize->get_setting( 'blogname' )->transport = 'refresh';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'refresh';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';
		$wp_customize->get_setting( 'background_color' )->transport = 'refresh';
	};

	function starter_customize_register( $wp_customize )
	{
		$wp_customize->add_section( 'starter_footer' , array(
			'title'    => __( 'Footer', 'starter' ),
			'priority' => 30
		) );

		$wp_customize->add_setting( 'setting_footer_logo', array(
			'default' => get_theme_file_uri('assets/images/ESGI.png'), // Add Default Image URL
			'sanitize_callback' => 'esc_url_raw'
		));

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'diwp_logo_control', array(
			'label'    => __( 'Logo footer', 'text-domain' ),
			'priority' => 20,
			'section' => 'starter_footer',
			'settings' => 'setting_footer_logo',
			'button_labels' => array(
				'select' => 'Selectionner le logo',
				'remove' => 'Retirer le logo',
				'change' => 'Changer le logo',
			)
		)));

		$wp_customize->selective_refresh->add_partial( 'setting_footer_logo', array(
			'selector' => '.site-name', // You can also select a css class
		) );

	}
	add_action( 'customize_register', 'starter_customize_register');

	function register_widget_areas() {

		// First footer widget area, located in the footer. Empty by default.
		register_sidebar(
			array(
				'name' => __( 'Footer first area', 'compass' ),
				'id' => 'first-footer-widget-area',
				'description' => __( 'Left first side area', 'compass' ),
				'before_widget' => '<div class="widget-column footer-widget-1">',
				'after_widget'=> '</div>',
			)
		);

		register_sidebar(
			array(
				'name' => __( 'Footer last area', 'compass' ),
				'id' => 'second-footer-widget-area',
				'description' => __( 'Left second side area', 'compass' ),
				'before_widget' => '<div class="widget-column footer-widget-2">',
				'after_widget'=> '</div>',
			)
		);

	}

	add_theme_support('customize-selective-refresh-widgets');

	add_action( 'customize_register' ,'register_theme_settings'  );


	add_action( 'widgets_init', 'register_widget_areas' );

	add_action( 'wp_enqueue_scripts', 'my_google_fonts' );

	add_action( 'customize_register', 'esgi_customize_register' );
	add_action('wp_enqueue_scripts', 'my_theme_css_and_js', 0);
