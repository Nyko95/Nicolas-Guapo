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
    ".hero-content, .parcours-container, .parcours-extra, .creation-title, .creation-item, .contact-title, .contact-form, .contact-info, .contact-section p, .contact-item, .competences-title, .competence"
  );

  elementsToAnimate.forEach((element) => {
    observer.observe(element);
  });

  // MENU BURGER
  const menuToggle = document.querySelector(".menu-toggle");
  const menuContainer = document.getElementById("primary-menu");

  menuToggle.addEventListener("click", () => {
    menuToggle.classList.toggle("open");
    menuContainer.classList.toggle("open");

    if (menuToggle.classList.contains("open")) {
      menuToggle.classList.add("cross");
      menuToggle.setAttribute("aria-expanded", "true");
    } else {
      menuToggle.classList.remove("cross");
      menuToggle.setAttribute("aria-expanded", "false");
    }
  });

  //Animation du hero header avec jQuery
  jQuery(document).ready(function ($) {
    var roles = [
      "Développeur Passionné",
      "Développeur Frontend",
      "Développeur Créatif",
      "Développeur WordPress",
      "Artisan du Web",
    ];

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
