<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introductin à la création d'un thème Wordpress</title>
    <?php wp_head(); ?>
</head>
<!-- 22-03-2023 exo 3 -->
<body class="<?= !is_front_page()?'site':''?> custom-background">
    <header class="site__entete">
        <div class="logomenu">
            <?php 
                the_custom_logo()
            ?>
            <div class="menu_left">
                <?php wp_nav_menu(array(
                                    'menu' =>'entete',
                                    'container' => 'nav'
                                    ));
                ?>
                <?=get_search_form()?>   
            </div>
            
        </div>
    </header>
    <?php
    if(!is_front_page())
        get_template_part("template-parts/aside");
    ?>


