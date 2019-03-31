<?php

$wp_customize->add_section(
		'image_section',
		array
		(
			'title' => __( "Slider", 'easy_school_wp' ),
			'description' => __( 'Select your slider images.', 'easy_school_wp' ),

			'panel' => 'header_naviation_panel', // Only needed if adding your Section to a Panel

			'priority' => 10, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
			'description_hidden' => 'false', // Rarely needed. Default is False
		)
	);

	$wp_customize->add_section(
		'devise_section',
		array
		(
			'title' => __( 'The 3 mottos', 'easy_school_wp' ),
			'description' => __( 'Customize the mottos.', 'easy_school_wp' ),

			'panel' => 'header_naviation_panel', // Only needed if adding your Section to a Panel

			'priority' => 20, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
			'description_hidden' => 'false', // Rarely needed. Default is False
		)
	);

	$wp_customize->add_section(
		'social_media_section',
		array
		(
			'title' => __( 'Social networks', 'easy_school_wp' ),
			'description' => __( 'Set your social networks URL.', 'easy_school_wp' ),

			'panel' => 'header_naviation_panel', // Only needed if adding your Section to a Panel

			'priority' => 30, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
			'description_hidden' => 'false', // Rarely needed. Default is False
		)
	);

	$wp_customize->add_section(
		'basic_information',
		array
		(
			'title' => __( "Basics Informations", 'easy_school_wp' ),
			'description' => __( "School name, adress, phone and email.", 'easy_school_wp' ),

			'panel' => 'header_naviation_panel', // Only needed if adding your Section to a Panel

			'priority' => 40, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
			'description_hidden' => 'false', // Rarely needed. Default is False
		)
	);

	$wp_customize->add_section(
		'schedule_section',
		array
		(
			'title' => __( "Schedule", 'easy_school_wp' ),
			'description' => __( "Schedule", 'easy_school_wp' ),

			'panel' => 'header_naviation_panel', // Only needed if adding your Section to a Panel

			'priority' => 41, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
			'description_hidden' => 'false', // Rarely needed. Default is False
		)
	);

	$wp_customize->add_section(
		'unspecified_content',
		array
		(
			'title' => __( "Unregistered Contents", 'easy_school_wp' ), // Title
			'description' => __( "Images for remplace unregistered contents.", 'easy_school_wp' ),

			'panel' => 'header_naviation_panel', // Only needed if adding your Section to a Panel

			'priority' => 50, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
			'description_hidden' => 'false', // Rarely needed. Default is False
		)
	);

	$wp_customize->add_section(
		'C.G.U',
		array
		(
			'title' => __( "Terms of Service", 'easy_school_wp' ),	// Title
			'description' => __( "Terms of Service Informations.", 'easy_school_wp' ),

			'panel' => 'header_naviation_panel', // Only needed if adding your Section to a Panel

			'priority' => 60, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
			'description_hidden' => 'false', // Rarely needed. Default is False
		)
	);

	$wp_customize->add_section(
		'footers',
		array
		(
			'title' => __( "Footers", 'easy_school_wp' ),	// Title
			'description' => __( "Choose the footer who gonna be displayed.", 'easy_school_wp' ),

			'panel' => 'header_naviation_panel', // Only needed if adding your Section to a Panel

			'priority' => 60, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
			'description_hidden' => 'false', // Rarely needed. Default is False
		)
	);