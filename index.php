<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main>
    <h3>index.php</h3>
<?php 
if (have_posts()):
    while (have_posts()) : the_post();
        the_title('<h1>','</h1>');
        the_content('<p>','</p>');
        the_excerpt('<small>','</small>');
        wp_trim_words( $text, $num_words, $more, $original_text )
    endwhile;
endif;
?>   
</main> 
<?php get_footer(); ?>
