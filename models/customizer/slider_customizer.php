<?php

/*Image 1*/
	$wp_customize->add_setting(
		'image_1',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control( new WP_Customize_Media_Control(
		$wp_customize, 'image_1',
		array(
			'label' => __( 'Image 1', 'easy_school_wp' ),
			'description' => __( "Choose a image for the first layer of the slider.", 'easy_school_wp' ),

			'section' => 'image_section',

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
	/*Image 2*/
	$wp_customize->add_setting(
		'image_2',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control( new WP_Customize_Media_Control(
		$wp_customize, 'image_2',
		array(
			'label' => __( 'Image 2', 'easy_school_wp' ),
			'description' => __( "Choose a image for the second layer of the slider." , 'easy_school_wp' ),

			'section' => 'image_section',

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
	/*Image 3*/
	$wp_customize->add_setting(
		'image_3',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control( new WP_Customize_Media_Control(
		$wp_customize, 'image_3',
		array(
			'label' => __( 'Image 3', 'easy_school_wp' ),
			'description' => __( "Choose a image for the third layer of the slider." , 'easy_school_wp' ),

			'section' => 'image_section',

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