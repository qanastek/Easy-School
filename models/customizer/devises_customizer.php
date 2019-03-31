<?php

/*Image 1*/
	$wp_customize->add_setting(
		'image_devise_1',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control( new WP_Customize_Media_Control(
		$wp_customize, 'image_devise_1',
		array(
			'label' => __( 'Image of the first motto', 'easy_school_wp' ),
			'description' => __( "Choose a image for the first motto.", 'easy_school_wp' ),

			'section' => 'devise_section',

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

	/*Devise 1_title*/
	$wp_customize->add_setting(
		'devise_1_title',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'devise_1_title',
	    array
	    (
	      'label' => __( 'Title of the first motto', 'easy_school_wp' ),
	      'description' => __( ' ', 'easy_school_wp' ),

	      'section' => 'devise_section',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid #999',
	         'placeholder' => __( 'GROWING', 'easy_school_wp' ),
	      ),
	    )
	);

	/*Devise 1*/
	$wp_customize->add_setting(
		'devise_1',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'devise_1',
	    array
	    (
	      'label' => __( 'The motto content', 'easy_school_wp' ),
	      'description' => __( ' ', 'easy_school_wp' ),

	      'section' => 'devise_section',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'textarea',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid #999',
	         'placeholder' => __( 'Devenir autonome, progresser et acquérir le sens de la responsabilité tout en apprenant.', 'easy_school_wp' ),
	      ),
	    )
	);

	/*Image 2*/
	$wp_customize->add_setting(
		'image_devise_2',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control( new WP_Customize_Media_Control(
		$wp_customize, 'image_devise_2',
		array(
			'label' => __( 'Image seconde devise', 'easy_school_wp' ),
			'description' => __( "Choisissez l'image de la première devise.", 'easy_school_wp' ),

			'section' => 'devise_section',

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

	/*Devise 2_title*/
	$wp_customize->add_setting(
		'devise_2_title',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'devise_2_title',
	    array
	    (
	      'label' => __( 'Titre de la seconde devise', 'easy_school_wp' ),
	      'description' => __( ' ', 'easy_school_wp' ),

	      'section' => 'devise_section',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid #999',
	         'placeholder' => __( 'LIVE TOGETHER', 'easy_school_wp' ),
	      ),
	    )
	);

	/*Devise 2*/
	$wp_customize->add_setting(
		'devise_2',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'devise_2',
	    array
	    (
	      'label' => __( 'The motto content', 'easy_school_wp' ),
	      'description' => __( ' ', 'easy_school_wp' ),

	      'section' => 'devise_section',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'textarea',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid #999',
	         'placeholder' => __( 'Apprendre le respect de soi et des autres, respecter l’autorité des équipes éducatives, mettre en priorité l’entraide.', 'easy_school_wp' ),
	      ),
	    )
	);

	/*Image 3*/
	$wp_customize->add_setting(
		'image_devise_3',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control( new WP_Customize_Media_Control(
		$wp_customize, 'image_devise_3',
		array(
			'label' => __( 'Third motto image', 'easy_school_wp' ),
			'description' => __( "Choose this image.", 'easy_school_wp' ),

			'section' => 'devise_section',

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

	/*Devise 3_title*/
	$wp_customize->add_setting(
		'devise_3_title',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'devise_3_title',
	    array
	    (
	      'label' => __( 'Title of the third motto', 'easy_school_wp' ),
	      'description' => __( ' ', 'easy_school_wp' ),

	      'section' => 'devise_section',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid #999',
	         'placeholder' => __( 'LEARN', 'easy_school_wp' ),
	      ),
	    )
	);

	/*Devise 3*/
	$wp_customize->add_setting(
		'devise_3',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'devise_3',
	    array
	    (
	      'label' => __( 'The motto content', 'easy_school_wp' ),
	      'description' => __( ' ', 'easy_school_wp' ),

	      'section' => 'devise_section',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'textarea',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid #999',
	         'placeholder' => __( 'Apprendre les bases de la vie en société dans un environement agréable et bon vivre.', 'easy_school_wp' ),
	      ),
	    )
	);