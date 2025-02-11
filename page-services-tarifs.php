<?php
/*
Template Name: Services et Tarifs
*/
get_header();
?>

<div class="services-tarifs-container">

    <!-- Titre principal -->
    <h1 class="services-title">Les offres et tarifs<br> pour créer son site internet</h1>

    <!-- Paragraphe d'introduction -->
    <p class="services-intro">
    <span class="info-text">Les prix affichés sont indicatifs. Ils peuvent changer en fonction du projet et des demandes particulières.</span>
        <br><br>
        Un premier échange sera <strong>nécessaire (via visio)</strong> pour discuter <strong>de votre besoin.</strong>
        <br>
        Je pourrai mieux <strong>connaître votre activité</strong> et je vous expliquerai ma <strong>façon de travailler.</strong>
        <br><br>
        <strong>Vous ne savez pas quel type de site choisir ?</strong><br> L’appel découverte est là aussi pour <strong>vous guider</strong> et mieux <strong>vous indiquer</strong> ce dont vous avez besoin.
    </p>

    <!-- Bouton vers la section Créations -->
    <div class="creations-button">
        <a href="/#creation" class="btn">Jeter un oeil à mes créations</a>
    </div>

    <!-- Section Services -->
    <div class="services-grid">

   <!-- Bloc 1 : Site One Page -->
<div class="service-block">
    <h2>Site One Page</h2>
    <p class="service-description">Un site simple et efficace pour présenter l'essentiel de votre activité sur une seule page.</p>
    <p class="service-price">950€</p>
    <ul class="service-details">
        <li><i class="fas fa-server icon-space"></i> <span>Hébergement + Nom de domaine</span></li>
        <li><i class="fas fa-paint-brush icon-space"></i> <span>Installation thème et extensions de base</span></li>
        <li><i class="fas fa-file-alt icon-space"></i> <span>Webdesign personnalisé : page unique + pages légales</span></li>
        <li><i class="fas fa-chart-line icon-space"></i> <span>Optimisation référencement, performances</span></li>
        <li><i class="fas fa-shield-alt icon-space"></i> <span>Sécurité et sauvegardes du site</span></li>
        <li><i class="fas fa-mobile-alt icon-space"></i> <span>Responsive : adapté à tous les écrans</span></li>
        <li><i class="fas fa-handshake icon-space"></i> <span>Accompagnement + Visio d’échanges</span></li>
        <li><i class="fas fa-tools icon-space"></i> <strong><span>Maintenance incluse de 3 mois</span></strong></li>
    </ul>
</div>

<!-- Bloc 2 : Site Vitrine -->
<div class="service-block">
    <h2>Site Vitrine</h2>
    <p class="service-description">Un site pour présenter votre activité avec plusieurs pages.</p>
    <p class="service-price">1600€</p>
    <ul class="service-details">
        <li><i class="fas fa-server icon-space"></i> <span>Hébergement + Nom de domaine</span></li>
        <li><i class="fas fa-paint-brush icon-space"></i> <span>Installation thème et extensions de base</span></li>
        <li><i class="fas fa-file-alt icon-space"></i> <span>Webdesign personnalisé : plusieurs pages</span></li>
        <li><i class="fas fa-chart-line icon-space"></i> <span>Optimisation référencement, performances</span></li>
        <li><i class="fas fa-shield-alt icon-space"></i> <span>Sécurité et sauvegardes du site</span></li>
        <li><i class="fas fa-mobile-alt icon-space"></i> <span>Responsive : adapté à tous les écrans</span></li>
        <li><i class="fas fa-handshake icon-space"></i> <span>Accompagnement + Visio d’échanges</span></li>
        <li><i class="fas fa-tools icon-space"></i> <strong><span>Maintenance incluse de 3 mois</span></strong></li>
    </ul>
</div>

<!-- Bloc 3 : Refonte Site Vitrine -->
<div class="service-block">
    <h2>Refonte Site Vitrine</h2>
    <p class="service-description">Modernisation et optimisation de votre site existant.</p>
    <p class="service-price">1900€</p>
    <ul class="service-details">
        <li><i class="fas fa-server icon-space"></i> <span>Migration hébergement/nom de domaine si besoin</span></li>
        <li><i class="fas fa-paint-brush icon-space"></i> <span>Changement thème/extensions de base</span></li>
        <li><i class="fas fa-id-card icon-space"></i> <span>Réfection de l’identité visuelle</span></li>
        <li><i class="fas fa-file-alt icon-space"></i> <span>Webdesign personnalisé des pages et restructuration des liens</span></li>
        <li><i class="fas fa-chart-line icon-space"></i> <span>Optimisation référencement, performances</span></li>
        <li><i class="fas fa-shield-alt icon-space"></i> <span>Mise en place du système de sécurité et sauvegardes du site</span></li>
        <li><i class="fas fa-mobile-alt icon-space"></i> <span>Responsive : adapté à tous les écrans</span></li>
        <li><i class="fas fa-handshake icon-space"></i> <span>Accompagnement sur l’utilisation de son site + Visio d’échanges tout au long du projet</span></li>
        <li><i class="fas fa-tools icon-space"></i> <strong><span>Maintenance incluse de 3 mois</span></strong></li>
    </ul>
