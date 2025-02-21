<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body class="wrapper">
    <header class="header">
        <img class="header__logo" src="./assets/images/Club.png" alt="logo du site">
        <input type="checkbox" class="header__check">
        <div class="header__nav">

            <nav class="nav">
                <ul class="nav_list">
                    <li class="nav__item"><a class="nav_link nav_link-active" href="">Aventure</a></li>
                    <li class="nav__item"><a class="nav_link" href="">Sportive</a></li>
                    <li class="nav__item"><a class="nav_link" href="">Culturelle</a></li>
                    <li class="nav__item"><a class="nav_link" href="">Zen</a></li>
                </ul>
            </nav>
            <form action="" class="header__search">
                <input type="text" class="recherche__input">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
            </form>
        </div>

    </header>
    <main>
        <section class="hero full-bleed">
            <div class="hero__contenu">
                <h1 class="hero__titre">
                    Club de voyage
                </h1>
                <p class="hero__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur est officiis, mollitia
                    minus asperiores quas libero saepe consequuntur at blanditiis et eligendi, sequi sit quae
                    laboriosam, ex delectus nesciunt.
                </p>
                <a href="" class="hero__courriel">
                    info@cmaisonneuve.qc.ca
                </a>
                <button class="hero__bouton">
                    Inscription
                </button>
                <div class="hero__icone-app">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                </div>
            </div>
        </section>
        <section class="post">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <div><?php the_content(); ?></div>
                    </article>
            <?php endwhile;
            endif; ?>
        </section>
        <section class="galerie">
            <figure class="galerie__fig">
                <img src="" alt="">
            </figure>
        </section>
        <section class="grid_cartes">
            <div class="carte carte--grande">
                <div class="carte__image">
                    <img src="assets/images/img1.jpg" alt="Image de voyage">
                </div>
                <div class="carte__contenu">
                    <h2 class="carte__titre">Destination de rêve</h2>
                    <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
                    <button class="carte__bouton carte__bouton--actif">Réserver</button>
                </div>
            </div>
            <div class="carte carte--grande">
                <div class="carte__image">
                    <img src="assets/images/img1.jpg" alt="Image de voyage">
                </div>
                <div class="carte__contenu">
                    <h2 class="carte__titre">Destination de rêve</h2>
                    <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
                    <button class="carte__bouton carte__bouton--actif">Réserver</button>
                </div>
            </div>
            <div class="carte carte--grande">
                <div class="carte__image">
                    <img src="assets/images/img1.jpg" alt="Image de voyage">
                </div>
                <div class="carte__contenu">
                    <h2 class="carte__titre">Destination de rêve</h2>
                    <p class="carte__description">Découvrez des endroits magnifiques à travers le monde.</p>
                    <button class="carte__bouton carte__bouton--actif">Réserver</button>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
</body>

</html>