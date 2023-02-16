<?php
    get_header() 
?>
<main>
<?php 
    if (have_posts()):
        while (have_posts()) : the_post();
 ?>
            <h4><?= get_the_title();  ?> </a></h4>
<?php 
            echo wp_trim_words(get_the_excerpt(), 40);
            echo "<a href='".get_permalink()."'> Lire </a>";
        endwhile;
    endif;
?>   
</main> 
<?php 
    get_footer(); 
?>

