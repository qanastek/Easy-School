<style type="text/css">
	/*Footer Start*/
	.col_white_amrc {
	  color:#FFF;
	}

	footer
	{
	  width:100%;
	  min-height:250px;
	  padding:10px 0px 25px 0px ;
	}

	.pt2 {
	  padding-top:40px;
	  margin-bottom:20px;
	}

	footer p {
	  font-size:13px;
	  color:#CCC;
	  padding-bottom:0px;
	  margin-bottom:8px;
	}

	.mb10 {
	  padding-bottom:15px;
	}
	.footer_ul_amrc {
	  margin:0px;
	  list-style-type:none;
	  font-size:14px;
	  padding:0px 0px 10px 0px ;
	}
	.footer_ul_amrc li {
	  padding:0px 0px 5px 0px;
	}
	.footer_ul_amrc li a{
	  color:#CCC;
	}
	.footer_ul_amrc li a:hover{
	  color:#fff;
	  text-decoration:none;
	}
	.fleft {
	  float: left;
	}
	.padding-right {
	  padding-right: 10px;
	}

	.footer_ul2_amrc {
	  margin: 0px;
	  list-style-type: none;
	  padding: 0px;
	}
	.footer_ul2_amrc li p {
	  display: table;
	}
	.footer_ul2_amrc li a:hover {
	  text-decoration: none;
	}
	.footer_ul2_amrc li i {
	  margin-top: 5px;
	}

	.social_footer_ul {
	  display: table;
	  margin: 15px auto 0 auto;
	  list-style-type: none;
	}
	.social_footer_ul li {
	  padding-left: 20px;
	  padding-top: 10px;
	  float: left;
	}
	.social_footer_ul li a {
	  color: #CCC;
	  border: 1px solid #CCC;
	  padding: 8px;
	  border-radius: 50%;
	}
	.social_footer_ul li i {
	  width: 20px;
	  height: 20px;
	  text-align: center;
	}
	/*Footer End*/
</style>

<!-- Start Footer -->
    <footer class="footer">

      <div class="container">

        <div class="row">

          <div class="col-xs-6 col-sm-6 col-md-2 col-xl-2" style="text-align: left;">

            <p class="pt2">
              <?php footer_custom_logo(); ?>
            </p>

            <h5 class="headin5_amrc col_white_amrc mb10">
              <?php _e( "Contact us", 'easy_school_wp' ); ?>
            </h5>

            <p style="text-transform: capitalize;">
              <?php get_adress(); ?>
            </p>

            <p style="text-transform: uppercase;"> 
              <?php get_city(); echo ', '; get_postal_code(); ?>
            </p>

            <p>
              <?php
                echo('<i class="fa fa-phone"></i> ');
                get_phone_number();
              ?>
            </p>

            <p>
              <?php
                /*
                  Si il y a un fax d'enregistrer, alors ont l'affiche.
                  Sinon ont retire l'icone et le champs.
                */
                if (get_theme_mod( "basic_fax"))
                {
                  echo('<i class="fas fa-fax"></i> ');
                  echo get_theme_mod( "basic_fax");
                }
              ?>
            </p>

            <p style="text-transform: lowercase;">
              <?php
                /*
                  Si il y a une e-mail d'enregistrer, alors ont l'affiche.
                  Sinon ont affiche l'icone et un champs par defaut afin de convaincre l'utilisateur de remplir le champs.
                */
                echo('<i class="fa fa fa-envelope"></i> ');
                get_mail();
              ?>
            </p>

          </div>

          <div class="col-xs-6 col-sm-6 col-md-2 col-xl-2" style="text-align: left;">

            <h5 class="headin5_amrc col_white_amrc pt2">
              <?php _e( "Usefull links", 'easy_school_wp' ); ?>
            </h5>

            <ul class="footer_ul_amrc">

              <li>
                <a href="<?php echo get_permalink( get_page_by_path( 'mentions-legales' ) ); ?>">Mentions légales</a>
              </li>

              <li>
                <a href="<?php echo get_permalink( get_page_by_path( 'nous-contacter' ) ); ?>">Nous contacter</a>
              </li>

              <li>
                <a href="<?php echo GetSupportURL(); ?>">Support Technique</a>
              </li>

              <li>
                <a href="<?php echo admin_url(); ?>">Panel Administrateur</a>
              </li>

            </ul>

          </div>

          <div class="col-xs-12 col-sm-12 col-md-8 col-xl-8 pt2" style="text-align: left;">

            <?php
              if (get_theme_mod( "basic_google_maps"))
              {
                echo(" <iframe title='Carte permettant d’accéder à l'école' src=' ");
                echo get_theme_mod( "basic_google_maps");
                echo (" ' width='100%' height='300' frameborder='0' style='border:0'></iframe> ");
              }
              else
              {
                echo("<iframe title='Carte permettant d’accéder à l'école' src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11493.508603986069!2d4.8456632!3d43.9308677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5549fe41f06ac98c!2sEcole+Pierre+de+Coubertin!5e0!3m2!1sfr!2sfr!4v1534009985823' width='100%' height='300' frameborder='0' style='border:0'></iframe>");
              }
            ?>

          </div>

        </div>

      </div>


      <div class="container pt-4 pb-2">

        <p class="text-center">
          <?php _e( "Copyright ©", 'easy_school_wp' ); ?>
          <?php echo date("Y"); ?> |
          <?php _e( "Website design and made by the nonprofit organization ", 'easy_school_wp' ); ?>
          <a href="http://informatique-pour-tous-avignon.fr/" rel="canonical" style="color: #FFC52E;">
            <?php _e( "L'informatique pour tous", 'easy_school_wp' ); ?>
          </a>
        </p>

        <ul class="social_footer_ul">

          <!-- Debut Facebook -->
          <?php if (get_theme_mod( "social_media_facebook")) : ?>

           <li>

              <a href='<?php echo get_theme_mod( 'social_media_facebook'); ?>' rel="canonical">
                
                <i class='fab fa-facebook-f'></i>

              </a>

            </li>

          <?php endif; ?>
          <!-- Fin Facebook -->

          <!-- Debut Twitter -->
          <?php if (get_theme_mod( "social_media_twitter")) : ?>

            <li>

              <a href='<?php echo get_theme_mod( 'social_media_twitter'); ?>' rel="canonical">
                
                <i class='fab fa-twitter'></i>

              </a>

            </li>

          <?php endif; ?>
          <!-- Fin Twitter -->

          <!-- Debut Instagram -->
          <?php if (get_theme_mod( "social_media_instagram")) : ?>

            <li>

              <a href='<?php echo get_theme_mod( 'social_media_instagram');?>' rel="canonical">
                
                <i class='fab fa-instagram'></i>

              </a>

            </li>

          <?php endif; ?>
          <!-- Fin Instagram -->

        </ul>

      </div>

    </footer>
    <!-- End Footer -->