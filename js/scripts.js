document.addEventListener("DOMContentLoaded", function () {
  // Fonction de rappel pour l'IntersectionObserver
  const callback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target); // Arrête d'observer après l'apparition
      }
    });
  };

  // Options pour l'IntersectionObserver
  const options = {
    threshold: 0.1, // Pourcentage d'intersection pour déclencher l'apparition
  };

  // Créer un nouvel observer
  const observer = new IntersectionObserver(callback, options);

  // Sélectionner tous les éléments à observer
  const elementsToAnimate = document.querySelectorAll(
    ".hero-content, .parcours-container, .parcours-extra, .creation-title, .creation-item, .contact-title, .contact-form"
  );

  // Ajouter chaque élément à l'observer
  elementsToAnimate.forEach((element) => {
    console.log("Observing:", element); // Debug
    observer.observe(element);
  });
});

// MENU BURGER
document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.querySelector(".menu-toggle");
  const menuContainer = document.getElementById("primary-menu");

  menuToggle.addEventListener("click", () => {
    menuToggle.classList.toggle("open");
    menuContainer.classList.toggle("open");

    // Si l'élément "menuToggle" a la classe "open", ajoute la classe "cross"
    if (menuToggle.classList.contains("open")) {
      menuToggle.classList.add("cross");
      menuToggle.setAttribute("aria-expanded", "true");
    } else {
      // Sinon, supprime la classe "cross"
      menuToggle.classList.remove("cross");
      menuToggle.setAttribute("aria-expanded", "false");
    }
  });
});

//ANIM HERO HEADER

jQuery(document).ready(function ($) {
  // Liste des rôles à afficher séquentiellement
  var roles = [
    "Développeur Passionné",
    "Développeur Frontend",
    "Développeur Créatif",
  ];

  // Sélection de l'élément par son ID
  var roleElement = $("#role");

  // Index pour parcourir les rôles séquentiellement
  var currentIndex = 0;

  // Fonction pour afficher le rôle suivant
  function afficherRoleSuivant() {
    // Afficher le rôle courant
    roleElement.fadeOut(400, function () {
      $(this).text(roles[currentIndex]).fadeIn(400);
    });

    // Passer au rôle suivant
    currentIndex++;
    if (currentIndex >= roles.length) {
      currentIndex = 0; // Revenir au début de la liste une fois arrivé à la fin
    }
  }

  // Appel initial et intervalle pour changer le rôle toutes les 3 secondes
  setInterval(afficherRoleSuivant, 3000); // Changer toutes les 3 secondes
});
