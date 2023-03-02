<?php
    get_header() 
?>




<main class="site__main site">
   <aside class="site__aside">
        <h5>notes de Cours</h5>
        <?php wp_nav_menu(array(
            "menu" => "note-cours",
            "container" => "nav"

        )) ?> 
   </aside>

    <section class="blocflex">
            <?php 
                if (have_posts()):
                    while (have_posts()) : the_post();
            ?>
                    <article class="article-box-shadow">
                        <h2><?= substr(get_the_title(),3);  ?> </a></h2>
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

