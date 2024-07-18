document.addEventListener("DOMContentLoaded", function () {
  /*CARROUSEL AVEC SWIPERJS*/
  // Crée une nouvelle instance de Swiper et définit les options du carrousel
  const swiper = new Swiper(".swiper-container", {
    // Effet de transition pour les diapositives du carrousel
    effect: "coverflow",
    // Affiche une main comme curseur lorsque survolé
    grabCursor: true,
    // Nombre de diapositives à afficher en même temps (calcul automatique)
    slidesPerView: "auto",
    // Nombre de diapositives à faire défiler à chaque fois
    slidesPerGroup: 1,
    // Centre la diapositive active dans le conteneur
    centeredSlides: true,
    // Espacement entre les diapositives
    spaceBetween: 15,
    // Crée une boucle infinie pour le carrousel
    loop: true,
    // Options spécifiques à l'effet coverflow
    coverflowEffect: {
      // Profondeur des diapositives
      depth: 0,
      // Modificateur de profondeur
      modifier: 1,
      // Angle de rotation des diapositives
      rotate: 60,
      // Échelle des diapositives
      scale: 0.6,
      // Affichage des ombres des diapositives
      slideShadows: true,
      // Étirement de la diapositive
      stretch: 0,
    },
    // Options de lecture automatique
    autoplay: {
      // Délai entre chaque transition automatique
      delay: 4000,
    },
  });
});
