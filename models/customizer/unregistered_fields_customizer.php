<?php

/*unspecified_content 1*/
	$wp_customize->add_setting(
		'image_default',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control( new WP_Customize_Media_Control(
		$wp_customize, 'image_default',
		array(
			'label' => __( "Default article image", 'easy_school_wp' ),
			'description' => __( "Choose a default image.", 'easy_school_wp' ),

			'section' => 'unspecified_content',

			'priority' => 10, // Optional. Order priority to load the control. Default: 10

			'mime_type' => 'image',  // Required. Can be image, audio, video, application, text
			'button_labels' => array
			(
			'select' => __( 'Choose a file', 'easy_school_wp' ),
			'change' => __( 'Choose a other file', 'easy_school_wp' ),
			'default' => __( 'Default', 'easy_school_wp' ),
			'remove' => __( 'Delete', 'easy_school_wp' ),
			'placeholder' => __( 'No file chosen', 'easy_school_wp' ),
			'frame_title' => __( 'Choose a file', 'easy_school_wp' ),
			'frame_button' => __( 'Choose a file', 'easy_school_wp' ),
			)
		)
	));

	/*unspecified_content 2*/
	$wp_customize->add_setting(
		'title_default',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'title_default',
	    array
	    (
	      'label' => __( "Default article title", 'easy_school_wp'  ),
	      'description' => __("This title will display when no title was record.", 'easy_school_wp' ),

	      'section' => 'unspecified_content',

	      'priority' => 20, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( "Something . . .", 'easy_school_wp' ),
	      ),
	    )
	);