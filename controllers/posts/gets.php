<?php

function get_tag_display()
{
	/*Si il y au minimum un tag*/
	if(has_tag())
	{

		/*Capture the class tag value*/
		$tag_capture = get_the_tags();

		/*Take the first tag*/
		$tag_capture = $tag_capture[0]->name;

		/*Sanitize it*/
		$tag_capture = strip_tags($tag_capture);

		/*Take the only 3 first characters*/
		$tag_capture = mb_strimwidth($tag_capture, 0, 3);

		/*Print it*/
		return "| "."<span style='text-transform: uppercase; color: darkorange;'>".$tag_capture."</span>";

	}
}

function get_title_es($nbr_chars)
{
	if (get_the_title())
	{
		/*Capturer le titre*/
	    $title_posts = get_the_title();

	    /*Remplacer tous les saut à la ligne par des espaces*/
	    $title_posts = preg_replace( '/\r|\n/', ' ', $title_posts );

	    /*Enlever tout le HTML*/
	    $title_posts = strip_tags ($title_posts);

	    /*Couper la description à 26 charactères*/
	    $title_posts = mb_strcut($title_posts, 0, $nbr_chars);

	    echo(esc_html($title_posts));
	}
	else
	{
		if (get_theme_mod( "title_default"))
        {
          echo get_theme_mod( "title_default");
        }
        else
        {
        	echo(__( "Substitution title unavailable.", 'easy_school_wp' ));
        }
	}
}

function get_description_es($nbr_chars)
{
	if (get_the_content())
	{
		$content_result = get_the_content();
	    $chars_first = mb_strcut($content_result, 0, 13);

	    if ($chars_first == "[gallery ids=")
	    {
	   		echo(__( "This article doesn't have a description.", 'easy_school_wp' ));
	    }
	    else
	    {
			/*Capturé le description de l'article*/
		    $content = get_the_content();
		    
		    /*Remplacer tous les saut à la ligne par des espaces*/
		    $content = preg_replace( '/\r|\n/', ' ', $content );

		    /*Enlever tout le HTML*/
		    $content = strip_tags ($content);

		    // Position de départ du shortcode de la gallerie
		    $pos_start = strpos($content, '[');

		    // Position de fin
		    $pos_end = strpos($content, ']');

		    // Si le shortcode est incomplet
		    if ($pos_start === false or $pos_end === false)
		    {
		      // rien
		    }
		    else
		    {
		      // On retire la gallery du content
		      $content = mb_strcut($content, 0, $pos_start-1).mb_strcut($content, $pos_end+1, strlen($content));
		    }

		    /*Couper la description à 200 charactères*/
		    $content = esc_html(mb_strcut($content, 0, $nbr_chars));

		    /*Si il n'y a pas de description*/
		    if (strlen($content) <= 10)
		    {
		      echo("Cette article n'a pas de description.");
		    }
		    else /*Sinon*/
		    {
		      echo $content;
		    }
		}
	}
	else
	{
		echo("Cette article n'a pas de description.");
	}
}

function get_date_es()
{
	if (get_the_date())
	{
		echo get_the_date();
	}
	else
	{
		echo("01 Janvier 2000");
	}
}

function get_no_image_url()
{
	/*Si y a une image de substitution*/
	if (get_theme_mod("image_default"))
	{
		/*Récupéré l'id de cette image*/
		$id_picture = get_theme_mod("image_default");

		/*Afficher l'image*/
		echo wp_get_attachment_url( $id_picture );
	}
	else
	{
		/*Si il n'y a pas d'image de substitution essayer d'afficher une autre image*/
		echo get_template_directory_uri() . '/img/no_img.png' . '?' . get_current_version();
	}
}

function get_load_image()
{
	return get_template_directory_uri() . '/img/load1.jpg' . '?' . get_current_version();
}

function get_image_url()
{
	if (has_post_thumbnail())
	{
		/*Get the ID of the article image and after that get the URL thanks to the ID*/
	    $post_thumbnail_id = get_post_thumbnail_id();
	    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

		echo $post_thumbnail_url;
	}
	else
	{
		get_no_image_url();
	}
}

function get_description_article()
{
	if (get_the_content())
	{
		the_content();
	}
	else
	{
		echo(__( "This article doesn't have a description.", 'easy_school_wp' ));
	}
	
}