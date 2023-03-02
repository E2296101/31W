<?php
$titre = get_the_title();
$titre_long = substr($titre,3);
?>

<article class="article-box-shadow">
    <h2>
        <?=$titre_long?> 
    </h2>
<?php 
    echo wp_trim_words(get_the_excerpt(), 20);
    echo "<a href='".get_permalink()."'> Lire </a>";
?>
</article>