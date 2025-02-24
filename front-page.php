<?php get_header(); ?>


    <main>
        <header class="contenu-sur-image plein-plan">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour-eiffel.jpg" alt="image destination">
            <div>
                <h1>Choissisez la destination de vos rêves</h1>
                <p>Un choix de plus de 200 destinations</p>
                <p>Ledeur Mathieu</p>
                <p>3800 R. Sherbrooke E, Montréal, QC H1X 2A2</p>
                <p>(514) 254-7131</p>
                <a href="mailto:name@maisonneuve.com">Notre email</a>
                <div class="boite-icones">
                    <?php $uri = get_template_directory_uri(); ?>
                    <img src="<?php echo $uri; ?>/assets/images/facebook.png" alt="facebook">
                    <img src="<?php echo $uri; ?>/assets/images/instagram.png" alt="instagram">
                    <img src="<?php echo $uri; ?>/assets/images/twitter.png" alt="twitter">
                </div>
            </div>
        </header>
        <section class="post">
            <header>
                <h2>Destinations populaires</h2>
            </header>
            <div class="grille-cartes">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="image-mise-en-avant"> 
                        <?php } ?>
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 25, " ... "); ?></p>
                    <a href="<?php the_permalink(); ?>">Plus d'informations</a>
                </article>
                <?php endwhile; endif; ?>

            </div>
        </section>
        <div class="bandeau plein-plan">
            <h2>Partez à l’aventure avec nous !</h2>
            <p>Rêvez, réservez, voyagez ! Contactez notre agence dès aujourd’hui et laissez-nous créer le voyage de vos
                rêves</p>
            <a href="" class="bouton contact"> Contactez-nous !</a>
        </div>
        <section class="galerie">
            <header>
                <h2>Nos Plus Beaux Souvenirs de Voyage.</h2>
                <p>Plongez dans l’évasion à travers notre galerie photo ! Découvrez en images les destinations
                    incroyables.</p>
            </header>
            <article class="grille-cartes img-seul">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jardin-de-versailles.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chateau-de-grimaud.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mont-st-michel.jpeg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/saint-tropez-1.jpg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/port-grimaud.jpg" alt="">
            </article>
            <a href="https://gftnth00.mywhc.ca/33w6/?page_id=131" class="bouton galerie"> En voir plus</a>
        </section>
    </main>
<?php get_footer(); ?>