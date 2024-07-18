<section id="competences" class="competences">
  <div class="container">
    <h2 class="competences-title">Mes Compétences professionnelles</h2>
    <div class="competences-grid">
      <?php
      // Données pour les compétences avec icônes et couleurs
      $competences = [
        [
          'tech' => 'WordPress',
          'icon' => 'fab fa-wordpress',
          'color' => '#21759b',
          'percent' => 80,
          'description' => 'WordPress est un système de gestion de contenu qui permet de créer des sites web, des blogs ou des e-commerces. 42% de tous les sites web dans le monde utilisent WordPress.'
        ],
        [
          'tech' => 'PHP',
          'icon' => 'fab fa-php',
          'color' => '#777bb4',
          'percent' => 75,
          'description' => 'PHP est un langage de script côté serveur conçu principalement pour le développement web mais aussi utilisé comme un langage de programmation généraliste.'
        ],
        [
          'tech' => 'HTML',
          'icon' => 'fab fa-html5',
          'color' => '#e34f26',
          'percent' => 85,
          'description' => 'HTML est le langage standard de balisage des documents destinés à être affichés dans un navigateur web.'
        ],
        [
          'tech' => 'JavaScript',
          'icon' => 'fab fa-js-square',
          'color' => '#f7df1e',
          'percent' => 70,
          'description' => 'JavaScript est un langage de programmation qui permet de créer du contenu web interactif et dynamique.'
        ],
        [
          'tech' => 'Sass/SCSS',
          'icon' => 'fab fa-sass',
          'color' => '#cc6699',
          'percent' => 80,
          'description' => 'Sass est un langage de préprocesseur CSS qui permet d\'écrire des feuilles de style plus propres et plus faciles à gérer.'
        ]
      ];

      foreach ($competences as $competence) :
      ?>
        <div class="competence">
          <i class="<?php echo $competence['icon']; ?> competence-icon" style="color: <?php echo $competence['color']; ?>;"></i>
          <h3><?php echo $competence['tech']; ?></h3>
          <div class="percentage"><?php echo $competence['percent']; ?>%</div>
          <p><?php echo $competence['description']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>