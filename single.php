<?php
    get_header() 
?>
<main class="site__main">
<?php 
    if (have_posts()):
    while(have_posts()): the_post();
            the_title('<h4>','</h4>');
            the_content('<p>','</p>');  
        endwhile;
     if(in_category('cours')){  
        get_template_part("template-parts/single", "cours"); 
     }  
    endif;

?>   
</main> 
<?php get_footer(); ?>

