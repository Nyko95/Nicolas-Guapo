<?php get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<!-- Section Mes Services -->
<section class="services">
<div class="container">
  <h2 class="section-title">Mes Services</h2>
  
  <div class="services-intro">
    <h3 class="services-subtitle">Avoir un site professionnel pour développer son activité</h3>
    <p>Vous n’avez pas besoin d’un site ultra-complexe pour faire passer votre message et attirer l’attention. 
    La simplicité, lorsqu’elle est bien pensée, peut être votre meilleure alliée pour mettre en valeur votre activité et atteindre vos objectifs.</p>
  </div>
  
 <!-- Bloc des questions et solutions -->
<div class="services-blocks">
  <!-- Bloc 1 -->
  <div class="service-block">
    <h4>"Pourquoi avoir un site ?"</h4>
    <p>Pour montrer votre travail, il est devenu indispensable d’être présent sur Internet aujourd’hui.
    Telle une vitrine de boulangerie qui nous fait envie avec ses pâtisseries, <strong>votre site donnera envie à vos clients de faire appel à vos services !</strong> <br>Votre site devient votre vitrine ouverte 24/7.</p>
  </div>

  <!-- Bloc 2 -->
  <div class="service-block">
    <h4>"Est-ce que créer un site coûte cher ?"</h4>
    <p>Pas nécessairement !<br> <strong>Je propose des solutions adaptées à votre budget</strong> tout en garantissant un site optimisé et professionnel. <br>
    Il existe toujours une <strong>option abordable</strong> pour créer un site de qualité qui répond à vos besoins sans dépasser vos moyens.</p>
  </div>

  <!-- Bloc 3 -->
  <div class="service-block">
    <h4>"Et si je n'ai pas le temps de m'en occuper ?"</h4>
    <p>Pas de panique !<br> <strong>Je propose des services de maintenance</strong> qui vous permettent de vous concentrer sur votre activité.<br> Pendant ce temps, je m’assure que votre site reste à jour et fonctionne de manière optimale, sans que vous ayez à vous en soucier.</p>
  </div>

</div>

<!-- Bouton vers les tarifs -->
<div class="services-button">
  <a href="services-et-tarifs" class="btn">
    <i class="fas fa-tags"></i> Consulter les tarifs
  </a>
</div>
</div>
</section>

<!-- Section "Parcours" -->
<!-- Section "Parcours" -->
<section id="parcours" class="parcours">
    <div class="parcours-container">
        <div class="parcours-image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/profil.jpg" alt="Photo de Nicolas Guapo">
        </div>
        <div class="parcours-text">
            <h2 class="parcours-title">À propos de moi</h2>
            <p class="parcours-description">
                "Après avoir passé sept ans dans le secteur de l'automobile en tant que conseiller commercial, où j'ai perfectionné l'art de l'écoute et du conseil client, j'ai entrepris une reconversion vers une carrière qui me passionne depuis toujours : le développement web.<br><br>
                Aujourd'hui, en tant que développeur web WordPress, je mets à profit ces compétences en accompagnant mes clients dans la création et l'optimisation de leurs sites internet. Grâce à ma formation spécialisée et mon expérience de terrain, je propose des solutions sur mesure, adaptées aux besoins spécifiques de chaque projet.<br><br>
                
                <strong>Ma mission :</strong> Apporter des clients à mes clients ! 🚀<br><br>
                En tant que créateur de sites WordPress, je conçois des outils performants et optimisés pour aider les TPE, PME et indépendants à développer leur visibilité en ligne. Mon objectif est simple : transformer votre site en un levier de croissance pour attirer plus de prospects et booster votre activité.<br><br>
                
                Lancer ma micro-entreprise m'a permis de transformer cette passion en métier, et je suis prêt à relever de nouveaux défis avec enthousiasme, rigueur et créativité. Que vous ayez besoin d'un site vitrine, d'une refonte de votre plateforme, ou de solutions techniques avancées, je suis à votre disposition pour donner vie à vos projets web. <br><br>
                
         
            </p>
        </div>
    </div>
</section>

<!-- Section "Collaborer avec moi" -->
<section id="collaborer" class="collaborer">
    <h2 class="collaborer-title">Collaborer avec moi,<br> comment ça se passe ?</h2>
    <div class="collaborer-container">
        <div class="collaborer-step">
            <div class="collaborer-icon">
                <div class="icon-circle">
                    <i class="fas fa-arrow-down"></i>
                </div>
            </div>
            <div class="collaborer-content">
                <h3>1. Premier contact</h3>
                <p>On échange sur votre projet, vos idées et vos objectifs. Je prends le temps d'écouter vos besoins pour bien cerner vos attentes.</p>
            </div>
        </div>
        <div class="collaborer-step">
            <div class="collaborer-icon">
                <div class="icon-circle">
                    <i class="fas fa-arrow-down"></i>
                </div>
            </div>
            <div class="collaborer-content">
                <h3>2. Proposition & devis</h3>
                <p>Je vous envoie un devis détaillé avec une présentation de la solution que je vous propose. Nous ajustons ensemble les points nécessaires pour que tout soit clair avant de commencer.</p>
            </div>
        </div>
        <div class="collaborer-step">
            <div class="collaborer-icon">
                <div class="icon-circle">
                    <i class="fas fa-arrow-down"></i>
                </div>
            </div>
            <div class="collaborer-content">
                <h3>3. Création & suivi</h3>
                <p>Une fois le devis validé, je me mets au travail sur votre site. Je vous tiens régulièrement informé de l’avancée du projet, et vous pouvez suivre son évolution à chaque étape.</p>
            </div>
        </div>
        <div class="collaborer-step">
            <div class="collaborer-icon">
                <div class="icon-circle">
                    <i class="fas fa-arrow-down"></i>
                </div>
            </div>
            <div class="collaborer-content">
                <h3>4. Livraison & support</h3>
                <p>Votre site est prêt ! Je vous remets les accès, la charte graphique, et les documents essentiels. 3 mois de maintenance sont inclus, avec possibilité de prolongation pour seulement 30€ par mois.</p>
            </div>
        </div>
    </div>
    <!-- Ligne de progression -->
    <div class="progress-line"></div>
</section>

<!--Inclusion du fichier "competences" -->
<?php get_template_part('template-parts/competence'); ?>




<!--Inclusion du fichier "creation" -->
<?php get_template_part('template-parts/creation'); ?>

<!--Section "contact" -->
<section class="home-contact-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/contacte.webp');">
  <div class="container">
    <h2 class="contact-title">Contact</h2>
    <div class="contact-content">
      <div class="contact-info">
        <p class="contact-subtitle">Prêt à travailler ensemble ?</p>
        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="contact-button">
          <i class="fas fa-envelope"></i> Contacter moi
        </a>
      </div>
    </div>
  </div>
</section>

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
