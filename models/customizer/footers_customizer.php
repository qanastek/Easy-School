<?php

/*Choice 1*/
$wp_customize->add_setting(
	'footer',
    array
    (
      'default' => '',
      'transport' => 'refresh',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
   )
);
$wp_customize->add_control( new WP_Customize_Control(
 $wp_customize, //Pass the $wp_customize object (required)
 'footer', //Set a unique ID for the control
 array(
    'label'      => __( 'Choose a footer', 'easy_school_wp' ), //Admin-visible name of the control
    'description' => __( 'Choose a footer between few ones.' ),
    'settings'   => 'footer', //Which setting to load and manipulate (serialized is okay)
    'priority'   => 10, //Determines the order this control appears in for the specified section
    'section'    => 'footers', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
    'type'    => 'select',
    'choices' => array(
        'default' => 'Default',
        'light' => 'Light',
        'very_light' => 'Very Light',
        'disabled' => 'Disabled',
    )
)
) );