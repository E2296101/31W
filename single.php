<?php
    get_header() 
?>
<main class="site__main">
    
<?php 
    if (have_posts()):
   
   
     if(in_category('cours')){  
        get_template_part("template-parts/single", "cours"); 
     }  
     else{
         get_template_part("template-parts/single", "note-cours"); 
     }
     
    endif;

?>   
</main> 
<?php get_footer(); ?>

