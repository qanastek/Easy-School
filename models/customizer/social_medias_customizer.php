<?php

/*Réseau social 1*/
	$wp_customize->add_setting(
		'social_media_facebook',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'social_media_facebook',
	    array
	    (
	      'label' => __( 'Go to Facebook', 'easy_school_wp' ),
	      'description' => __( 'For example: https://www.facebook.com/ipt.avignon/', 'easy_school_wp' ),

	      'section' => 'social_media_section',

	      'priority' => 1, // Optional. Order priority to load the control. Default: 10
	      'type' => 'url',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter Facebook ID ...', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Réseau social 2*/
	$wp_customize->add_setting(
		'social_media_instagram',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'social_media_instagram',
	    array
	    (
	      'label' => __( 'Go to Instagram', 'easy_school_wp' ),
	      'description' => __( 'For example: https://www.instagram.com/ipt.avignon/', 'easy_school_wp' ),

	      'section' => 'social_media_section',

	      'priority' => 2, // Optional. Order priority to load the control. Default: 10
	      'type' => 'url',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter Instagram ID ...', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Réseau social 3*/
	$wp_customize->add_setting(
		'social_media_twitter',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'social_media_twitter',
	    array
	    (
	      'label' => __( 'Go to Twitter', 'easy_school_wp' ),
	      'description' => __( 'For example: https://twitter.com/ipt.avignon', 'easy_school_wp' ),

	      'section' => 'social_media_section',

	      'priority' => 3, // Optional. Order priority to load the control. Default: 10
	      'type' => 'url',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter Twitter ID ...', 'easy_school_wp' ),
	      ),
	    )
	);