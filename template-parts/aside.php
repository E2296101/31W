 <aside class="site__aside">
       <?php
            //$category = get_queried_object();
            $lemenu = "note-cours";
            $titre_menu = "Notes de Cours";
            if(in_category('cours'))
            {
                $lemenu = 'cours';
                $titre_menu = ($lemenu=="note-cours")?"Notes de Cours":"Liste des Cours" ; // changer le titre du menu selon le menu affiché
            }
        ?>
        <h3><?=$titre_menu?></h3>
        <?php
            wp_nav_menu(array(
                "menu" => $lemenu,
                "container" => "nav",
                "orderby" => "title",
                "order" => "DESC"                
            )) 
        ?>
   </aside> 
