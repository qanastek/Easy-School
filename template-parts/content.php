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
				<?php 

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
						echo "| "."<span style='text-transform: uppercase; color: darkorange;'>".$tag_capture."</span>";

					}

				?>
			</p>

		</div>

		<div class="row mb-3">

			<img title='image title' alt='thumb image' class='wp-post-image image_ratio_full_size_in' src='<?php get_image_url(); ?>'>

		</div>

		<div class="row mb-1 content_article_full" style="padding-top: 1%;">

			<?php get_description_article(); ?>

			<div class="row" style="padding-top: 1.5%;">

				<?php 
					if ( get_post_gallery() )
					{

					    $gallery        = get_post_gallery( get_the_ID(), false );
					    $galleryIDS     = $gallery['ids'];
					    $pieces         = explode(",", $galleryIDS);

					    foreach ($pieces as $key => $value )
					    { 
					    		$image_small	= wp_get_attachment_image_src( $value, 'thumbnail');
						        // $image_medium   = wp_get_attachment_image_src( $value, 'medium');
						        $image_full     = wp_get_attachment_image_src( $value, 'full'); 
						    ?>

						    <div class="col-md-4 col-sm-4 col-xs-12 col-xl-4" style="padding-top: 0.5%; padding-right: 0.5%; padding-left: 0.5%; padding-bottom: 0.5%;">
						    	<a href="<?php echo $image_full[0] ?>"  rel="lightbox">
									<img class="img_post_ratio" src="<?php echo $image_small[0] ?>">
								</a>
							</div>

					    	<?php
					    }
					}
				?>
				
			</div>

		</div>
		
	</div>
	
</div>

<?php
get_footer();
