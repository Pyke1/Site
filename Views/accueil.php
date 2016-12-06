<?php
	$titre='StudCook';
	ob_start();
  $_SESSION['recette']= array();
	$results['texte'];
$contenu = ob_get_clean();
require('layout.php'); ?>
