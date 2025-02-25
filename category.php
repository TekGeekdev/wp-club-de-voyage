<?php get_header(); ?>


    <main>
        <section class="post">
            <header>
                <h2><?php single_cat_title(); ?></h2>
                <p><?php echo category_description(); ?></p> 
            </header>
            <div class="grille-cartes">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/voyage.jpg" alt="image categorie article"> 
                        <?php } ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 25, " ... "); ?></p>
                    <a href="<?php the_permalink(); ?>">Plus d'informations</a>
                </article>
                <?php endwhile; endif; ?>

            </div>
        </section>
    </main>
<?php get_footer(); ?>