<?php
$titre = "Inscription au site";
ob_start();
// index.php?action=connexion - movieid=12 - action=voter&movieid=12
// Model à le droit d'utiliser le contrôleur mais les vues non
?>

<?php
echo '<h1>Inscription</h1>';
?>

<?php
//On est dans la page de formulaire
  echo'<p>Pour vous inscrire, veuillez remplir les champs ci dessous:</p>
	
    <form method="post" action="./studcook.php?action=inscrit">
      <fieldset>
        <legend>Inscription</legend>
        <p>
          <label name="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
          <label name="password">Mot de Passe :</label><input type="password" name="password" id="password" /><br />
		  <label name="nom">Nom :</label><input type="nom" name="nom" id="nom" /><br />
		  <label name="mail">Mail :</label><input type="mail" name="mail" id="mail" /><br />
        </p>
      </fieldset>
    <p><input type="submit" value="Inscription" /></p></form>';
if(isset($_GET['donnees'])){
  if($_GET['donnees']=='error'){
	echo '<p id="warning">Veuillez remplir tous les champs svp.</p>';
	}
}
?>

<?php
         

$contenu = ob_get_clean();
require('layout.php');


?>