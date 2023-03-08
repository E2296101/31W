 <aside class="site__aside">
       <?php
            $category = get_queried_object();
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
