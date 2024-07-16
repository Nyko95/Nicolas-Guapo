<section id="creation" class="creation">
    <div class="container">
        <h2 class="creation-title">Mes Créations</h2>

        <div class="creation-list swiper-container">
            <div class="swiper-wrapper">
                <?php
                // Utilisation de WP_Query pour récupérer les projets
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
                    <article class="creation-item swiper-slide">
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

        <!-- Ajouter les boutons de navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Ajouter les paginations -->
        <div class="swiper-pagination"></div>
    </div>
</section>