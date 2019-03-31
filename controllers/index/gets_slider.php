<?php

function get_image_1_slider()
{
	/**
    * Get the link of the first image and display it
    *
    * @since 1.0.0
    * @param Integer get_theme_mod( "image_1") get the id of the first image
    *
    **/
    if (get_theme_mod( "image_1"))
    {
      $url_1 = wp_get_attachment_url( get_theme_mod( 'image_1') );
    }
    else
    {
      $url_1 = get_template_directory_uri() . '/img/no_img.png' . '?' . get_current_version();
    }

    return $url_1;
}

function get_image_2_slider()
{
	/**
    * Get the link of the second image and display it
    *
    * @since 1.0.0
    * @param Integer get_theme_mod( "image_2") get the id of the second image
    *
    **/
    if (get_theme_mod( "image_2"))
    {
      $url_2 = wp_get_attachment_url( get_theme_mod( 'image_2') );
    }
    else
    {
      $url_2 = get_template_directory_uri() . '/img/no_img.png' . '?' . get_current_version();
    }

    return $url_2;
}

function get_image_3_slider()
{
	/**
    * Get the link of the third image and display it
    *
    * @since 1.0.0
    * @param Integer get_theme_mod( "image_3") get the id of the third image
    *
    **/
    if (get_theme_mod( "image_3"))
    {
      $url_3 = wp_get_attachment_url( get_theme_mod( 'image_3') );
    }
    else
    {
      $url_3 = get_template_directory_uri() . '/img/no_img.png' . '?' . get_current_version();
    }

    return $url_3;
}