<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo is_front_page() ? 'Créateur de sites WordPress pour TPE, PME et indépendants dans le Val-d\'Oise (95). Spécialisé en site vitrine, e-commerce, et solutions sur mesure avec un accompagnement personnalisé pour développer votre activité.' : get_the_excerpt(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <title>Création de Sites Web à Domont dans le val d'Oise (95)</title>
    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WSF8NPB8ZN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WSF8NPB8ZN');
</script>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="container">
            <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/monlogo1.png" alt="Logo">
                </a>
            </div>
            
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <div class="menu-toggle-icon">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </button>
            
            <nav id="primary-menu" class="main-navigation">
                <ul class="menu">
                    <!-- <li class="menu-item menu-item-accueil">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
                    </li> -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-principal',
                        'container' => false,
                        'items_wrap' => '%3$s', // Enveloppe les items sans créer de nouvelle balise UL
                        'fallback_cb' => false,
                    ));
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <?php wp_footer(); ?>
</body>
</html>
