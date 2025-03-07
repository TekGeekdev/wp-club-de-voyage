<?php get_header(); ?>

<main class="search">
    <h1><?php printf(__('Résultats de recherche pour: %s', 'textdomain'), get_search_query()); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="grille-cartes large">
            <?php
            
            while (have_posts()) : the_post(); ?>
                <article class="carte-search zoomEffet ombre-boite">
                    <header>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/saint-tropez-1.jpg" alt="Image défaut"> 
                        <?php } ?>
                        <h3><?php the_title(); ?></h3>
                    </header>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></p> 
                    <a href="<?php the_permalink(); ?>">Découvrir</a>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php _e('Aucun résultat trouvé.', 'textdomain'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>