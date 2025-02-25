<?php get_header(); ?>


    <main>
        <section class="single">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port-grimaud.jpg" alt="image single article"> 
                        <?php } ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_strip_all_tags(get_the_content()); ?></p>
                    <a href="<?php the_permalink(); ?>">Plus d'informations</a>
                </article>
                <?php endwhile; endif; ?>
        </section>
    </main>

<?php get_footer(); ?>