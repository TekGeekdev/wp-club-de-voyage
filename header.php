<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club de voyage</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sunflower:wght@300&display=swap"
        rel="stylesheet">
        <?php wp_head(); ?>
</head>
<body>
    <nav id="nav-principale" class="plein-plan">
        <div>
            <span>Club de voyage</span>
            <?php
    wp_nav_menu(array(
        'menu' => 'principal',
        'theme_location' => 'main-menu',
        'container' => false,
    ));
    ?>
        </div>
        <form action="<?php echo home_url('/'); ?>">
            <input type="text" id="recherche" name="recherche" placeholder="<?php echo esc_attr_x('Rechercher des destinations...', 'placeholder') ?>" <?php echo esc_attr_x('Rechercher des destinations...', 'placeholder') ?>
                class="champ-recherche">
            <button type="submit" class="bouton"><?php echo esc_html_x('Search', 'submit button') ?></button>
        </form>
    </nav>