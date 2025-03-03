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
            <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <label>
            <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
            <input type="search" class="champ-recherche" placeholder="<?php echo esc_attr_x('Rechercher des destinations...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" />
        </label>
        <button type="submit" class="bouton"><?php echo esc_html_x('Search', 'submit button') ?></button>
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