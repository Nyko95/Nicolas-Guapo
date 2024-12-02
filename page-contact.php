<?php
/*
Template Name: Page Contact
*/
get_header();
?>

<div class="contact-page">
  <h1 class="contact-title">Parlons de votre projet</h1>
  <p class="contact-subtitle">Réponse rapide assurée sous 48h</p>
  <p class="contact-intro">
    Si vous avez une question, une demande d’information ou si vous souhaitez prendre un rendez-vous, n’hésitez pas à me contacter via les moyens de communication ci-dessous.
  </p>

  <div class="contact-blocks">
    <div class="contact-block email">
      <i class="fas fa-envelope"></i>
      <h4>Par e-mail</h4>
      <p>
        <a href="mailto:contact@nicolas-guapo.fr" target="_blank">contact@nicolas-guapo.fr</a>
      </p>
    </div>
    
    <div class="contact-block instagram">
    <i class="fab fa-instagram"></i>
    <h4>Sur Instagram</h4>
    <a href="https://www.instagram.com/nguapo_dev/" class="btn" target="_blank">Aller sur Instagram</a>
  </div>

    <div class="contact-block linkedin">
      <i class="fab fa-linkedin"></i>
      <h4>Sur Linkedin</h4>
      <a href="https://www.linkedin.com/in/nicolas-guapo/" class="btn" target="_blank">Aller sur Linkedin</a>
    </div>
  </div>

<!-- Section de contact -->
<div class="contact-section">
  <h2>Vous avez une question, une idée, un projet pour lequel vous avez besoin d'aide ?</h2>
  <p>Contactez-moi via ce formulaire, je serai ravi de vous aider.</p>

  <!-- Formulaire de contact -->
  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="2b8afb3" title="Formulaire de contact"]'); ?>
  </div>
</div>
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
  
</section>

<?php get_footer(); ?>