</div>

    </div>
<!-- Nouveau bloc de forfait de maintenance -->
<div class="maintenance-package">
    <div class="maintenance-content">
        <h2>Forfait de Maintenance</h2>
        <p class="maintenance-price">30€ par mois</p>
        <p>
            <strong>Un site internet se doit d’être régulièrement mis à jour pour rester performant et sécurisé.</strong>
            <br><br>
            Chacune de mes prestations inclut 3 mois de maintenance.
            <br>
            Après ces trois mois, un forfait mensuel vous sera proposé.
            <br>
            C’est sans engagement et il est possible de l’arrêter à tout moment.
            <br><br>
            <i class="fas fa-cog"></i> Mise à jour des extensions, du thème et du cœur de WordPress.
            <br>
            <i class="fas fa-cog"></i> Correction des bugs éventuels.
            <br>
            <i class="fas fa-cog"></i> Modification de contenu si besoin.
            <br>
            <i class="fas fa-cog"></i> Suivi et accompagnement sur le site si vous avez des questions.
        </p>
    </div>
    <div class="maintenance-image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ordinateur.jpg" alt="main-ordinateur-clavier" />
    </div>
</div>

<section class="faq-section">
    <div class="conteneur">
        <div class="faq-title">
            <h2>Vous pouvez répéter la question ?</h2>
        </div>
        <div class="faq-content">
            <div class="faq-questions">
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <h3>Quelles sont les modalités de paiement ?</h3>
                        <span class="arrow">&#x25BC;</span>
                    </div>
                    <div class="faq-answer">
                        <p>Le paiement d’une prestation se déroule en trois temps :</p>
                        <ul>
                            <li>Un acompte de 30% avant le début des travaux</li>
                            <li>Un second paiement de 30% au premier rendu du site</li>
                            <li>Le solde restant de 40% à la livraison du site</li>
                        </ul>
                        <p>Le paiement se fait uniquement par virement.</p>
                        <p>(La TVA n’est pas applicable, conformément à l’article 293B du CGI)</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <h3>Combien de temps prend la création d’un site ?</h3>
                        <span class="arrow">&#x25BC;</span>
                    </div>
                    <div class="faq-answer">
                        <p>Chaque projet étant unique, il est délicat d’annoncer un délai précis. Pour un site vitrine classique, comptez en moyenne 2 à 3 semaines.</p>
                        <p>Cela comprend la création mais aussi nos échanges, les éventuelles modifications et vos retours.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <h3>Comment se passe le suivi ?</h3>
                        <span class="arrow">&#x25BC;</span>
                    </div>
                    <div class="faq-answer">
                        <p>Tout au long de la création de site, je vous informerai de l’avancée des travaux.</p>
                        <p>Cela se fait principalement par mail mais d’autres moyens de communication peuvent être utilisés en fonction de vos habitudes (WhatsApp, Téléphone, Discord…)</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <h3>Et après la livraison du site ?</h3>
                        <span class="arrow">&#x25BC;</span>
                    </div>
                    <div class="faq-answer">
                        <p>Lorsque le site est terminé et qu’il correspond à vos besoins, je vous envoie par mail un récapitulatif de tout le projet sous forme de charte.</p>
                        <p>Elle comprend tous vos accès de connexion (site WordPress, hébergement, mail…), les informations sur votre identité graphique (couleurs, polices) ainsi que mes derniers conseils vis-à-vis du site.</p>
                        <p>Enfin, une maintenance de trois mois est incluse dans toutes les formules. Il sera possible de la continuer via un forfait de maintenance pour 30€ / mois.</p>
                    </div>
                </div>
            </div>
            <div class="faq-image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/contact.jpg" alt="Photo de Nicolas Guapo">
                <div class="faq-text">
                    <h4>Prêt à montrer votre activité sur internet ?</h4>
                    <p>Discutons de votre projet grâce à un premier échange découverte !</p>
                    <a href="contact" class="button">
                        <i class="fas fa-coffee"></i> Contact
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


</div>
<section class="home-footer-section">
  <div class="container">
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/monlogo1.png" alt="Logo"> <!-- Chemin vers votre logo -->
    </div>
    <div class="footer-text">
      J’aide les TPE, PME et les indépendants à développer leur activité grâce à un site internet et à un suivi personnalisé.
    </div>
    <div class="footer-links">
      <ul>
        <li><a href="services-et-tarifs">Tarifs</a></li>
        <li><a href="#creation">Portfolio</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="#parcours">À propos</a></li>
      </ul>
    </div>
  </div>
</section>


<?php get_footer(); ?>