<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introductin à la création d'un thème Wordpress</title>
    <?php wp_head(); ?>
</head>
<body class="site">
    <header class="site__entete">
        <div class="logomenu">
            <?php 
                the_custom_logo()
            ?>
            <div class="menu_left">
                <?php wp_nav_menu(array(
                                    'menu' =>'entete',
                                    'container' => 'nav'
                                    ));
                ?>
                <?=get_search_form()?>
            </div>
        </div>
    </header>


   <aside class="site__aside">
      
        
       <?php
            $category = get_queried_object();
            //var_dump($category);
            //die();
            if (isset($category))
            {
                $lemenu = $category->slug;
                $titre_menu = ($lemenu=="note-cours")?"Notes de Cours":"Liste des Cours" ; // changer le titre du menu selon le menu affiché
            }else{
                $lemenu = "note-cours";
                $titre_menu = "Notes de Cours";
            } 
        ?>
        <h5><?=$titre_menu?></h5>
        <?php
            
            wp_nav_menu(array(
                "menu" => $lemenu,
                "container" => "nav"

            )) 
        
        ?>
   </aside> 


