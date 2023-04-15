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

/**
 * Modifie le titre des éléments de menu en fonction de l'identifiant du menu.
 *
 * @param string $title Le titre de l'élément de menu.
 * @param object $item L'objet de l'élément de menu.
 * @param object $args Les arguments du menu.
 * @param int $depth La profondeur de l'élément de menu.
 * @return string Le titre modifié de l'élément de menu.
 */
function perso_menu_item_title($title, $item, $args) {
    // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
//$sigle = $title = "";
if($args->menu == 'cours') {
// Modifier la longueur du titre en fonction de vos besoins
$sigle = substr($title,4,3);
$title = substr($title,7);
$title = "<code class='cours__sigle'>".$sigle."</code>"."<p class='cours__titre'>".wp_trim_words($title, 2, ' ... ')."</p>";
}
if($args->menu == 'note-cours') {
// Modifier la longueur du titre en fonction de vos besoins
$index = strpos($title, "-");
if(substr($title,0,1) == '0')
    $sigle = substr($title,1,$index-1);
else
    $sigle = substr($title,0,$index);
$title = substr($title,$index+1);
$title = "<code class='note__cours__sigle'>".$sigle."</code>"."<p class='note__cours__titre'>".wp_trim_words($title, 2, ' ... ')."</p>";
}
    
return $title;
}
add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);

// 22-03-2023 exo 3
$defaults = array(
	'default-image'          => '',
	'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
	'default-position-x'     => 'left',    // 'left', 'center', 'right'
	'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
	'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
	'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
	'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
	'default-color'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-background', $defaults );

add_theme_support( 'post-thumbnails' ); // tp_4 30-03

// Enregistrer le sidebar
function enregistrer_sidebar1() {
    register_sidebar( array(
        'name' => __( 'Sidebar', '31W AMINE LHANI' ),
        'id' => 'sidebar',
        'description' => __( 'Un widget area pour afficher des widgets dans la sidebar.', '31W AMINE LHANI' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'enregistrer_sidebar1' );

// Enregistrer le sidebar
function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Pied de page 1', '31W AMINE LHANI' ),
        'id' => 'pied-page-1',
        'description' => __( 'Une zone  widget pour afficher des widgets dans le pied de page.', '31W AMINE LHANI' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Pied de page 2', '31W AMINE LHANI' ),
        'id' => 'pied-page-2',
        'description' => __( 'Une zone  widget pour afficher des widgets dans le pied de page.', '31W AMINE LHANI' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Pied de page 3', '31W AMINE LHANI' ),
        'id' => 'pied-page-3',
        'description' => __( 'Une zone  widget pour afficher des widgets dans le pied de page.', '31W AMINE LHANI' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );


}
add_action( 'widgets_init', 'enregistrer_sidebar' );



// 2023-04-02
function recuperer_date_adresse_evenement($titre){

// Créer une instance de WP_Query pour récupérer la page ayant le titre "Porte ouverte de TIM"
$page_query = new WP_Query( array(
    'post_type' => 'page',
    'post_title' => $titre, //'Porte ouverte de TIM',
    'posts_per_page' => 1,
) );

// Vérifier si une page a été trouvée et récupérer la valeur du champ personnalisé "date_de_levenement"
if ( $page_query->have_posts() ) {
    $page = $page_query->posts[0];
    /* var_dump($page) ; */
    $valeurs_evenement = [];
    $date_obj = date_create_from_format('Ymd', get_post_meta( $page->ID, 'date_de_levenement', true ));
    $valeurs_evenement[0] = date_format($date_obj, 'd-m-Y');
     $valeurs_evenement[1] = get_post_meta( $page->ID, 'adresse', true );
     return $valeurs_evenement;

// Réinitialiser la requête de WP_Query
wp_reset_postdata();
}
}
