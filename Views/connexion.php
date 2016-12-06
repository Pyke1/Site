<?php
$titre = "StudCook";
ob_start();

?>

<?php
//On regarde si l'utilisateur n'est pas déjà connecté
echo '<h1>Connexion</h1>';
?>

<?php
//On est dans la page de formulaire

  echo'<p>Pour vous connecter, veuillez remplir les champs utilisateur et mot de passe suivants:</p>

    <form method="post" action="./studcook.php?action=connecté">
      <fieldset>
        <legend>Connexion</legend>
        <p>
          <label name="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
          <label name="password">Mot de Passe :</label><input type="password" name="password" id="password" />
        </p>
      </fieldset>
    <p><input type="submit" value="Connexion" /></p></form>';
  
?>

<?php
         

$contenu = ob_get_clean();
require('layout.php');


?>