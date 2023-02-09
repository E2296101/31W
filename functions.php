<?php
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style('31w-style-principal', // id de la feuille de style
                get_template_directory_uri() . '/style.css', // adresse url de la feuille de style
                array(), // les dépendances avec les autres feuilles de style
                filemtime(get_template_directory() . '/style.css')); // la de la dernière feuille de style
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );


// La fonction add_theme_support('html5') est utilisée pour ajouter le support HTML5 pour les éléments de mise en forme dans un thème WordPress.
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

// ajout add_theme_support pour les titre et le logo au niveau de de fonction.php
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );

