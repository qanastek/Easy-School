<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Easy_School_wp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php get_seo_description(); ?>">
  <meta name="author" content="Labrak Yanis - L'informatique pour tous">

  <?php

    /*
    * Security headers
    **/

    // Anti XSS (problèmes wordpress customizer)
    //header("X-XSS-Protection: 1; mode=block");
    //header("Content-Security-Policy: frame-ancestors 'none'");

    // The website can't be iframe
    header('X-Frame-Options: DENY');

    // Load secure stylesheets
    header('X-Content-Type-Options: nosniff');
  ?>

  <title> <?php wp_title(' '); ?> </title>

  <!-- Meta progressive app -->
  <meta name="theme-color" content="#0b3f5f">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <?php wp_head(); ?>

  <style type="text/css">
    a[href$='.pdf']
    {
      background: transparent url(<?php $url_2 = get_template_directory_uri() . '/img/pdf.gif' . '?1.0.0'; echo $url_2; ?>) center left no-repeat;
      display: inline-block;
      padding-left: 20px;
      line-height: 20px;
    }
  </style>

</head>

<body style="background-color: white; max-width: 100vw;" <?php body_class(); ?> >

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark nav_color fixed-top" style="max-width: 100vw;">
      <div class="container">

        <!-- Logo de l'école -->
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php header_custom_logo(); ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          
          <i class="fas fa-bars" style="color: #fff;"></i>
          
        </button>

        <!-- https://codex.wordpress.org/Creating_Horizontal_Menus -->
        <div class="collapse navbar-collapse" id="navbarResponsive" style="width: 100%; font-size: 0.95em;"><!-- font-size: 15px; -->
          <ul class="navbar-nav ml-auto">

            <!-- Page d'accueil -->
            <li class="nav-item">
              <a class="nav-link" rel="canonical" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                Accueil
              </a>
            </li>

            <!-- L'établissement -->
            <li class="nav-item">
              <a class="nav-link etablissement" rel="canonical" href="<?php echo get_permalink( get_page_by_path( 'presentation-de-letablissement' ) ) ?>">
                L'établissement
              </a>
            </li>

            <!-- L'actualité du moment -->
            <li class="nav-item">
              <a class="nav-link" rel="canonical" href="<?php echo get_permalink( get_page_by_path( 'lactualite-du-moment' ) ) ?>">
                Actualités
              </a>
            </li>

            <!-- Menu de la cantine -->
            <li class="nav-item">
              <a class="nav-link" rel="canonical" href="<?php echo get_permalink( get_page_by_path( 'menu-de-la-cantine' ) ) ?>">
                Cantine
              </a>
            </li>

            <!-- Calendrier -->
            <li class="nav-item">
              <a class="nav-link" rel="canonical" href="<?php echo get_permalink( get_page_by_path( 'calendrier' ) ) ?>">
                Calendrier
              </a>
            </li>

            <!-- Nous contacter -->
            <li class="nav-item">
              <a class="nav-link" rel="canonical" href="<?php echo get_permalink( get_page_by_path( 'nous-contacter' ) ) ?>">
                Contact
              </a>
            </li>

          </ul>
        </div>

      </div>
    </nav>