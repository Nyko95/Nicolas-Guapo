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
                "Ancien commercial dans l'immobilier et l'automobile, je me lance dans une nouvelle aventure : devenir développeur web. Ma passion pour la création, l'apprentissage continu, et la lecture me pousse à exceller dans ce domaine. Prêt à concevoir des solutions web sur mesure, je suis à votre service pour enrichir votre présence en ligne."
            </p>
        </div>
    </div>
    
    <!-- Ajout de la sous-section pour CV et LinkedIn -->
    <div class="parcours-extra">
        <p>Téléchargez mon CV et visitez mon profil LinkedIn pour en savoir plus sur mon parcours professionnel.</p>
        <div class="links">
            <a href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/docs/nicolas-guapo-cv.pdf" class="btn cv-btn" target="_blank">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pdf-icon.png" alt="PDF Icon" class="icon" /> Télécharger CV
            </a>
            <a href="https://www.linkedin.com/in/nicolas-guapo-1b2848131" class="btn linkedin-btn" target="_blank">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/linkedin-icon.png" alt="LinkedIn Icon" class="icon" /> Mon LinkedIn
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
        <p>Parlons de votre projet...</p>
        <div class="contact-content">
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="2b8afb3" title="Formulaire de contact"]'); ?>
            </div>
           
        </div>
    </div>
</section>

<?php get_footer(); ?>
