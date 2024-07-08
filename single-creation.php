<?php get_header(); ?>

<main class="single-creation">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="creation-detail">
                <header class="creation-header">
                    <h1><?php the_title(); ?></h1>
                    <p class="creation-date">Réalisé le : <?php the_field('date'); ?></p>
                </header>
                
                <div class="creation-content">
                    <?php 
                    $image = get_field('image');
                    if ($image) : ?>
                        <div class="creation-image">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endif; ?>

                    <div class="creation-description">
                        <?php the_field('description'); ?>
                    </div>

                    <p class="creation-technologies">
                        Technologies utilisées :
                        <?php 
                        for ($i = 1; $i <= 4; $i++) {
                            $tech_icon = get_field('techno_' . $i . '_icon');
                            if ($tech_icon) {
                                echo '<img src="' . esc_url($tech_icon['url']) . '" alt="' . esc_attr($tech_icon['alt']) . '" class="tech-icon" />';
                            }
                        }
                        ?>
                    </p>

                    <div class="creation-links">
                        <?php if (get_field('github')) : ?>
                            <a class="btn github-btn" href="<?php the_field('github'); ?>" target="_blank">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/github.png" alt="GitHub Icon" class="icon" />
                            </a>
                        <?php endif; ?>
                        <?php if (get_field('site')) : ?>
                            <a class="btn site-btn" href="<?php the_field('site'); ?>" target="_blank">Visiter le site</a>
                        <?php endif; ?>
                    </div>
                </div>
            </article>

        <?php endwhile; else : ?>
            <p>Aucun projet trouvé.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>