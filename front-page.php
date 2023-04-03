<?php
    get_header() 
?>

<main class="site__main">

<!-- a faire ajouter d autre section exemple banniere et section evenement -->
<!--  <section class="viewport">
   

</section> -->

<section class="event-section">
  <h4>Introduction à un gestionnaire de contenu</h4>
  <h2 class="event-title">    
        <?php wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav",
            "container_class"=>"menu__bloc"
        )); 
        $date_adresse_evenement = recuperer_date_adresse_evenement();
        ?>
    </h2>
  <div class="event-info">
    <div class="event-location">
      <h3>Lieu</h3>
      <p><?=  $date_adresse_evenement[1] ?></p>
    </div>
    <div class="event-date">
      <h3>Date</h3>
      <p><?=  $date_adresse_evenement[0] ?></p>
    </div>
  </div>
</section>


    <section class="blocflex">
            <?php 
                if (have_posts()):
                    while (have_posts()) : the_post();
                    if(in_category('galerie')){
                        get_template_part("template-parts/categorie", "galerie"); 
                    } 
                    else{
                        get_template_part("template-parts/categorie", "note-cours"); 
                    }
                endwhile;
            endif;
            ?>  
    </section> 
</main> 
<?php 
    get_footer(); 
?>

