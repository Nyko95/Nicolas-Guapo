document.addEventListener("DOMContentLoaded", function () {
  // FADE IN SUR CHAQUES SECTIONS

  const callback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target); // Arrête d'observer après l'apparition
      }
    });
  };

  const options = {
    threshold: 0.1,
  };

  const observer = new IntersectionObserver(callback, options);

  const elementsToAnimate = document.querySelectorAll(
    ".hero-content, .parcours-container, .parcours-extra, .creation-title, .creation-item, .contact-title, .contact-form, .contact-info, .contact-section p, .contact-item, .competences-title, .competence, .section-title, .services, .services h2, .services h3, .services p"
  );

  elementsToAnimate.forEach((element) => {
    observer.observe(element);
  });

  // Sélection des éléments nécessaires
  const menuToggle = document.querySelector(".menu-toggle");
  const navigation = document.querySelector(".main-navigation");
  const body = document.body;

  // Gestion de l'événement de clic sur le bouton du menu burger
  menuToggle.addEventListener("click", () => {
    // Basculer la classe 'open' sur la navigation pour afficher/masquer le menu
    navigation.classList.toggle("open");

    // Basculer la classe 'cross' sur le bouton pour changer son apparence
    menuToggle.classList.toggle("cross");

    // Ajoute ou retire la classe 'menu-open' au body pour désactiver le scroll
    if (navigation.classList.contains("open")) {
      body.classList.add("menu-open");
    } else {
      body.classList.remove("menu-open");
    }
  });

  //Animation du hero header avec jQuery
  jQuery(document).ready(function ($) {
    var roles = ["HTML", "CSS", "JavaScript"];

    var roleElement = $("#role");
    var currentIndex = 0;

    function afficherRoleSuivant() {
      roleElement.fadeOut(400, function () {
        $(this).text(roles[currentIndex]).fadeIn(400);
      });

      currentIndex++;
      if (currentIndex >= roles.length) {
        currentIndex = 0;
      }
    }

    setInterval(afficherRoleSuivant, 3000);
  });
});
