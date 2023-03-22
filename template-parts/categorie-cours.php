<?php
$titre = get_the_title();
$sigle = substr($titre,0,7);
$titre_long = substr($titre,7,-5);
$char = '(';
$position = strpos($titre,$char);
$duree = substr($titre,$position);
?>

<article class="article_box article-box-shadow">
    <h2> 
        <?=$sigle?>
    </h2>
    <p> <?=$titre_long?> </p>
<?php 
    echo wp_trim_words(get_the_excerpt(), 20);
    echo "<a href='".get_permalink()."'> Lire </a>";
    echo "<p>".$duree."</p>";
    echo "<p> Auteur : <span class='nom-auteur'>".get_field( 'professeur' )."</span></p>";
    // 22-03-2023 exo 3
?>
</article>
