<?php

function get_image_1_devise()
{
	/**
	* Get the link of the icon of the first motto and display it
	*
	* @since 1.0.0
	* @param Integer get_theme_mod( "image_devise_1") get the id of the first icon motto
	*
	**/
	if (get_theme_mod( 'image_devise_1'))
	{
		echo wp_get_attachment_url( get_theme_mod( 'image_devise_1') );
	}
	else
	{
		echo get_template_directory_uri() . '/img/plant.png' . '?' . get_current_version();
	}
}

function get_image_2_devise()
{
	/**
	* Get the link of the icon of the second motto and display it
	*
	* @since 1.0.0
	* @param Integer get_theme_mod( "image_devise_2") get the id of the second icon motto
	*
	**/
	if (get_theme_mod( 'image_devise_2'))
	{
		echo wp_get_attachment_url( get_theme_mod( 'image_devise_2') );
	}
	else
	{
		echo get_template_directory_uri() . '/img/charity.png' . '?' . get_current_version();
	}
}

function get_image_3_devise()
{
	/**
	* Get the link of the icon of the third motto and display it
	*
	* @since 1.0.0
	* @param Integer get_theme_mod( "image_devise_3") get the id of the third icon motto
	*
	**/
	if (get_theme_mod( 'image_devise_3'))
	{
		echo wp_get_attachment_url( get_theme_mod( 'image_devise_3') );
	}
	else
	{
		echo get_template_directory_uri() . '/img/study.png' . '?' . get_current_version();
	}
}

function get_devise_1_title()
{
	/**
	* Get the title of the first motto and display it
	*
	* @since 1.0.0
	* @param String get_theme_mod( "devise_1_title") get the first motto title
	*
	**/
	if (get_theme_mod( "devise_1_title"))
	{
		echo get_theme_mod( "devise_1_title");
	}
	else
	{
		echo(__( 'GROWING', 'easy_school_wp' ));
	}
}

function get_devise_2_title()
{
	/**
	* Get the title of the second motto and display it
	*
	* @since 1.0.0
	* @param String get_theme_mod( "devise_2_title") get the second motto title
	*
	**/
	if (get_theme_mod( "devise_2_title"))
	{
		echo get_theme_mod( "devise_2_title");
	}
	else
	{
		echo(__( 'LIVE TOGETHER', 'easy_school_wp' ));
	}
}

function get_devise_3_title()
{
	/**
	* Get the title of the third motto and display it
	*
	* @since 1.0.0
	* @param String get_theme_mod( "devise_3_title") get the third motto title
	*
	**/
	if (get_theme_mod( "devise_3_title"))
	{
		echo get_theme_mod( "devise_3_title");
	}
	else
	{
		echo(__( 'LEARN', 'easy_school_wp' ));
	}
}

function get_devise_1_description()
{
	/**
	* Get the description of the first motto and display it
	*
	* @since 1.0.0
	* @param String get_theme_mod( "devise_1") get the first motto description
	*
	**/
	if (get_theme_mod( "devise_1"))
	{
		echo get_theme_mod( "devise_1");
	}
	else
	{
		echo(__( 'Devenir autonome, progresser et acquérir le sens de la responsabilité tout en apprenant.', 'easy_school_wp' ));
	}
}

function get_devise_2_description()
{
	/**
	* Get the description of the second motto and display it
	*
	* @since 1.0.0
	* @param String get_theme_mod( "devise_2") get the second motto description
	*
	**/
	if (get_theme_mod( "devise_2"))
	{
		echo get_theme_mod( "devise_2");
	}
	else
	{
		echo(__( 'Apprendre le respect de soi et des autres, respecter l’autorité des équipes éducatives, mettre en priorité l’entraide.', 'easy_school_wp' ));
	}
}

function get_devise_3_description()
{
	/**
	* Get the description of the third motto and display it
	*
	* @since 1.0.0
	* @param String get_theme_mod( "devise_3") get the third motto description
	*
	**/
	if (get_theme_mod( "devise_3"))
	{
		echo get_theme_mod( "devise_3");
	}
	else
	{
		echo(__( 'Apprendre les bases de la vie en société dans un environement agréable et bon vivre.', 'easy_school_wp' ));
	}
}

