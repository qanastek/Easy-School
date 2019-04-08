<?php
/**
 *  Template Name: accueil
 *
 *  @package Easy_School_wp
 *  @version 1.0.0
 *  @author Labrak Yanis
 *  @copyright Labrak Yanis 2019
 *  @license MIT
 *  
 *  Author: Labrak Yanis
 *  Author URI: informatique-pour-tous-avignon.fr
 *  Author email: ipt.avignon@gmail.com
 *  License: MIT
 */

/*
MIT License

Copyright (c) 2018 Labrak Yanis

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

get_header();
?>

	<header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" role="option" style="background-image: url(<?php echo get_image_1_slider(); ?>) ">
            <div class="carousel-caption d-none d-md-block"></div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" role="option" style="background-image: url(<?php echo get_image_2_slider(); ?>) ">
            <div class="carousel-caption d-none d-md-block"></div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" role="option" style="background-image: url(<?php echo get_image_3_slider(); ?>) ">
            <div class="carousel-caption d-none d-md-block"></div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span style="background-image: url(<?php echo get_template_directory_uri() . '/img/arrow_left.png' . '?' . get_current_version(); ?>);" aria-hidden="true"></span>
          <span class="sr-only">Précédent</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span style="background-image: url(<?php echo get_template_directory_uri() . '/img/arrow_right.png' . '?' . get_current_version(); ?>);" aria-hidden="true"></span>
          <span class="sr-only">Suivant</span>
        </a>

      </div>
    </header>

    <div class="pt-4 pb-3 devise_color">
      
      <div class="row" style="padding-left: 10%; padding-right: 10%;">
        
        <!-- Tuile 1 -->
        <div class="col-md-4 col-xl-4 col-sm-12 col-xs-12">

          <div class="row">
            
            <div class="col col-xs-12 col-sm-12 col-md-3 col-xl-3">

              <span style="background-color: orange;">

                <img src="<?php get_image_1_devise(); ?> " style="width: 75%; background-color: orange; padding: 17%;" align="right" alt="Plante poussant dans une main">

              </span>

            </div>

            <div class="col col-xs-12 col-sm-12 col-md-9 col-xl-9">

              <p class="custom_title_1"> <?php get_devise_1_title(); ?> </p>

              <p class="custom_text_1"> <?php get_devise_1_description(); ?> </p>
              
            </div>

          </div>
            
        </div>

        <!-- Tuile 2 -->
        <div class="col-md-4 col-xl-4 col-sm-12 col-xs-12">

          <div class="row">
            
            <div class="col col-xs-3 col-sm-3 col-md-3 col-xl-3">

              <span style="background-color: #d93ad0 !important;">

                <img src="<?php get_image_2_devise(); ?>" style="width: 75%; background-color: #d93ad0 !important; padding: 17%;" align="right" alt="Poigner de main">

              </span>

            </div>

            <div class="col col-xs-9 col-sm-9 col-md-9 col-xl-9">

              <p class="custom_title_1"> <?php get_devise_2_title(); ?> </p>

              <p class="custom_text_1"> <?php get_devise_2_description();  ?> </p>
              
            </div>

          </div>
          
        </div>

        <!-- Tuile 3 -->
        <div class="col-md-4 col-xl-4 col-sm-12 col-xs-12">

          <div class="row">
            
            <div class="col col-xs-3 col-sm-3 col-md-3 col-xl-3">

              <span style="background-color: #47ab58 !important;">

                <img src="<?php get_image_3_devise(); ?>" style="width: 75%; background-color: #47ab58 !important; padding: 17%;" align="right" alt="Enfant tenant un livre">

              </span>

            </div>

            <div class="col col-xs-9 col-sm-9 col-md-9 col-xl-9">

              <p class="custom_title_1"> <?php get_devise_3_title(); ?> </p>

              <p class="custom_text_1"> <?php get_devise_3_description(); ?> </p>
              
            </div>

          </div>
          
        </div>

      </div>

    </div>

    <div style="padding-left: 8%; padding-right: 5%;">
      
      <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-8 col-xl-8 pt-5" style="padding-right: 2%; padding-bottom: 4%;">

          <div class="row" style="background-color: #f7f8f7; margin-right: 2%;">

            <p class="custom_h2" style="padding: 1rem 0rem 0rem 1.2rem;"><i class="far fa-newspaper"></i> | Les dernières actus</p>
            
          </div>

          <br>

          <?php

            /**
            * This part of code allow user to change the numbers of posts display on the main page
            * A limit was fixed at 10 posts
            *
            * @since 1.0.0
            * 
            * @param    string  get_theme_mod( "article_quantity")  Get he custom field value
            * @var    $nbr_posts  string  Numbers of posts who gonna be display
            **/
            if (get_theme_mod( "article_quantity"))
            {

              /*Sanitize the field*/
              $nbr_posts = get_theme_mod( "article_quantity");
              $nbr_posts = preg_replace( '/\r|\n/', ' ', $nbr_posts );
              $nbr_posts = strip_tags ($nbr_posts);
              $nbr_posts = mb_strcut($nbr_posts, 0, 2);

              /*Check if the number is between 4 and 10 included*/
              if ($nbr_posts > 10 or $nbr_posts < 4)
              {
                $nbr_posts = 4;
              }

            }
            else
            {
              $nbr_posts = 4;
            }

            /**
            * @since 1.0.0
            * 
            * @param    Integer  $numberposts  The maximum of post who gonna be display
            * @param    String  $order  Choose between sorting by ASC or DESC
            * @param    String  $orderby By which fields we will sort the posts
            * 
            * @var    $args  Array  Parameters for querying the WordPress database
            **/
            $args = array(
              'numberposts' => $nbr_posts,
              'order'=> 'DESC',
              'orderby' => 'id'
            );

            /*Get articles like we want in $args*/
            $postslist = get_posts( $args );

            /*The loop*/
            foreach ($postslist as $post) :  setup_postdata($post);

            /*Get the post image id*/
            $post_thumbnail_id = get_post_thumbnail_id();

            /*Get the post image URL*/
            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

            /*Get the post content*/
            $content = get_the_content();

          ?>
          <div class="row mb-3 mr-3">

              <div class="card" style="width: 100%;">

                <div class="row" style="width: 100%;">

                  <div class="col-xs-12 col-sm-12 col-md-4 col-xl-4">
                    <a href="<?php the_permalink(); ?>">

                      <img title='article' alt='image' class='wp-post-image image_ratio_full_size' src='<?php get_image_url(); ?>'>

                    </a>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-8 col-xl-8 px-3 bottom_block">
                    <div class="card-block phone-padding content_index">

                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                          <p class="article_title phone-padding_2">
                            <a href="<?php the_permalink(); ?>">

                              <?php get_title_es(26); ?>

                            </a>
                          </p>
                        </div>
                      </div>

                      <div class="row article_text">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 pr-4">
                          
                          <?php get_description_es(200); ?>

                        </div>
                      </div>

                      <div class="row right-bottom">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                          <p class="article_date" style="text-align: right; float: right; padding-right: 3%; font-weight: 500;">

                            <i class="fas fa-calendar-alt"></i> <?php get_date_es(); ?>

                            &nbsp;
                            
                            <i class="fas fa-user-alt"></i> <?php the_author(); ?>

                          </p>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>

              </div>

          </div>
          <?php endforeach; ?>

          <a href="<?php echo get_permalink( get_page_by_path( 'lactualite-du-moment' ) ); ?>" class="btn_actu">TOUTES LES ACTUALITÉS <i class="fas fa-arrow-right"></i></a>

        </div>

        <!-- Menu latéral droit -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-xl-4" style="background-color: rgb(238,238,238); padding: 2%; min-height: 30em;">

          <div>
            
            <div class="custom_item">
              <a href="<?php echo get_permalink( get_page_by_path( 'menu-de-la-cantine' ) ) ?>" class="custom_item_inside" style="text-transform: uppercase;">MENUS DE LA CANTINE</a>
            </div>

            <span class="pre_dash">
              <span class="dashed_line"></span>
            </span>

            <div class="custom_item">
              <a href="<?php echo get_permalink( get_page_by_path( 'nous-contacter' ) ) ?>" class="custom_item_inside" style="text-transform: uppercase;">HORAIRES DE L'ÉCOLE</a>
            </div>

            <span class="pre_dash">
              <span class="dashed_line"></span>
            </span>

            <div class="custom_item">
              <a href="<?php echo get_permalink( get_page_by_path( 'calendrier' ) ) ?>" class="custom_item_inside" style="text-transform: uppercase;">Évènements à venir</a>
            </div>

            <span class="pre_dash">
              <span class="dashed_line"></span>
            </span>

            <div class="custom_item">
              <a href="<?php echo get_permalink( get_page_by_path( 'nous-contacter' ) ) ?>" class="custom_item_inside" style="text-transform: uppercase;">nous contacter</a>
            </div>

            <span class="pre_dash">
              <span class="dashed_line"></span>
            </span>

          </div>
          
        </div>

      </div>

    </div>

<?php
get_footer();
