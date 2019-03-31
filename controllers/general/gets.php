<?php

function get_seo_description()
{
	if (get_theme_mod( 'description_seo'))
	{
		echo get_theme_mod( 'description_seo');
	}
	else
	{
		echo get_bloginfo('name');
		echo " est une école publique sur ";
		get_city();
		echo ", accueillant les élèves en maternelle et primaire.";
	}
}

function get_filter_search()
{
	if (!empty($_GET['classe']))
	{
		// Create the array
		$liste_classes = array();

		// Get all the tags registered
		$tags = get_tags(array(
          'hide_empty' => false
        ));

		// Inject them in the array
        foreach ($tags as $tag)
        {
        	array_push($liste_classes, $tag->slug);
        }

        // Capture the GET request
		$class_filter = $_GET['classe'];

		// Sanitize it
		$class_filter = mb_strtolower($class_filter);
		$class_filter = mb_strcut($class_filter, 0, 3);

		/**
		*	Si on entre une classe qui n'existe pas on est rediriger vers toutes les classes.
		*
		*	@since 1.0.0
		*/
		if (!in_array($class_filter, $liste_classes))
		{
			$class_filter = '';
		}
	}
	else
	{
		/**
		*	Si on ne reçoit rien alors on est rediriger vers toutes les classes.
		*
		*	@since 1.0.0
		*/
		$class_filter = '';
	}

	return $class_filter;
}

function GetSupportURL()
{
	return get_permalink( get_page_by_path( 'mentions-legales' ) )."#support";
}