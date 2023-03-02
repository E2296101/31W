<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introductin à la création d'un thème Wordpress</title>
    <?php wp_head(); ?>
</head>
<body class="">
    <header>
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


