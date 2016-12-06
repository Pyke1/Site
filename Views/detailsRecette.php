<?php
  $titre=$results1['Titre'];
  ob_start();
  echo '<h1>' . $results['Nom'] .'</h1>';

  echo $results['Texte'];

$contenu=ob_get_clean();
require('layout.php');
   ?>

