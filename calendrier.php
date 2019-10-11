<?php
/**
 * Template Name: calendrier
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Easy_School_wp
 */

get_header();
?>

<div class="row" style="min-height: 500px; padding-left: 6%; padding-right: 5%; padding-top: 3%;">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- Content Section -->
	<div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 mobile_title" style="padding-bottom: 4%;">

		<div class="row mb-3" style="background-color: #f7f8f7; margin-bottom: 2%;">

			<p class="title_article_full"><i class="far fa-calendar-alt"></i> | LES FUTURS ÉVÈNEMENTS</p>

		</div>

		<div class="row mb-1">

			<div class="col-xs-12 col-sm-12 col-md-12 col-xl-12" style="overflow-x: auto; padding-right: 0px; padding-left: 0px;">

				<?php the_content(); ?>

			</div>

		</div>
		
	</div>

	<?php endwhile; endif; ?>
	
</div>

<?php
get_footer();
