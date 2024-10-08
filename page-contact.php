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
        <a href="mailto:nicolas.lecoeur.guapo@gmail.com" target="_blank">nicolas.lecoeur.guapo@gmail.com</a>
      </p>
    </div>
    
    <div class="contact-block linkedin">
      <i class="fab fa-linkedin"></i>
      <h4>Sur Linkedin</h4>
      <a href="https://www.linkedin.com/in/nicolas-guapo%E2%9C%85-1b2848131/" class="btn" target="_blank">Aller sur Linkedin</a>
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

<?php get_footer(); ?>