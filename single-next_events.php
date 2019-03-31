<?php
/*
Template Name: Next Event
Template Post Type: next_events
*/

get_header();
?>

<div class="row" style="min-height: 500px; padding-left: 6%; padding-right: 5%; padding-top: 3%;">

	<!-- Side Menu -->
	<div class="col-xs-12 col-sm-12 col-md-3 col-xl-3 mobile_convertion" style="text-align: left; padding-right: 2%;">

		<p>
			<a href="<?php echo get_permalink( get_page_by_title( "L'ACTUALITÉ DU MOMENT" ) )."?classe="; ?>" class="item_menu">
				Toutes les classes
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "L'ACTUALITÉ DU MOMENT" ) )."?classe=ps"; ?>" class="item_menu">
				Petite section
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "L'ACTUALITÉ DU MOMENT" ) )."?classe=ms"; ?>" class="item_menu">
				Moyenne section
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "L'ACTUALITÉ DU MOMENT" ) )."?classe=gs"; ?>" class="item_menu">
				Grande section
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "L'ACTUALITÉ DU MOMENT" ) )."?classe=cp"; ?>" class="item_menu">
				CP
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "L'ACTUALITÉ DU MOMENT" ) )."?classe=ce1"; ?>" class="item_menu">
				CE1
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "L'ACTUALITÉ DU MOMENT" ) )."?classe=ce2"; ?>" class="item_menu">
				CE2
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "L'ACTUALITÉ DU MOMENT" ) )."?classe=cm1"; ?>" class="item_menu">
				CM1
			</a>
		</p>

		<p class="top_bar_menu">
			<a href="<?php echo get_permalink( get_page_by_title( "L'ACTUALITÉ DU MOMENT" ) )."?classe=cm2"; ?>" class="item_menu">
				CM2
			</a>
		</p>
		
	</div>

	<!-- Content Section -->
	<div class="col-xs-12 col-sm-12 col-md-9 col-xl-9" style="padding-bottom: 4%;">

		<div class="row mb-3" style="background-color: #f7f8f7; margin-bottom: 2%;">

			<p class="title_article_full"><i class="far fa-calendar-alt"></i> 
			<?php if(get_the_title()): ?>
	        	<?php

	        		/*Capturer le titre*/
	                $title_posts = get_the_title();

	                /*Remplacer tous les saut à la ligne par des espaces*/
	                $title_posts = preg_replace( '/\r|\n/', ' ', $title_posts );

	                /*Enlever tout le HTML*/
	                $title_posts = strip_tags ($title_posts);

	                /*Couper la description à 26 charactères*/
	                $title_posts = mb_strcut($title_posts, 0, 60);

	                /*Afficher le titre*/
	                echo "| " . esc_html($title_posts);
	        	?>
	        <?php else: ?>
	        	<?php
	                if (get_theme_mod( "title_default"))
	                {
	                  echo get_theme_mod( "title_default");
	                }
	                else
	                {
	                	echo(__( "Title of substitution unavailable.", 'easy_school_wp' ));
	                }
              	?>
	        <?php endif; ?>

		</div>

		<div class="row mb-3">
			
			<?php

				/*Obtenir l'id de l'article*/
		    	$post_thumbnail_id = get_post_thumbnail_id();

		    	/*Obtenir l'url de l'article*/
		    	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
		    	
			?>

			<?php if (has_post_thumbnail()) : ?>
            <?php echo(" <img title='image title' alt='thumb image' class='wp-post-image image_ratio_full_size_in' src=' "); ?>
            <?php echo $post_thumbnail_url; ?>
            <?php echo(" '> "); ?>

            <?php else: ?>
              <?php echo("<img title='image title' alt='thumb image' class='wp-post-image image_ratio_full_size_in' src=' "); ?>
              <?php
                
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
					echo get_template_directory_uri() . '/img/no_img.png' . '?' . $current_version;
				}

              ?>
              <?php echo (" '> "); ?>
            <?php endif; ?>

		</div>

		<div class="row">
			<?php $loop = new WP_Query( array( 
				'post_type' => 'next_events',  
				'post_status' => array( 'future', 'publish' ),
			) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php

						// Heure de départ de l'event
						if (get_field( "event_date_start" ))
						{
							$date_start = get_field( "event_date_start" );
							$date_start = date("d-m-Y", strtotime($date_start));

							if (get_field( "heure_de_debut" ))
							{
								$hour_start = get_field( "heure_de_debut" );
							}
							else
							{
								$hour_start = '08:30';
							}
						}

						// Heure de fin de l'event
						if (get_field( "event_date_end" ))
						{
							$date_end = get_field( "event_date_end" );
							$date_end = date("d-m-Y", strtotime($date_end));

							if (get_field( "heure_de_fin" ))
							{
								$hour_end = get_field( "heure_de_fin" );
							}
							else
							{
								$hour_end = '18:00';
							}
						}

					?>
			<?php endwhile; wp_reset_query(); ?>
			
			<div class="col-md-12" style="padding: 0%;">
				<p style="font-family: 'Open Sans'; font-size: 0.9em; color: #545454;"> 

					<i class="far fa-calendar-alt"></i> <b>Date:</b> <?php echo($date_start); ?> au <?php echo($date_end); ?> <br>

					<i class="far fa-clock"></i> <b>Horraire:</b> <?php echo($hour_start); ?> à <?php echo($hour_end); ?> <br>
					
					<i class="fas fa-map-marker-alt"></i> <b>Lieu:</b> <?php echo get_field( "lieu" ); ?><br>

					<b>Participation:</b> <span style="text-transform: capitalize;"><?php GetPrice(); ?></span>
				</p>
			</div>

		</div>

		<div class="row mb-1 content_article_full" style="padding-top: 1%;">

			<?php if(have_posts()): while(have_posts()): the_post(); ?>

			  <?php if(get_the_content()): ?>
			  <?php

			    $content_result = get_the_content();
			    $chars_first = mb_strcut($content_result, 0, 13);

			    if ($chars_first == "[gallery ids=")
			    {
			   		echo(__( "This article doesn't have a description.", 'easy_school_wp' ));
			    }
			    else
			    {
			    	the_content();
			    }
			    
			  ?>
			  <?php else: ?>
			    <?php
			    	echo(__( "This article doesn't have a description.", 'easy_school_wp' ));
			    ?>
			  <?php endif; ?>

			<?php endwhile; endif; ?>


		</div>

		<div class="row">

			<?php 
				if ( get_post_gallery() )
				{

				    $gallery        = get_post_gallery( get_the_ID(), false );
				    $galleryIDS     = $gallery['ids'];
				    $pieces         = explode(",", $galleryIDS);

				    foreach ($pieces as $key => $value )
				    { 

					        $image_medium   = wp_get_attachment_image_src( $value, 'medium'); 
					        $image_full     = wp_get_attachment_image_src( $value, 'full'); 
					    ?>

					    <div class="col-md-4 col-sm-4 col-xs-12 col-xl-4" style="padding-top: 0.5%; padding-right: 0.5%; padding-left: 0.5%; padding-bottom: 0.5%;">
					    	<a href="<?php echo $image_medium[0] ?>"  rel="lightbox">
								<img class="img_post_ratio" src="<?php echo $image_full[0] ?>">
							</a>
						</div>

				    	<?php
				    }
				}
			?>
			
		</div>
		
	</div>
	
</div>

<?php
get_footer();
