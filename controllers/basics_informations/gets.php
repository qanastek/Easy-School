<?php

function get_name()
{
	if (get_theme_mod( "basic_name"))
	{
		echo get_theme_mod( "basic_name");
	}
	else
	{
		echo("###");
	}
}

/**
* Display the adress of the school
*/
function get_adress()
{
	if (get_theme_mod( "basic_adress"))
	{
		echo get_theme_mod( "basic_adress");
	}
	else
	{
		echo("Champ de Mars, 5 Avenue Anatole");
	}
}

/**
* Display the postal code of the school
*/
function get_postal_code()
{
	if (get_theme_mod( "basic_postal_code"))
	{
		echo get_theme_mod( "basic_postal_code");
	}
	else
	{
		echo("75 007");
	}
}

/**
* Display the full name of the school
*/
function get_full_name()
{
	if (get_theme_mod( "basic_full_name"))
	{
		echo get_theme_mod( "basic_full_name");
	}
	else
	{
		echo("Nom complet de l'école primaire");
	}
}

/**
* Display the mail of the school
*/
function get_mail()
{
	if (get_theme_mod( "basic_mail"))
	{
		echo get_theme_mod( "basic_mail");
	}
	else
	{
		echo('school@example.com');
	}
}