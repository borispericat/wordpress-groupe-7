<?php

add_action( 'wp_enqueue_scripts', 'add_president_styles' );

function add_president_styles(){
  // enregistrement d'un nouveau style



wp_register_style("biography", get_template_directory_uri() . '/sources/styles/biography.css');
wp_enqueue_style('biography');

wp_register_style("first_section", get_template_directory_uri() . '/sources/styles/first_section.css');
wp_enqueue_style('first_section');

wp_register_style("footer", get_template_directory_uri() . '/sources/styles/footer.css');
wp_enqueue_style('footer');

wp_register_style("form", get_template_directory_uri() . '/sources/styles/form.css');
wp_enqueue_style('form');

wp_register_style("header_kit", get_template_directory_uri() . '/sources/styles/header_kit.css');
wp_enqueue_style('header_kit');

wp_register_style("news", get_template_directory_uri() . '/sources/styles/news.css');
wp_enqueue_style('news');

wp_register_style("program", get_template_directory_uri() . '/sources/styles/program.css');
wp_enqueue_style('program');

wp_register_style("reset", get_template_directory_uri() . '/sources/styles/reset.css');
wp_enqueue_style('reset');

wp_register_style("subscribe", get_template_directory_uri() . '/sources/styles/subscribe.css');
wp_enqueue_style('subscribe');

//style bootstrap

wp_register_style('googleFonts','https://fonts.googleapis.com/css?family=Raleway&display=swap');
wp_enqueue_style('googleFonts');

// wp_register_style("bootstrap", get_template_directory_uri() . '/sources/styles/bootstrap.min.css');
// wp_enqueue_style('bootstrap');

wp_register_style("owl.carousel", get_template_directory_uri() . '/sources/styles/owl.carousel.min.css');
wp_enqueue_style('owl.carousel');

wp_register_style("owl.theme", get_template_directory_uri() . '/sources/styles/owl.theme.default.min.css');
wp_enqueue_style('owl.theme');

wp_register_style("icomoon", get_template_directory_uri() . '/sources/styles/icomoon.css');
wp_enqueue_style('icomoon');

wp_register_style("animate", get_template_directory_uri() . '/sources/styles/animate.css');
wp_enqueue_style('animate');

// wp_register_style( 'header', get_template_directory_uri() . '/sources/styles/header.css' );
// wp_enqueue_style('header');

wp_register_style('ninjaformsperso',get_template_directory_uri() . '/sources/styles/ninjaformsperso.css');
wp_enqueue_style('ninjaformsperso');
}