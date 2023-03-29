<!-- Modèle catégory.php permet d'afficher une archive par catégorie  -->

<?php
    get_header() 
?>
<main class="site__main">

      
        
       <?php
             $category = get_queried_object();
            if (isset($category))
            {
                $lemenu = $category->slug;
            }
            else
                $lemenu = "note-cours";

        ?>

    <section class="blocflex">
            <?php 

                $category = get_queried_object();
                $args = array(
                    'category_name' => $category->slug,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                $query = new WP_Query( $args );

                if ($query->have_posts()):
                    while ($query->have_posts()) : $query->the_post();
                        get_template_part("template-parts/categorie", $lemenu);   

                    endwhile;
                endif;
            ?>  
    </section> 
</main> 
<?php 
    get_footer(); 
?>

