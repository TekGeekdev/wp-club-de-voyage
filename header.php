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
            <span><a href="https://gftnth00.mywhc.ca/33w6/" class="acceuil">Club de voyage</a></span>
            <?php
    wp_nav_menu(array(
        'menu' => 'principal',
        'theme_location' => 'main-menu',
        'container' => false,
    ));
    ?>
    </div>
     <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Rechercher des destinations...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" />
        </label>
        <button type="submit" class="search-submit"><?php echo esc_html_x('Search', 'submit button') ?></button>
    </form>
    </nav>