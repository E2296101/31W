<?php
    get_header() 
?>
<main>
<section class="blocflex">
        <?php 
            if (have_posts()):
                while (have_posts()) : the_post();
        ?>
                <article>
                    <h4><?= get_the_title();  ?> </a></h4>
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

