<?php
   class RecetteManager extends Model{

    function getRecette(){
       $sql='SELECT *
      FROM Recette';
      $req = $this->executeRequest($sql);
      $results = $req->fetch(PDO::FETCH_ASSOC);
      return $results;
    }



	function getRecetteDetail($ID){
       $sql='SELECT *
      FROM RecetteDetails where ID='.$ID;
      $req = $this->executeRequest($sql);
      $results = $req->fetch(PDO::FETCH_ASSOC);
      return $results;
    }
  }
?>
