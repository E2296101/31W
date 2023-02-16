<?php
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style('31W-THEME-EXERCICE_1', // id de la feuille de style
                get_template_directory_uri() . '/style.css', // adresse url de la feuille de style
                array(), // les dépendances avec les autres feuilles de style
                filemtime(get_template_directory() . '/style.css')); // la de la dernière feuille de style
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );


// La fonction add_theme_support('html5') est utilisée pour ajouter le support HTML5 pour les éléments de mise en forme dans un thème WordPress.
add_theme_support( 'html5', 
                array( 'search-form', 
                        'comment-form', 
                        'comment-list', 
                        'gallery', 
                        'caption' ) );

// ajout add_theme_support pour les titre et le logo au niveau de de fonction.php
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
                    'height' => 150,
                    'width'  => 150,
) );

// 

// ajout fonction d'ajout/enregistrement menu // cours 4 le 2023-02-09




function enregistrement_des_menus() {
    register_nav_menus( array(
        'menu_entete' => 'Menu entête',
        'menu_footer' => 'Menu pied de page',  
    ) );
}
add_action( 'after_setup_theme', 'enregistrement_des_menus', 0 );