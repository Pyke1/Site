<?php // studcook
  session_name("p1501578");
  session_start();
  
  require('Model/StudModel.php');
  require('Model/RecetteManager.php');
  require('Model/UserManager.php');
  $rm = new RecetteManager();
  $um = new UserManager();
  
  
  	echo '<a class="bouton" href="studcook.php">Accueil</a>';
	echo '<a class="bouton" href="studcook.php?action=AdmirerRecette">Admirer les Recettes</a>';
	echo '<a class="bouton" href="studcook.php?action=PreferenceRecette">Préférences Recettes</a>';
	echo '<a class="bouton" href="studcook.php?action=connexion">Se Connecter</a>';
	echo '<a class="bouton" href="studcook.php?action=inscription">Inscription</a>';
	
if (isset($_GET['action'])){
	
	//studcook.php?action=connexion
  if($_GET['action']=='connexion'){
		require('Views/connexion.php');
	}
	
	//studcook?action=connecté
  if($_GET['action']=='connecté'){
		      $user = $um -> getUser($_POST['pseudo'],$_POST['password']);

		 if (!$user){
			 header('Location: studcook.php?action=connexion&donnees=error');
		 } 
		 else // Acces OK !
        {	
            $_SESSION['pseudo'] = $user['Login'];
            $_SESSION['password'] = $user['Pass'];
            $_SESSION['id'] = $user['UserID'];
			$_SESSION['recette']= array();
			header('Location: index.php');
		}
	}
	
	// studcook.php?action=inscription
  if($_GET['action']=="inscription"){
    require('Views/inscription.php');
  }
	
	// studcook.php?action=inscrit
  if($_GET['action']=="inscrit"){
	  if(!empty($_POST['pseudo']) and !empty($_POST['password']) and !empty($_POST['nom']) and !empty($_POST['mail'])){
			$um ->Inscription($_POST['pseudo'],$_POST['password'],$_POST['nom'],$_POST['mail']);
			require('Views/ConfirmInscrip.php');
	  }else{header('Location: studcook.php?action=inscription&donnees=error');}
		}

   // studcook.php?action=deconnexion
  if($_GET['action']=="deconnexion"){
    require('Views/deconnexion.php');
  }
  // studcook.php?action=AdmirerRecette
  if ($_GET['action']=='AdmirerRecette'){
	  $results= $rm-> getRecette();
    require('Views/Recette.php');
  }
}

  //studcook.php?recette=??
  if(isset($_GET['recette'])){
	  $results= $rm-> getRecetteDetail($_GET['recette']);
	  if($results1 == null){
      require('Views/error.php');
    }else{
	require('Views/detailsRecette.php');
	}
  }
	
	//studcook.php
  else if((!isset($_GET['action'])) and (!isset($_GET['recette']))){
	require('Views/accueil.php');
	}
?>