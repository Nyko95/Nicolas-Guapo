<?php
// Fonction pour la configuration initiale du thème
function nicolas_guapo_setup() {
    // Active la gestion des menus dans l'interface d'administration WordPress
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'nicolas-guapo'), // Pour le menu du header
        'menu-footer' => __('Menu Footer', 'nicolas-guapo'), // Pour le menu du footer
    ));
}
add_action('after_setup_theme', 'nicolas_guapo_setup');

// Fonction pour charger les styles CSS et Google Fonts
function nicolas_guapo_enqueue_styles() {
    // Charger la police Poppins depuis Google Fonts
    wp_enqueue_style('nicolas-guapo-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
    
    // Charger la police Caveat depuis Google Fonts
    wp_enqueue_style('nicolas-guapo-caveat-font', 'https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&display=swap');
}
add_action('wp_enqueue_scripts', 'nicolas_guapo_enqueue_styles');

// Fonction pour ajouter les scripts et styles CSS
function nicolas_guapo_scripts() {
    // Ajoute le fichier style.css de votre thème
    wp_enqueue_style('nicolas-guapo-style', get_stylesheet_uri());

    // Ajoute le fichier scripts.js de votre thème
    wp_enqueue_script('nicolas-guapo-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'nicolas_guapo_scripts');

// Fonction pour charger les styles CSS générés à partir de Sass
function nicolas_guapo_custom_styles() {
    // Déclarer le fichier CSS généré à partir de Sass
    wp_enqueue_style(
        'nicolas-guapo-custom-css',
        get_template_directory_uri() . '/sass/style.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'nicolas_guapo_custom_styles');


//SWIPER POUR LA SECTION "CREATION"

// Fonction pour ajouter SwiperJS
function nicolas_guapo_enqueue_swiper() {
    // Ajouter le CSS de Swiper
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');

    // Ajouter le JS de Swiper
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

    // Ajouter un script personnalisé pour initialiser Swiper
    wp_add_inline_script('swiper-js', "
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.swiper-container', {
                effect: 'coverflow',
                grabCursor: true,
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                centeredSlides: true,
                spaceBetween: 15,
                loop: true,
                coverflowEffect: {
                    depth: 0,
                    modifier: 1,
                    rotate: 60,
                    scale: 0.6,
                    slideShadows: true,
                    stretch: 0,
                },
                autoplay: {
                    delay: 4000,
                },
            });
        });
    ");
}
add_action('wp_enqueue_scripts', 'nicolas_guapo_enqueue_swiper');

function add_fontawesome() {
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css' );
}
add_action('wp_enqueue_scripts', 'add_fontawesome');