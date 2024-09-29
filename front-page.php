<?php get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

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
Lancer ma micro-entreprise m'a permis de transformer cette passion en métier, et je suis prêt à relever de nouveaux défis avec enthousiasme, rigueur et créativité. Que vous ayez besoin d'un site vitrine, d'une refonte de votre plateforme, ou de solutions techniques avancées, je suis à votre disposition pour donner vie à vos projets web. <br><br>Ma philosophie ?
  <br><br>
  <span class="phrase-accroche">Passer de la boîte de vitesses à la boîte de code, sans jamais caler !"</span>
            </p>
        </div>
    </div>
    
    <!-- Ajout de la sous-section pour CV et LinkedIn -->
    <div class="parcours-extra">
        <p>Téléchargez mon CV et visitez mon profil LinkedIn pour en savoir plus sur mon parcours professionnel.</p>
        <div class="links">
            <a href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/nicolas_guapo_cv_DEV_2024.pdf" class="btn cv-btn" target="_blank">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pdf-icon.png" alt="PDF Icon" class="icon" />Téléchargez mon CV
            </a>
            <a href="https://www.linkedin.com/in/nicolas-guapo%E2%9C%85-1b2848131/" class="btn linkedin-btn" target="_blank">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/linkedin-icon.png" alt="LinkedIn Icon" class="icon" /> 
            </a>
        </div>
    </div>
</section>


<!--Inclusion du fichier "competences" -->
<?php get_template_part('template-parts/competence'); ?>


<section id="services" class="services-section">
    <div class="container">
        <h2 class="section-title">Mes Services</h2>
        <div class="services-grid">
            <?php
            $args = array('post_type' => 'service', 'posts_per_page' => -1);
            $services_query = new WP_Query($args);
            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post(); ?>
                    <div class="service-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="service-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php endif; ?>
                            </div>
                            <h3 class="service-title"><?php the_title(); ?></h3>
                            <p class="service-excerpt"><?php the_excerpt(); ?></p>
                            <span class="service-link">En savoir plus</span>
                        </a>
                    </div>
                <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<!--Inclusion du fichier "creation" -->
<?php get_template_part('template-parts/creation'); ?>

<!-- Section "Contact" -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="contact-title">Contact</h2>
        <p>Parlons <span class="caveat-font"> de votre projet...</span></p>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><span class="caveat-font">Adresse</span> <br><br> 95570, Attainville</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-id-card"></i>
                    <span><span class="caveat-font">N° Siret</span> <br><br> 933187775</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span><span class="caveat-font">Email</span> <br><br> nicolas.lecoeur.guapo@gmail.com</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <span><span class="caveat-font">Téléphone</span> <br><br> 0616354094</span>
                </div>
            </div>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="2b8afb3" title="Formulaire de contact"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
