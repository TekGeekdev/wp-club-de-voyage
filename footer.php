<footer id="nav-pied-page" class="plein-plan">
            <div class="flex-avec-gap">
            <?php
    wp_nav_menu(array(
        'menu' => 'principal',
        'theme_location' => 'main-menu',
        'container' => false,
    ));
    ?>
            </div>
            <form action="">
                <input type="text" id="recherche" name="recherche" placeholder="faire une recherche"
                    class="champ-recherche">
                <input type="submit" value="Rechercher" class="bouton">
            </form>
            <div class="flex-avec-gap">
                <p>3800 R. Sherbrooke E</p>
                <p>Montréal, QC H1X 2A2</p>
                <p>(514) 254-7131</p>
                <a href="mailto:name@maisonneuve.com">Notre email</a>
            </div>
            <div class="boite-icones">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt="instagram">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="twitter">
            </div>
        </footer>

</body>
<?php wp_footer(); ?>
</html>