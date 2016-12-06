<?php
	$titre='StudCook';
	ob_start();

	if(isset($_GET["numero"])){
	$_SESSION['recette'][] = $results1["Nom"];
	}

	foreach($_SESSION['recette'][] as $value){
		echo $value;
	}
?>
		<h1>Liste des Recettes</h1>

		<table>
		<?php
			foreach($results as $donnees){
					echo '<tr>';
					echo '<td class="centre">' . $donnees['Nom'] . '</td>';
					echo '<td class="centre"><a href="studcook.php?recette='.$donnees['ID'].'"><img src="' . $donnees['Image'] . '"></a></td>';
					echo '<td class="centre"><a href="studcook.php?action=AdmirerRecette&numero='.$donnees['ID'].'">Ajouter</a></td>';
					echo '</tr>';
				}

		 ?>
		 </table>
<?php
$contenu = ob_get_clean();
require('layout.php'); ?>
