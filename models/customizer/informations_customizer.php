<?php

	/*Information 0*/
	$wp_customize->add_setting(
		'basic_full_name',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'basic_full_name',
	    array
	    (
	      'label' => __( "Full School name", 'easy_school_wp' ),
	      'description' => __( 'For example: Lycée Janson-de-Sailly. This field will be display in the contact us page.', 'easy_school_wp' ),	

	      'section' => 'basic_information',

	      'priority' => 0, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter complete name...', 'easy_school_wp' ),
	      ),
	    )
	);

	/*Information 1*/
	$wp_customize->add_setting(
		'basic_name',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'basic_name',
	    array
	    (
	      'label' => __( "School name", 'easy_school_wp' ),
	      'description' => __( 'For example: Janson-de-Sailly', 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 10, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter name...', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Information 2*/
	$wp_customize->add_setting(
		'basic_adress',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'basic_adress',
	    array
	    (
	      'label' => __( "Address", 'easy_school_wp' ),
	      'description' => __( 'For example: Champ de Mars, 5 Avenue Anatole France', 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 20, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter address...', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Information 2.1*/
	$wp_customize->add_setting(
		'basic_postal_code',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'basic_postal_code',
	    array
	    (
	      'label' => __( "Postal Code", 'easy_school_wp' ),
	      'description' => __( 'For example: 75 016', 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 21, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter postal code...', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Information 2.1*/
	$wp_customize->add_setting(
		'city',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'city',
	    array
	    (
	      'label' => __( "City", 'easy_school_wp' ),
	      'description' => __( 'For example: Paris', 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 22, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter city...', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Information 3*/
	$wp_customize->add_setting(
		'basic_phone',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'basic_phone',
	    array
	    (
	      'label' => __( "Phone number", 'easy_school_wp' ),
	      'description' => __( 'For example: 04 12 34 56 78', 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 30, // Optional. Order priority to load the control. Default: 10
	      'type' => 'number',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter phone number...', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Information 4*/
	$wp_customize->add_setting(
		'basic_fax',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'basic_fax',
	    array
	    (
	      'label' => __( "Fax number", 'easy_school_wp'  ),
	      'description' => __( 'For example: 04 12 34 56 78', 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 40, // Optional. Order priority to load the control. Default: 10
	      'type' => 'number',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter fax number...', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Information 5*/
	$wp_customize->add_setting(
		'basic_mail',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'sanitize_email'
	   )
	);
	$wp_customize->add_control(
		'basic_mail',
	    array
	    (
	      'label' => __( "E-mail", 'easy_school_wp' ),
	      'description' => __( 'For example: school@example.com', 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 50, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter e-mail...', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Information 6*/
	$wp_customize->add_setting(
		'basic_google_maps',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'basic_google_maps',
	    array
	    (
	      'label' => __( "Google Maps iframe URL", 'easy_school_wp' ),
	      'description' => __( "You need to fill this field only with the URL beetween the src quotes of an Google Maps iframe link.", 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 60, // Optional. Order priority to load the control. Default: 10
	      'type' => 'textarea',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.991440608169!2d2.292292615403429!3d48.85837360866234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour+Eiffel!5e0!3m2!1sfr!2sfr!4v1547063085308', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Information 7*/
	$wp_customize->add_setting(
		'article_quantity',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'article_quantity',
	    array
	    (
	      'label' => __( "How much article you want to see on the home page ?", 'easy_school_wp' ),
	      'description' => __( "Between 4 and 10 articles max. The default value is : 4", 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 70, // Optional. Order priority to load the control. Default: 10
	      'type' => 'number',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter a value . . .', 'easy_school_wp' ),
	      ),
	    )
	);
	/*Information Description*/
	$wp_customize->add_setting(
		'description_seo',
	    array
	    (
	      'default' => '',
	      'transport' => 'refresh',
	      'sanitize_callback' => 'wp_filter_nohtml_kses'
	   )
	);
	$wp_customize->add_control(
		'description_seo',
	    array
	    (
	      'label' => __( "Google description SEO", 'easy_school_wp' ),
	      'description' => __( ' ', 'easy_school_wp' ),

	      'section' => 'basic_information',

	      'priority' => 80, // Optional. Order priority to load the control. Default: 10
	      'type' => 'text',
	      'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
	      'input_attrs' => array( // Optional.
	         'class' => 'my-custom-class',
	         'style' => 'border: 1px solid rebeccapurple',
	         'placeholder' => __( 'Enter a description for google...', 'easy_school_wp' ),
	      ),
	    )
	);