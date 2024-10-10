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
            <p class="service-price">750€</p>
            <ul class="service-details">
                <li><i class="fas fa-server icon-space"></i> Hébergement + Nom de domaine</li>
                <li><i class="fas fa-paint-brush icon-space"></i> Installation thème et extensions de base</li>
                <li><i class="fas fa-file-alt icon-space"></i> Webdesign personnalisé : page unique + pages légales</li>
                <li><i class="fas fa-chart-line icon-space"></i> Optimisation référencement, performances</li>
                <li><i class="fas fa-shield-alt icon-space"></i> Sécurité et sauvegardes du site</li>
                <li><i class="fas fa-mobile-alt icon-space"></i> Responsive : adapté à tous les écrans</li>
                <li><i class="fas fa-handshake icon-space"></i> Accompagnement + Visio d’échanges</li>
                <li><i class="fas fa-tools icon-space"></i> <strong>Maintenance incluse de 3 mois</strong></li>
            </ul>
        </div>

        <!-- Bloc 2 : Site Vitrine -->
        <div class="service-block">
            <h2>Site Vitrine</h2>
            <p class="service-description">Un site pour présenter votre activité avec plusieurs pages.</p>
            <p class="service-price">1400€</p>
            <ul class="service-details">
                <li><i class="fas fa-server icon-space"></i> Hébergement + Nom de domaine</li>
                <li><i class="fas fa-paint-brush icon-space"></i> Installation thème et extensions de base</li>
                <li><i class="fas fa-file-alt icon-space"></i> Webdesign personnalisé : plusieurs pages</li>
                <li><i class="fas fa-chart-line icon-space"></i> Optimisation référencement, performances</li>
                <li><i class="fas fa-shield-alt icon-space"></i> Sécurité et sauvegardes du site</li>
                <li><i class="fas fa-mobile-alt icon-space"></i> Responsive : adapté à tous les écrans</li>
                <li><i class="fas fa-handshake icon-space"></i> Accompagnement + Visio d’échanges</li>
                <li><i class="fas fa-tools icon-space"></i> <strong>Maintenance incluse de 3 mois</strong></li>
            </ul>
        </div>

        <!-- Bloc 3 : Refonte Site Vitrine -->
        <div class="service-block">
            <h2>Refonte Site Vitrine</h2>
            <p class="service-description">Modernisation et optimisation de votre site existant.</p>
            <p class="service-price">1700€</p>
            <ul class="service-details">
                <li><i class="fas fa-server icon-space"></i> Migration hébergement/nom de domaine si besoin</li>
                <li><i class="fas fa-paint-brush icon-space"></i> Changement thème/extensions de base</li>
                <li><i class="fas fa-id-card icon-space"></i> Réfection de l’identité visuelle</li>
                <li><i class="fas fa-file-alt icon-space"></i> Webdesign personnalisé des pages et restructuration des liens</li>
                <li><i class="fas fa-chart-line icon-space"></i> Optimisation référencement, performances</li>
                <li><i class="fas fa-shield-alt icon-space"></i> Mise en place du système de sécurité et sauvegardes du site</li>
                <li><i class="fas fa-mobile-alt icon-space"></i> Responsive : adapté à tous les écrans</li>
                <li><i class="fas fa-handshake icon-space"></i> Accompagnement sur l’utilisation de son site + Visio d’échanges tout au long du projet</li>
                <li><i class="fas fa-tools icon-space"></i> <strong>Maintenance incluse de 3 mois</strong></li>
            </ul>
        </div>

    </div>
<!-- Nouveau bloc de forfait de maintenance -->
<div class="maintenance-package">
    <div class="maintenance-content">
        <h2>Forfait de Maintenance</h2>
        <p class="maintenance-price">25€ par mois</p>
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

</div>
<section class="home-footer-section">
  <div class="container">
    <div class="footer-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo"> <!-- Chemin vers votre logo -->
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