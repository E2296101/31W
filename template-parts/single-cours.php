
<div> 
    <?php 
        the_title('<h3>','</h3>');
        the_content('<p>','</p>'); ?> 
        <div class="info-article">
        <?php
        echo "<p> Professeur : <span class='nom-auteur'>".get_field( 'professeur' )."</span></p>";
        echo "<p> Filiere : <span class='nom-auteur'>".get_field( 'domaine' )."</span></p>";
    // 22-03-2023 exo 3
        ?>
        </div>
</div>