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
                $nb_lettres = ($lemenu=="note-cours")?3:7 ; // nombre de lettre à enlever du titre de l'article
            }
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
            ?>
                    <article class="article-box-shadow">
                        <h2>
                            <?=substr(get_the_title(),$nb_lettres);?> 
                        </h2>
                    <?php 
                        echo wp_trim_words(get_the_excerpt(), 40);
                        echo "<a href='".get_permalink()."'> Lire </a>"; 
                    ?>
                    </article>
            <?php         
                endwhile;
            endif;
            ?>  
    </section> 
</main> 
<?php 
    get_footer(); 
?>

