<?php
add_action('init', 'create_movie_cpt');
function create_movie_cpt(){
  $post_type = "proposition";
  $labels = array(
        'name'               => 'Propositions',
        'singular_name'      => 'proposition',
        'all_items'          => 'Toutes les propositions',
        'add_new'            => 'Ajouter une proposition',
        'add_new_item'       => 'Ajouter une proposition',
        'edit_item'          => "Éditer la proposition",
        'new_item'           => 'Nouveau film',
        'view_item'          => "Voir le film",
        'search_items'       => 'Rechercher un film',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Film parent',
        'menu_name'          => 'Propositions',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       =>1,
        'menu_icon'           => 'dashicons-video-alt3',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type( 'proposition', $args );


    $taxonomy = "domaine";
    $object_type='propostion';
    $args = array(
          'label' => 'Domaine de la proposition',
          'rewrite' => array( 'slug' => 'actualité-categorie' ),
          'hierarchical' => true,
      );


    register_taxonomy( $taxonomy, $object_type, $args );
}
