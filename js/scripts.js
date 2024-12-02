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

//Listes déroulantes pour questions réponses
function toggleAnswer(questionElement) {
  const answerElement = questionElement.nextElementSibling; // Sélectionne l'élément suivant
  if (answerElement.style.display === "block") {
    answerElement.style.display = "none"; // Masquer si déjà affiché
  } else {
    answerElement.style.display = "block"; // Afficher si masqué
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const progressLine = document.querySelector(".progress-line");
  const steps = document.querySelectorAll(".collaborer-step");
  const icons = document.querySelectorAll(".collaborer-icon");

  function updateProgressLine() {
    const scrollTop = window.scrollY; // Position de défilement actuelle
    const sectionTop = document.querySelector("#collaborer").offsetTop; // Position du haut de la section
    const sectionHeight = document.querySelector("#collaborer").offsetHeight; // Hauteur de la section
    const isMobile = window.innerWidth <= 768; // Vérifier si on est sur mobile

    // Vérifiez si nous sommes dans la section
    if (scrollTop >= sectionTop && scrollTop < sectionTop + sectionHeight) {
      // Calculez la progression en fonction de la position de défilement dans la section
      const scrollInSection = scrollTop - sectionTop; // Position de défilement dans la section
      const progressPercentage = Math.min(scrollInSection / sectionHeight, 1); // Limite à 100%

      // Ajustez la hauteur de la ligne de progression selon l'appareil
      const newHeight = Math.min(
        progressPercentage * sectionHeight * (isMobile ? 1 : 0.8), // Facteur ajusté pour mobile
        sectionHeight
      );
      progressLine.style.height = `${newHeight}px`;
      progressLine.style.opacity = 1; // Rendre la ligne visible

      // Change la couleur de l'icône pour chaque étape atteinte
      icons.forEach((icon, index) => {
        const circle = icon.querySelector(".icon-circle"); // Sélectionne le cercle

        // Vérifiez si le défilement atteint l'étape actuelle
        if (scrollInSection >= (index / steps.length) * sectionHeight) {
          circle.style.backgroundColor = "black"; // Change la couleur de fond du cercle à noir
          circle.style.color = "white"; // Change la couleur de l'icône à l'intérieur pour qu'elle soit visible
        } else {
          circle.style.backgroundColor = "#ffd700"; // Réinitialiser à la couleur initiale (par exemple, or)
          circle.style.color = "black"; // Réinitialiser la couleur de l'icône à l'intérieur
        }
      });
    } else {
      // Réinitialisez si nous ne sommes pas dans la section
      progressLine.style.height = 0; // Réinitialiser la hauteur
      progressLine.style.opacity = 0; // Masquer la ligne
      icons.forEach((icon) => {
        const circle = icon.querySelector(".icon-circle");
        circle.style.backgroundColor = "#ffd700"; // Réinitialiser la couleur de fond
        circle.style.color = "black"; // Réinitialiser la couleur de l'icône à l'intérieur
      });
    }
  }

  window.addEventListener("scroll", updateProgressLine);
});
document.addEventListener("DOMContentLoaded", function () {
  const conversionMessage = document.querySelector(".mo-conversion-message");
  const form = document.querySelector(".mo-optin-form");

  if (conversionMessage && form) {
    // Cache le message de conversion et réaffiche le formulaire
    conversionMessage.style.display = "none";
    form.style.display = "block";
  }
});
