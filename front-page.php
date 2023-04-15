<?php
    get_header() 
?>

<section class="text-over-image">
  <img src="/wp-content/themes/31w-theme-wp/images/back.jpg " alt="Description de l'image">
  <div class="text">
    <h1>Apprenez à créer un site Web professionnel avec WordPress</h1>
    <p>Que vous soyez débutant ou que vous souhaitiez approfondir vos connaissances, notre site est conçu pour vous aider à apprendre WordPress de manière simple et efficace. </p>
    <p>Nous vous offrons des guides étape par étape, des tutoriels vidéo, des astuces et des conseils pratiques pour vous aider à créer un site Web professionnel en un rien de temps. Rejoignez notre communauté d'apprentissage en ligne dès aujourd'hui et commencez à créer votre site Web avec WordPress dès maintenant !</p>
  </div>
</section>

<main class="site__main">

<!-- a faire ajouter d autre section exemple banniere et section evenement -->
<!--  <section class="viewport">
   

</section> -->


<section class="event-section">
  <h2 class="event-title">    
        <?php wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav",
            "container_class"=>"menu__bloc"
        )); 
        $date_adresse_evenement = recuperer_date_adresse_evenement('Porte ouverte de TIM');
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

