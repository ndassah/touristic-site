<?php
require('bdd.php');
session_start();

if(isset($_POST['submits'])){
    $nbreJoursEnrgister=  $_SESSION['nbreJournee'];
    for($i=0;$i<$nbreJoursEnrgister;$i++){
      $dates=htmlspecialchars($_POST[$i."dates"]);
      $texts=htmlspecialchars($_POST[$i."texts"]);
      $textss=htmlspecialchars($_POST[$i."textss"]);
      $times=htmlspecialchars($_POST[$i."times"]);
      $places=htmlspecialchars($_POST[$i."places"]);
      $tarif=htmlspecialchars($_POST[$i."tarif"]);

        if(!empty($dates) && !empty($texts) && !empty($textss) && !empty($times) && !empty($tarif)){
            //insert administrator reservation information
            $insertInfoAdmin= $bdd-> prepare('INSERT INTO adminreservation(townD, townA, jourOuvrable, horaire, nbrePlace, tarif) VALUES(?, ?, ?, ?, ?, ?)');
            $insertInfoAdmin-> execute(array($texts, $textss, $dates, $times, $places, $tarif));

            //retrieve reservation information of admin
            $recupInfoAdmin= $bdd-> query('SELECT * FROM adminreservation ORDER BY id DESC');
            if($recupInfoAdmin->rowCount()>0){
                header('Location: ../dossierHtml/adminConfirmation.php');
            }
        }else echo "Veuillez remplir tous les champs";
    }
}

?>