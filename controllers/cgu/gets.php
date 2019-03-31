<?php

/**
* Display the phone number of the school
*/
function get_phone_number()
{
    if (get_theme_mod( "basic_phone"))
    {      
      $phone_number = get_theme_mod( "basic_phone");

      $phone_number = preg_replace( '/\r|\n/', ' ', $phone_number );

      $phone_number = strip_tags ($phone_number);

      $phone_number = mb_strcut($phone_number, 0, 25);
      
      $phone_number = str_replace(' ', '', $phone_number);

      $phone_number = chunk_split($phone_number, 2, ' ');

      echo $phone_number;
    }
    else
    {
      echo('04 00 00 00 00');
    }
}

function get_name_host()
{
	if (get_theme_mod( "name_host"))
	{
		echo get_theme_mod( "name_host");
	}
	else
	{
		echo("###");
	}
}

function get_host_address()
{
	if (get_theme_mod( "adress_host"))
	{
		echo get_theme_mod( "adress_host");
	}
	else
	{
		echo("###");
	}
}

function get_host_postal_code()
{
	if (get_theme_mod( "postal_host"))
	{
		echo get_theme_mod( "postal_host");
	}
	else
	{
		echo("###");
	}
}

function get_siret()
{
	if (get_theme_mod( "siret_host"))
	{
		echo get_theme_mod( "siret_host");
	}
	else
	{
		echo("###");
	}
}

function get_url()
{
	if (get_theme_mod( "url_website"))
	{
		echo get_theme_mod( "url_website");
	}
	else
	{
		echo("###");
	}
}

function get_city()
{
	if (get_theme_mod( "city"))
	{
		echo get_theme_mod( "city");
	}
	else
	{
		echo(__( 'No city registered.', 'easy_school_wp' ));
	}
}