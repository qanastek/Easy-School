<!-- Start Footer -->
<footer class="footer_light" style="min-height: 0em !important; padding-top: 1%; padding-bottom: 1%;">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="text-align: center;">
        <p>© <?php echo date("Y"); ?> <?php get_full_name(); ?> - <?php get_adress(); ?>, <?php get_city(); echo ' '; get_postal_code(); ?> | <?php get_phone_number(); ?> | <a href="<?php echo get_permalink( get_page_by_path( 'mentions-legales' ) ) ?>" rel="canonical" style="color: #FFC52E;">Mentions légales </a> | <a href="http://informatique-pour-tous-avignon.fr" rel="canonical" style="color: #FFC52E;"> <?php _e( "L'informatique pour tous", 'easy_school_wp' ); ?> </a>
          </p>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->