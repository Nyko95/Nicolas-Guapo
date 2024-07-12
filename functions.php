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
function nicolas_guapo_custom_styles()
{
    // Déclarer le fichier CSS généré à partir de Sass
    wp_enqueue_style(
        'nicolas-guapo-custom-css',
        get_template_directory_uri() . '/sass/style.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'nicolas_guapo_custom_styles');

// Fonction pour ajouter le bouton "Retour en haut" sur toutes les pages
function nicolas_guapo_back_to_top_script() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const backToTopBtn = document.getElementById("backToTopBtn");

        // Afficher le bouton lorsque l'utilisateur fait défiler la page
        window.onscroll = function () {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToTopBtn.style.display = "block";
            } else {
                backToTopBtn.style.display = "none";
            }
        };

        // Remonter en haut de la page lorsque le bouton est cliqué
        backToTopBtn.onclick = function () {
            document.body.scrollTop = 0; // Pour Safari
            document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
        };
    });
    </script>
    <?php
}
add_action('wp_footer', 'nicolas_guapo_back_to_top_script');