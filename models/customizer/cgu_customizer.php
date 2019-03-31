<?php

	/*cgu 1*/
	$wp_customize->add_setting(
		'url_website',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'url_website',
	    array
	    (
	      'label' => __( "Website URL", 'easy_school_wp' ),
	      'description' => __( 'For example: https://www.google.com', 'easy_school_wp' ),

	      'section' => 'C.G.U',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'url',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'https://www.google.com ...', 'easy_school_wp' ),
	      ),
	    )
	);

	/*cgu 2*/
	$wp_customize->add_setting(
		'email_webmaster',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'sanitize_email'
	   )
	);
	$wp_customize->add_control(
		'email_webmaster',
	    array
	    (
	      'label' => __( "Webmaster E-mail", 'easy_school_wp' ),
	      'description' => __('contact@example.com', 'easy_school_wp' ),

	      'section' => 'C.G.U',

	      'priority' => 20, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( "ipt.avignon@gmail.com ...", 'easy_school_wp' ),
	      ),
	    )
	);

	/*cgu 4*/
	$wp_customize->add_setting(
		'name_host',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'name_host',
	    array
	    (
	      'label' => __( "Web host name", 'easy_school_wp' ),
	      'description' => __('For example: OVH, 1&1, ect ...', 'easy_school_wp' ),

	      'section' => 'C.G.U',

	      'priority' => 40, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( "Web host name ...", 'easy_school_wp' ),
	      ),
	    )
	);

	/*cgu 5*/
	$wp_customize->add_setting(
		'adress_host',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'adress_host',
	    array
	    (
	      'label' => __( "Web host address", 'easy_school_wp' ),
	      'description' => __('Champ de Mars, 5 Avenue Anatole France', 'easy_school_wp' ),

	      'section' => 'C.G.U',

	      'priority' => 50, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( "Champ de Mars, 5 Avenue Anatole France ...", 'easy_school_wp' ),
	      ),
	    )
	);

	/*cgu 6*/
	$wp_customize->add_setting(
		'postal_host',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'postal_host',
	    array
	    (
	      'label' => __( "Web host postal code", 'easy_school_wp' ),
	      'description' => __('75 016, Paris', 'easy_school_wp' ),

	      'section' => 'C.G.U',

	      'priority' => 60, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( "75 016, Paris . . .", 'easy_school_wp' ),
	      ),
	    )
	);

	/*cgu 7*/
	$wp_customize->add_setting(
		'siret_host',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'siret_host',
	    array
	    (
	      'label' => __( "Web Host registration number", 'easy_school_wp' ),
	      'description' => __('For example: 111 222 333 000 11', 'easy_school_wp' ),

	      'section' => 'C.G.U',

	      'priority' => 70, // Optional. Order priority to load the control. Default: 10
	      'type' => 'number',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( "Registration number ...", 'easy_school_wp' ),
	      ),
	    )
	);

	/*Google analytics*/
	$wp_customize->add_setting(
		'google_analytics',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control( new WP_Customize_Control(
	 $wp_customize, //Pass the $wp_customize object (required)
	 'google_analytics', //Set a unique ID for the control
	 array(
	    'label'      => __( 'Do you have google analytics on your website ?', 'easy_school_wp' ), //Admin-visible name of the control
	    'description' => __( 'Select a anwser.' ),

	    'settings'   => 'google_analytics', //Which setting to load and manipulate (serialized is okay)
	    'priority'   => 80, //Determines the order this control appears in for the specified section
	    'section'    => 'C.G.U', //ID of the section this control should render in (can be one of yours, or a WordPress default section)

	    'type'    => 'select',
	    'choices' => array(
	        'yes' => 'yes',
	        'no' => 'no',
	    )
	)
	) );