<?php
/**
 * Template Name: presentation
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Easy_School_wp
 */

get_header();
?>

<div class="row" style="min-height: 500px; padding-left: 6%; padding-right: 5%; padding-top: 3%;">

	<!-- Side Menu -->
	<?php

		include 'sidebar_presentation.php';

	?>

	<!-- Content Section -->
	<div class="col-xs-12 col-sm-12 col-md-9 col-xl-9" style="padding-bottom: 4%;">

		<div class="row" style="background-color: #f7f8f7; margin-bottom: 2%;">
		
			<p class="custom_h2_bis"><i class="fas fa-school"></i> | <?php the_title(); ?></p>

		</div>

		<div class="text_content">

			<!-- Si la page à bien était remplie alors afficher -->
			<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- Le contenue de la page -->
				<?php the_content(); ?>

				<div class="row gallery_presentation">

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

			<?php

	        	endwhile;
	        	endif;

	        ?>
		</div>
		
	</div>
	
</div>

<?php
get_footer();
