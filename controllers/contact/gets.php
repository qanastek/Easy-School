<?php

function get_week_hours_am()
{
	if (get_theme_mod( "days_1_2_4_5_am"))
	{
		echo get_theme_mod( "days_1_2_4_5_am");
	}
	else
	{
		echo("08H30 - 11H30");
	}
}

function get_week_hours_pm()
{
	if (get_theme_mod( "days_1_2_4_5_pm"))
	{
		echo get_theme_mod( "days_1_2_4_5_pm");
	}
	else
	{
		echo("13H30 - 16H30");
	}
}

function get_third_day()
{
	if (get_theme_mod( "days_3_full"))
	{
		echo get_theme_mod( "days_3_full");
	}
	else
	{
		echo("08H30 - 11H30");
	}
}

