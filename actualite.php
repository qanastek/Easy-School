<?php
/**
 * Template Name: actualiter
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Easy_School_wp
 */

  get_header();

?>

<div class="row" style="min-height: 525px; padding-left: 6%; padding-right: 5%; padding-top: 3%;">

	<!-- Side Menu -->
	<?php

    include 'sidebar_actualite.php';

  ?>

	<!-- Content Section -->
	<div class="col-xs-12 col-sm-12 col-md-9 col-xl-9" style="padding-bottom: 4%;">

		<div class="titleActu row" style="background-color: #f7f8f7; margin-bottom: 2%;">
		
			<p class="custom_h2_bis"><i class="far fa-newspaper"></i> | L'ACTUALITÉ DU MOMENT</p>

		</div>

    <?php

      /**
    	*	Fonction AJAX de trie des articles en fonction de la classe.
    	*
    	*	@since 1.0.0
    	*/
      $class_filter = get_filter_search();

      /*
        args : Requête qui sera envoyer à la base de données

        numberposts : Nombres de posts maximum afficher
        order : Ascendant ou Descendant
        orderby : Trier par quoi
        post_status : Statut des articles (publier, programmer ect ...)
      */
      $args = array
      (
        'numberposts' => 999999,
        'order'=> 'DESC',
        'post_status' => 'publish',
        'orderby' => 'post_date',
        'tag' => $class_filter,
        'date_query' => array
        (
          array
          (
            'after'     => array
            (
              'year'  => 1900,
              'month' => 1,
              'day'   => 1,
            ),
            'before'    => array
            (
              'year'  => date(Y),
              'month' => date(m),
              'day'   => date(d),
            ),
            'inclusive' => true,
          ),
        ),
      );

      $postslist = get_posts( $args );
      foreach ($postslist as $post) :  setup_postdata($post);

    ?>
		<div class="itemActu row mb-3">

        <div class="card" style="width: 100%;">

            <div class="row">

              <div class="col-xs-12 col-sm-12 col-md-4 col-xl-4">
                <a href="<?php the_permalink(); ?>">

                  <img
                    title='article'
                    alt='image'
                    class='lazy wp-post-image image_ratio_full_size'
                    src="<?php echo get_load_image(); ?>"
                    data-src='<?php get_image_url(); ?>'
                  >

                </a>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-8 col-xl-8 px-3 bottom_block">
                <div class="card-block phone-padding">

                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                      <p class="article_title phone-padding_2">
                        <a href="<?php the_permalink(); ?>"> <?php get_title_es(30); ?> </a>
                      </p>
                    </div>
                  </div>

                  <div class="row article_text">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 pr-4 content_text_article"> <?php get_description_es(200); ?> </div>
                  </div>

                  <div class="right-bottom">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12" style="display: inline;">
                      <p class="article_date" style="text-align: right; float: right; padding-right: 3%; font-weight: 500;">

                      <i class="fas fa-calendar-alt"></i> <?php get_date_es(); ?>

                      &nbsp;

                      <i class="fas fa-user-alt"></i> <?php the_author(); ?></p>

                    </div>
                  </div>

                </div>
              </div>

            </div>

        </div>

    </div>
    <?php endforeach; ?>
		
	</div>
	
</div>

<?php
get_footer();
