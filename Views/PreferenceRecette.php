<?php
	$titre='StudCook';
	ob_start();
	echo'<p class="Menu">';
	  echo'<p>Pour vous connecter, veuillez remplir les champs utilisateur et mot de passe suivants:</p>

    <form method="post" action="./studcook.php">
      <fieldset>
        <legend>Contraintes</legend>
        <p>
          <label name="budget">Budget :</label><input name="budget" type="text" id="pseudo" /><br />
          <label name="preference_alimentaire">Préférence Alimentaire :</label><br />
		  		<label name="aliments_interdits">Aliments Interdits:</label><br />
					<label name="allergies">Allergies :</label><br />
					<label name="religion">Religion :</label><br />
					<label name="gout">Gout :</label><br />
          <label name="temps_preparation">Temps Préparation :</label><br />
          <label name="pseudo">Pseudo :</label><br />
          <label name="ustensiles_manquant ">Ustensiles Manquant :</label><br />

        </p>
      </fieldset>
    <p><input type="submit" value="Connexion" /></p></form>';
$contenu = ob_get_clean();
require('layout.php'); ?>
