<?php get_header(); ?>

<!-- Section principale du service -->
<section id="service" class="service-detail">
    <div class="container">
        <h1 class="service-title"><?php the_title(); ?></h1>
        
        <!-- Détails du service -->
        <div class="service-details">
            
            
            <!-- Description détaillée -->
            <div class="service-item">
                <strong>Description :</strong> 
                <?php the_field('description_detaillee'); ?>
            </div>
            
            <!-- Nombre de pages -->
            <div class="service-item">
                <strong>Nombre de pages :</strong> 
                <?php the_field('nombre_de_pages'); ?>
            </div>
            
            <!-- Charte graphique incluse -->
            <div class="service-item">
                <strong>Charte graphique incluse :</strong> 
                <?php the_field('charte_graphique_incluse'); ?>
            </div>
            
            <!-- Design personnalisé -->
            <div class="service-item">
                <strong>Design personnalisé :</strong> 
                <?php the_field('design_personnalisé'); ?>
            </div>
            
            <!-- Optimisation SEO -->
            <div class="service-item">
                <strong>Optimisation SEO :</strong> 
                <?php the_field('optimisation_seo'); ?>
            </div>
            
            <!-- Révisions incluses -->
            <div class="service-item">
                <strong>Révisions incluses :</strong> 
                <?php the_field('révisions_incluses'); ?>
            </div>
            
            <!-- Délai de réalisation -->
            <div class="service-item">
                <strong>Délai de réalisation :</strong> 
                <?php the_field('délai_de_réalisation'); ?>
            </div>
        </div>
        
        <!-- Lien de contact personnalisé -->
        <div class="service-contact">
            <a href="<?php the_field('lien_de_contact_personnalisé'); ?>" class="btn-contact">Cette formule m'intéresse</a>
        </div>
    
    <!-- Tarif -->
    <div class="service-item">
                <strong>Tarif :</strong> 
                <?php the_field('tarif'); ?>
            </div>
            </div>
</section>

<?php get_footer(); ?>