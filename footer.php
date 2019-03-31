<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Easy_School_wp
 */

?>
salutation
    
    <?php

      // Si un footer a était choisit
      if (get_theme_mod( "footer"))
      {
        // Le capturé
        $footer = get_theme_mod( "footer");
      }
      else // Sinon
      {
        // Définir un footer par defaut
        $footer = "default";
      }

      // Affiche le footer choisit par l'administrateur
      switch ($footer)
      {
        case "default":
          include 'vues/footers/footer_default.php';
          break;

        case "light":
          include 'vues/footers/footer_light.php';
          break;

        case "very_light":
          include 'vues/footers/footer_very_light.php';
          break;

        case "disabled":
          break;
      }
    ?>
    
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js" defer></script>

    <?php wp_footer(); ?>

  </body>

</html>
