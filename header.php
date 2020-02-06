<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
        

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
<header>
        <a class="header_logo" href="index.html"><img class="logo-bw" src="<?php echo get_template_directory_uri(); ?>/sources/images/logoBW.svg"></a>
        <nav>
        <?php
          $args=array(
              'theme_location' => 'header', // nom du slug
              'menu' => 'header_fr', // nom à donner cette occurence du menu
              'menu_class' => 'menu_header', // class à attribuer au menu
              'menu_id' => 'menu_id' // id à attribuer au menu
              // voir les autres arguments possibles sur le codex
          );
          wp_nav_menu($args);
          ?>
        </nav>
</header>