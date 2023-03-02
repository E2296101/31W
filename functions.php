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
                    'flex-height' => true,
                    'flex-width'  => true,
) );

// 

// ajout fonction d'ajout/enregistrement menu // cours 4 le 2023-02-09




function enregistrement_des_menus() {
    register_nav_menus( array(
        'menu_entete' => 'Menu entête',
        'menu_footer' => 'Menu pied de page', 
        'menu_aside' => 'Menu aside',

    ) );
}
add_action( 'after_setup_theme', 'enregistrement_des_menus', 0 );

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */




 function cidweb_modifie_requete_principal( $query ) {
    if ( 
        $query->is_home() // si page d'accueil
        && $query->is_main_query() //si requete principale
        && ! is_admin() ) { // non tableau de bord
     //$query->set( 'category_name', 'note-cours' ); // filtre les articles de categorie
      $query->set( 'orderby', 'title' ); // trie selon le type
      $query->set( 'order', 'ASC' ); // en ordre ascendant
      }
     }
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );


     function ajouter_classe_active($classes, $item) {
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'ajouter_classe_active', 10, 2);