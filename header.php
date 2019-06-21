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

  <?php require "vues/css/extensions.php"; ?>

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

        <div class="collapse navbar-collapse navBarStyle1" id="navbarResponsive" style="width: 100%; font-size: 0.95em;">
          <?php NavbarItems(); ?>
        </div>

      </div>
    </nav>