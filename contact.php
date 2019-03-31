<?php
/**
 * Template Name: contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Easy_School_wp
 */

get_header();
?>

<style type="text/css" media="print">
    @page
    { 
        size: landscape;
        margin: 0px;
    }

    body
    {
    	height: 100vh;
    	margin: 0px;
    }
</style>

<div class="row" style="min-height: 500px; padding-left: 6%; padding-right: 5%; padding-top: 3%;">

	<!-- Content Section -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 mobile_title" style="padding-bottom: 4%;">

		<div class="row mb-3" style="background-color: #f7f8f7; margin-bottom: 2%;">

			<p class="title_article_full"><i class="fas fa-phone"></i> | Nous contacter</p>

		</div>

		<div class="row mb-1">

			<div class="col-xs-12 col-sm-12 col-md-4 col-xl-4">

				<p style="font-size: 30px; line-height: 38px; text-align: left; font-family: Montserrat; font-size: 30px; font-weight: 700;     letter-spacing: 0px; color: black; text-transform: capitalize;">
					<?php get_full_name(); ?>
				</p>

				<p style="font-size: 30px; color: #e6be1e; line-height: 40px; text-align: left; font-family: Montserrat; font-size: 30px; font-weight: 700; letter-spacing: 0px; text-transform: uppercase;">
					<?php get_phone_number(); ?>
				</p>

				<p style="font-family: Roboto; font-weight: 400; font-size: 15px; font-style: normal; letter-spacing: 0.1px; line-height: 24px; color: #7c7c7c;">

					<span style="text-transform: capitalize;">
						<?php get_adress(); ?>
					</span>

					<br>

					<span style="text-transform: uppercase;">
						<?php
							get_postal_code();
							echo ", ";
							get_city();
						?>
					</span>

				</p>

				<div class="card horraires mb-3">

				  <ul class="list-group list-group-flush tablement">

				    <li class="list-group-item horraire_alignement" style="font-size: 18px; color: black; text-align: left; font-weight: 700; font-family: Montserrat; -webkit-font-smoothing: antialiased;">
				    	Horaires de l'établissement
				    </li>

				    <li class="list-group-item horraire_alignement" style="font-weight: 600;">
				    	Lundi, mardi, jeudi et vendredi
				    </li>

				    <li class="list-group-item horraire_alignement">
				    	<span style="text-align: left; text-transform: capitalize;">Matin</span>
				    	<span style="text-align: right; text-transform: uppercase;">
				    		<?php get_week_hours_am(); ?>
				    	</span>
				    </li>

				    <li class="list-group-item horraire_alignement">
				    	<span style="text-align: left; text-transform: capitalize;">Après-midi</span>
				    	<span style="text-align: right; text-transform: uppercase;">
				    		<?php get_week_hours_pm(); ?>
				    	</span>
				    </li>

				    <li class="list-group-item horraire_alignement">
				    	<span style="text-align: left; text-transform: capitalize; font-weight: 600;">Mercredi</span>
				    	<span style="text-align: right; text-transform: uppercase;">
				    		<?php get_third_day(); ?>
				    	</span>
				    </li>

				  </ul>

				</div>
				
			</div>

			<div class="col-xs-12 col-sm-12 col-md-8 col-xl-8">

				<?php
	              if (get_theme_mod( "basic_google_maps"))
	              {
	                echo(" <iframe title='Carte permettant d’accéder à l'école' src=' ");
	                echo get_theme_mod( "basic_google_maps");
	                echo (" ' frameborder='0' style='border: 0; width: 100%; height: 33em;' allowfullscreen></iframe> ");
	              }
	              else
	              {
	                echo("<iframe title='Carte permettant d’accéder à l'école' src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11493.508603986069!2d4.8456632!3d43.9308677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5549fe41f06ac98c!2sEcole+Pierre+de+Coubertin!5e0!3m2!1sfr!2sfr!4v1534009985823' frameborder='0' style='border: 0; width: 100%; height: 33em;' allowfullscreen></iframe>");
	              }
	            ?>
				
			</div>

		</div>
		
	</div>
	
</div>

<?php
get_footer();
