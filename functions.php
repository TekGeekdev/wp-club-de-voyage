<?php
function theme_tp_enqueue_styles() { 
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/normalize.css'); 
    wp_enqueue_style('main-style', get_stylesheet_uri(), array('normalize'), filemtime(get_stylesheet_directory() . '/style.css')); 
} 
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');



////////////////////////////////////////////////////////////////////////////
// Ma fonction pour le thème Club de Voyage
if ( ! function_exists( 'club_de_voyage_setup' ) ) :
    /**
     * Configure les paramètres du thème et enregistre le support pour diverses fonctionnalités de WordPress.
     *
     * @since Club de Voyage 1.0
     *
     * @return void
     */
    function club_de_voyage_setup() {
        // Support pour les images 
        add_theme_support( 'post-thumbnails' );

        // Menus de navigation
        register_nav_menus( array(
            'main-menu' => __( 'Menu Principal', 'club-de-voyage' ),
            'footer-menu' => __( 'Menu Pied de Page', 'club-de-voyage' ),
        ) );
    }
endif; // club_de_voyage_setup
add_action( 'after_setup_theme', 'club_de_voyage_setup' );
// Fin de ma fonction club_de_voyage_setup()

function add_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'add_font_awesome');
////////////////////////////////////////////////////////////////////////////


?>