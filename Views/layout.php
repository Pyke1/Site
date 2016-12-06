<!DOCTYPE html>
<html>
	<head>
		<title>
			<?= $titre ?>
		</title>
	</head>
	<body>
		echo '<a class="bouton" href="studcook.php">Accueil</a>';
		echo '<a class="bouton" href="studcook.php?action=AdmirerRecette">Admirer les Recettes</a>';
		echo '<a class="bouton" href="studcook.php?action=PreferenceRecette">Préférences Recettes</a>';
		echo '<a class="bouton" href="studcook.php?action=connexion">Se Connecter</a>';
		echo '<a class="bouton" href="studcook.php?action=inscription">Inscription</a>';
		
		<?= $contenu ?>
	</body>
</html>
