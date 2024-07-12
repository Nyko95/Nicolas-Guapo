<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap" rel="stylesheet">
    <title>Nicolas Guapo Dev</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="container">
            <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Logo">
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
                    <!-- Lien Accueil -->
                    <li class="menu-item menu-item-accueil">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
                    </li>
                    <!-- Liens vers les sections -->
                    <li class="menu-item">
                        <a href="#parcours">À propos</a>
                    </li>
                    <li class="menu-item">
                        <a href="#creation">Création</a>
                    </li>
                    <li class="menu-item">
                        <a href="#contact">Contact</a>
                    </li>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-principal',
                        'container' => false,
                        
                    ));
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <?php wp_footer(); ?>
   
</body>
</html>
