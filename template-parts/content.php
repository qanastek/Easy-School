<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Easy_School_wp
 * 
 */

get_header();
?>

<div class="row" style="min-height: 500px; padding-left: 6%; padding-right: 5%; padding-top: 3%;">

	<!-- Side Menu -->
	<?php

		include get_template_directory() . '/sidebar_actualite.php';

	?>

	<!-- Content Section -->
	<div class="col-xs-12 col-sm-12 col-md-9 col-xl-9" style="padding-bottom: 4%;">

		<div class="row mb-3" style="background-color: #f7f8f7; margin-bottom: 2%;">

			<p class="title_article_full"><i class="far fa-calendar-alt"></i> <?php echo "| "; get_title_es(60); ?>

		</div>

		<div class="row">
			
			<p style="font-family: 'Open Sans'; font-size: 0.9em; color: #212529;"> 
				Fait par <b><?php the_author(); /*Afficher le nom de l'auteur*/ ?></b> 
				le <?php echo get_the_date(); /*Afficher la date de création*/ ?> 
				à <?php the_time(); /*Afficher l'heure de création*/ ?>  
				<?php get_tag_display(); ?>
			</p>

		</div>

		<div class="row mb-3">

			<img title='image title' alt='thumb image' class='wp-post-image image_ratio_full_size_in' src='<?php get_image_url(); ?>'>

		</div>

		<div class="row mb-1 content_article_full" style="padding-top: 1%;">

			<div class="row pl-3">
				<?php get_description_article(); ?>
			</div>

			<div class="row">

				<?php display_gallery(); ?>
				
			</div>

		</div>
		
	</div>
	
</div>

<?php
get_footer();
