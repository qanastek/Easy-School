<?php

	/*Lundi, Mardi, Jeudi et Vendredi matin*/
	$wp_customize->add_setting(
		'days_1_2_4_5_am',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'days_1_2_4_5_am',
	    array
	    (
	      'label' => __( "Lundi, mardi, jeudi et vendredi matin", 'easy_school_wp' ),
	      'description' => __( '08H30 - 11H30', 'easy_school_wp' ),

	      'section' => 'schedule_section',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'url',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( '08H30 - 11H30', 'easy_school_wp' ),
	      ),
	    )
	);

	/*Lundi, Mardi, Jeudi et Vendredi après-midi*/
	$wp_customize->add_setting(
		'days_1_2_4_5_pm',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'days_1_2_4_5_pm',
	    array
	    (
	      'label' => __( "Lundi, mardi, jeudi et vendredi après-midi", 'easy_school_wp' ),
	      'description' => __( '13H30 - 16H30', 'easy_school_wp' ),

	      'section' => 'schedule_section',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'url',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( '13H30 - 16H30', 'easy_school_wp' ),
	      ),
	    )
	);

	/*Mercredi*/
	$wp_customize->add_setting(
		'days_3_full',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'days_3_full',
	    array
	    (
	      'label' => __( "Mercredi", 'easy_school_wp' ),
	      'description' => __( '08H30 - 11H30', 'easy_school_wp' ),

	      'section' => 'schedule_section',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'url',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( '08H30 - 11H30', 'easy_school_wp' ),
	      ),
	    )
	);