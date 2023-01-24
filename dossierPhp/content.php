<?php require('bdd.php'); 
session_start();
?>


<?php

if(isset($_POST['submit'])){
    $villeD =htmlspecialchars($_POST['villeD']);
    $villeA =htmlspecialchars($_POST['villeA']); 
    $jourD =htmlspecialchars($_POST['jourD']);
    $option =htmlspecialchars($_POST['option']);


    if(!empty($villeA) && !empty($villeD) && !empty($jourD) && !empty($option)){
        if($option=="Aux premieres heures(00:00:00 - 05:59:00)"){
            //insert user reservation information
            $insertInfoReservation=$bdd->prepare('INSERT INTO reservation (villeDepart, villeArrivee, jourDepart) VALUES(?, ?, ?)');
            $insertInfoReservation->execute(array($villeD, $villeA, $jourD));
            //retrieve reservation information
            $recupInfoReservation = $bdd-> prepare('SELECT * FROM adminreservation INNER JOIN reservation ON townD=? AND townA=? AND jourOuvrable=? 
            WHERE horaire BETWEEN "00:00:00" AND "05:59:00" ORDER BY adminreservation.id DESC');
            $recupInfoReservation->execute(array($villeD, $villeA, $jourD));
            //try if the informations exist in the table
            if($recupInfoReservation->rowCount()>0){
                $showInfoReservation=$recupInfoReservation->fetch();
                $_SESSION['villeDep']=$showInfoReservation['townD'];
                $_SESSION['villeArr']=$showInfoReservation['townA'];
                $_SESSION['jourDep']=$showInfoReservation['jourOuvrable'];
                $_SESSION['heureDep']=$showInfoReservation['horaire'];
                $_SESSION['nbrePlace']=$showInfoReservation['nbrePlace'];
                $_SESSION['tarif']=$showInfoReservation['tarif'];
                header('Location: ../dossierHtml/validationReservation');
            }else{
                ?>5409Y
                <script type="text/javascript">
                    alert("Desole, nous n'avons pas programme de voyage correspondant a votre exigence 😔😔, neanmoins, vous pouvez si vous le souhaitez, consulter notre planing de voyage hebdomadaire 👇");
                </script>
                <?php
            }
        }else if($option=="Journee(06:00:00 - 11:59:00)"){
            //insert user reservation information
            $insertInfoReservation=$bdd->prepare('INSERT INTO reservation (villeDepart, villeArrivee, jourDepart) VALUES(?, ?, ?)');
            $insertInfoReservation->execute(array($villeD, $villeA, $jourD));
            //retrieve reservation information
            $recupInfoReservation = $bdd-> prepare('SELECT * FROM adminreservation INNER JOIN reservation ON townD=? AND townA=? AND jourOuvrable=? 
            WHERE horaire BETWEEN "06:00:00" AND "11:59:00" ORDER BY adminreservation.id DESC');
            $recupInfoReservation->execute(array($villeD, $villeA, $jourD));
            //try if the informations exist in the table
            if($recupInfoReservation->rowCount()>0){
                $showInfoReservation=$recupInfoReservation->fetch();
                $_SESSION['villeDep']=$showInfoReservation['townD'];
                $_SESSION['villeArr']=$showInfoReservation['townA'];
                $_SESSION['jourDep']=$showInfoReservation['jourOuvrable'];
                $_SESSION['heureDep']=$showInfoReservation['horaire'];
                $_SESSION['nbrePlace']=$showInfoReservation['nbrePlace'];
                $_SESSION['tarif']=$showInfoReservation['tarif'];
                header('Location: ../dossierHtml/validationReservation');
            }else{
                ?>
                <script type="text/javascript">
                    alert("Desole, nous n'avons pas programme de voyage correspondant a votre exigence 😔😔, neanmoins, vous pouvez si vous le souhaitez, consulter notre planing de voyage hebdomadaire 👇");
                </script>
                <?php
            }
        }else if($option=="Apres-midi(12:00:00 - 17:59:00)"){
            //insert user reservation information
            $insertInfoReservation=$bdd->prepare('INSERT INTO reservation (villeDepart, villeArrivee, jourDepart) VALUES(?, ?, ?)');
            $insertInfoReservation->execute(array($villeD, $villeA, $jourD));
            //retrieve reservation information
            $recupInfoReservation = $bdd-> prepare('SELECT * FROM adminreservation INNER JOIN reservation ON townD=? AND townA=? AND jourOuvrable=? 
            WHERE horaire BETWEEN "12:00:00" AND "17:59:00" ORDER BY adminreservation.id DESC');
            $recupInfoReservation->execute(array($villeD, $villeA, $jourD));
            //try if the informations exist in the table
            if($recupInfoReservation->rowCount()>0){
                $showInfoReservation=$recupInfoReservation->fetch();
                $_SESSION['villeDep']=$showInfoReservation['townD'];
                $_SESSION['villeArr']=$showInfoReservation['townA'];
                $_SESSION['jourDep']=$showInfoReservation['jourOuvrable'];
                $_SESSION['heureDep']=$showInfoReservation['horaire'];
                $_SESSION['nbrePlace']=$showInfoReservation['nbrePlace'];
                $_SESSION['tarif']=$showInfoReservation['tarif'];
                header('Location: ../dossierHtml/validationReservation');
            }else{
                ?>
                <script type="text/javascript">
                    alert("Desole, nous n'avons pas programme de voyage correspondant a votre exigence 😔😔, neanmoins, vous pouvez si vous le souhaitez, consulter notre planing de voyage hebdomadaire 👇");
                </script>
                <?php
            }

        }else{
            //insert user reservation information
            $insertInfoReservation=$bdd->prepare('INSERT INTO reservation (villeDepart, villeArrivee, jourDepart) VALUES(?, ?, ?)');
            $insertInfoReservation->execute(array($villeD, $villeA, $jourD));
            //retrieve reservation information
            $recupInfoReservation = $bdd-> prepare('SELECT * FROM adminreservation INNER JOIN reservation ON townD=? AND townA=? AND jourOuvrable=? 
            WHERE horaire BETWEEN "18:00:00" AND "23:59:00" ORDER BY adminreservation.id DESC');
            $recupInfoReservation->execute(array($villeD, $villeA, $jourD));
            //try if the informations exist in the table
            if($recupInfoReservation->rowCount()>0){
                $showInfoReservation=$recupInfoReservation->fetch();
                $_SESSION['villeDep']=$showInfoReservation['townD'];
                $_SESSION['villeArr']=$showInfoReservation['townA'];
                $_SESSION['jourDep']=$showInfoReservation['jourOuvrable'];
                $_SESSION['heureDep']=$showInfoReservation['horaire'];
                $_SESSION['nbrePlace']=$showInfoReservation['nbrePlace'];
                $_SESSION['tarif']=$showInfoReservation['tarif'];
                header('Location: ../dossierHtml/validationReservation');
            }else{
                ?>
                <script type="text/javascript">
                    alert("Desole, nous n'avons pas programme de voyage correspondant a votre exigence 😔😔, neanmoins, vous pouvez si vous le souhaitez, consulter notre planing de voyage hebdomadaire 👇");
                </script>
                <?php
            }
        }


    }else $errorMessage= "Veuillez remplir tous les champs";
}
?>