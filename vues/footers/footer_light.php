<!-- Start Footer -->
<footer class="footer_light" style="min-height: 0em !important; padding-top: 1%; padding-bottom: 1%;">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="text-align: center;">
      	<ul class="social_footer_light_ul">

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
        
        <p>© <?php echo date("Y"); ?> <?php get_full_name(); ?> - <?php get_adress(); ?>, <?php get_city(); echo ' '; get_postal_code(); ?> | <?php get_phone_number(); ?> | <a href="<?php echo get_permalink( get_page_by_path( 'mentions-legales' ) ) ?>" style="color: #FFC52E;">Mentions légales </a> | <a href="http://informatique-pour-tous-avignon.fr" style="color: #FFC52E;"> <?php _e( "L'informatique pour tous", 'easy_school_wp' ); ?> </a>
          </p>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->