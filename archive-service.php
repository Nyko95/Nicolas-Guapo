<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <div class="service-item">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">En savoir plus</a>
        </div>
    <?php endwhile;
endif;
?>