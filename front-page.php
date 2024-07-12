<?php get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<!-- Section "Parcours" -->
<section id="parcours" class="parcours">
    <div class="parcours-container">
        <div class="parcours-image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/parcours.png" alt="Photo de Nicolas Guapo">
        </div>
        <div class="parcours-text">
            <h2 class="parcours-title">À propos de moi</h2>
            <p class="parcours-description">
            "Ayant fait la transition de l'automobile à la programmation, j'ai troqué les rapports de vente contre des lignes de code. Pendant sept ans, j'ai perfectionné l'art du conseil commercial, guidant mes clients dans le choix de leur véhicule idéal. Aujourd'hui, je me consacre à façonner des sites web. Une passion croissante pour la technologie m'a orienté vers une nouvelle carrière : le Développement Web. Sérieux, assidu et toujours prêt à relever de nouveaux défis, j'incarne la transition d'un conseiller commercial vers un développeur passionné. <br><br>Ma philosophie ?
  <br><br>
  <span class="phrase-accroche">Passer de la boîte de vitesses à la boîte de code, sans jamais caler !"</span>
            </p>
        </div>
    </div>
    
    <!-- Ajout de la sous-section pour CV et LinkedIn -->
    <div class="parcours-extra">
        <p>Téléchargez mon CV et visitez mon profil LinkedIn pour en savoir plus sur mon parcours professionnel.</p>
        <div class="links">
            <a href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/nicolas-guapo-cv.pdf" class="btn cv-btn" target="_blank">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pdf-icon.png" alt="PDF Icon" class="icon" />Téléchargez mon CV
            </a>
            <a href="https://www.linkedin.com/in/nicolas-guapo-1b2848131" class="btn linkedin-btn" target="_blank">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/linkedin-icon.png" alt="LinkedIn Icon" class="icon" /> 
            </a>
        </div>
    </div>
</section>

<!-- Section "Création" -->
<section id="creation" class="creation">
    <div class="container">
        <h2 class="creation-title">Mes Créations</h2>

        <div class="creation-list">
            <?php
            // WP_Query pour récupérer les projets
            $args = array(
                'post_type' => 'creation',
                'posts_per_page' => 6 // Nombre de projets à afficher
            );
            $creation_query = new WP_Query($args);

            if ($creation_query->have_posts()) :
                while ($creation_query->have_posts()) : $creation_query->the_post();
                    $image = get_field('image');
                    $short_description = wp_trim_words(get_field('description'), 20); // Résumé court
            ?>
                <article class="creation-item">
                    <?php if ($image) : ?>
                        <div class="creation-image">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
                        </div>
                    <?php endif; ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo $short_description; ?></p>
                    <a class="btn" href="<?php the_permalink(); ?>">En savoir plus</a>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <p>Aucun projet trouvé.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Section "Contact" -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="contact-title">Contact</h2>
        <p>Parlons <span class="caveat-font"> de votre projet...</span></p>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><span class="caveat-font">Adresse</span> :<br><br> 95570, Attainville</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-id-card"></i>
                    <span><span class="caveat-font">N° Siret</span> :<br><br> A venir...</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span><span class="caveat-font">Email</span> :<br><br> nicolas.lecoeur.guapo@gmail.com</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <span><span class="caveat-font">Téléphone</span> :<br><br> 0616354094</span>
                </div>
            </div>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="2b8afb3" title="Formulaire de contact"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
