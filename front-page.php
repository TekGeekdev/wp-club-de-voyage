<?php get_header(); ?>

<body>
    <nav id="nav-principale" class="plein-plan">
        <div>
            <span>Club de voyage</span>
            <a href="#">Acceuil</a>
            <a href="#">Voyage</a>
            <a href="#">Destination</a>
        </div>
        <form action="">
            <input type="text" id="recherche" name="recherche" placeholder="faire une recherche"
                class="champ-recherche">
            <input type="submit" value="Rechercher" class="bouton">
        </form>
    </nav>
    <main>
        <header class="contenu-sur-image plein-plan">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tour-eiffel.jpg" alt="image destination">
            <div>
                <h1>Chsoissisez la destination de vos rêves</h1>
                <p>Un choix de plus de 200 destinations</p>
                <p>Ledeur Mathieu</p>
                <p>3800 R. Sherbrooke E, Montréal, QC H1X 2A2</p>
                <p>(514) 254-7131</p>
                <a href="mailto:name@maisonneuve.com">Notre email</a>
                <div class="boite-icones">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="facebook">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt="instagram">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="twitter">
                </div>
            </div>
        </header>
        <section class="post">
            <header>
                <h2>Destinations populaires</h2>
            </header>
            <div class="grille-cartes">
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mont-st-michel.jpeg" alt="">
                    <h3>Welcome</h3>
                    <p>If there is one unmissable visit to be made in Brittany, it is to the bay of Mont Saint-Michel
                        and its famous Mount (2½ hours from Lorient). One tiny precision: the Mount is actually in
                        Normandy, but the bay of Mont-Saint-Michel is in Brittany!</p>
                    <a href="#">Plus d'informations</a>
                </article>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mont-st-michel.jpeg" alt="">
                    <h3>Welcome</h3>
                    <p>If there is one unmissable visit to be made in Brittany, it is to the bay of Mont Saint-Michel
                        and its famous Mount (2½ hours from Lorient). One tiny precision: the Mount is actually in
                        Normandy, but the bay of Mont-Saint-Michel is in Brittany!</p>
                    <a href="#">Plus d'informations</a>
                </article>
                <article>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mont-st-michel.jpeg" alt="">
                    <h3>Welcome</h3>
                    <p>If there is one unmissable visit to be made in Brittany, it is to the bay of Mont Saint-Michel
                        and its famous Mount (2½ hours from Lorient). One tiny precision: the Mount is actually in
                        Normandy, but the bay of Mont-Saint-Michel is in Brittany!</p>
                    <a href="#">Plus d'informations</a>
                </article>
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
        </section>

<?php get_footer(); ?>