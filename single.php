<?php
    get_header() 
?>
<main class="site__main">
<?php 
    echo"single.php";
    if (have_posts()):
    while(have_posts()): the_post();
            the_title('<h4>','</h4>');
            the_content('<p>','</p>');  
        endwhile;    
    endif;
?>   
</main> 
<?php get_footer(); ?>

