
<footer class="site__footer">
    
    <div class="widget__youtube <?= (!in_category('cours'))?"invisible":""?>">
    <hr>
        <div class="sidebar">
        <?php dynamic_sidebar( 'pied-page-1' ); ?>
        </div>
        <div class="sidebar">
        <?php dynamic_sidebar( 'pied-page-2' ); ?>
        </div>
        <div class="sidebar">
        <?php dynamic_sidebar( 'pied-page-3' ); ?>
        </div>
    </div>
    <hr>
  <div class="container">
     
    <div class="column">
      <h6>À Propos</h6>
      <ul>
        <li><a href="#">Notre histoire</a></li>
        <li><a href="#">Notre équipe</a></li>
        <li><a href="#">Notre mission</a></li>
      </ul>
    </div>
    <div class="column">
      <h6>Nos Offres</h6>
      <ul>
        <li><a href="#">Abonnement</a></li>
        <li><a href="#">Parrainage</a></li>
        <li><a href="#">Offres Spéciales</a></li>
      </ul>
    </div>
    <div class="column">
      <h6>Aides</h6>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Support</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="column">
      <h6>En Complément</h6>
      <ul>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Actualités</a></li>
        <li><a href="#">Partenaires</a></li>
      </ul>
    </div>
  </div>

  <div>
    <?php wp_nav_menu(array(
                        'menu' =>'lien-externe-1',
                        'container_class' => 'footer__lien__nav'
                        ));
    ?>
  </div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>