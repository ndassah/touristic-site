<?php require('../asset/securite.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <?php require('head.php'); ?>
<body>
    <?php require('navbar.php');


    $villeDep=$_SESSION['villeDep'];
    $villeArr=$_SESSION['villeArr'];
    $jourDep=$_SESSION['jourDep'];
    $heureDep=$_SESSION['heureDep'];
    $nbrePlace=$_SESSION['nbrePlace'];
    $tarif=$_SESSION['tarif'];

    if(!empty($villeDep) && !empty($villeArr) && !empty($jourDep) && !empty($heureDep)){
        ?>
        
        <div class="container py-5">
            <h5 class="text-center"> cher(e) <strong><?=$_SESSION['name']?></strong>, nous avons selectionnes specialement pour vous, ce voyage</h5><br><br>
            <div class="row posi">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-primary"><h6>Description du voyage :</h6></div>
                        </div>
                        <div class="card-body">
                            <strong>T</strong>rajet : <?=$villeDep?> - <?=$villeArr?><br>
                            Vous avez reserves un bus de <strong><?=$nbrePlace?> </strong>places<br> 
                            Pour la date du <strong> <?=$jourDep?></strong><br> 
                            L'heure exacte de votre depart a ete fixe a <strong><?=$heureDep?></strong><br>
                            Et ce ticket de bus vous couteras <strong><?=$tarif?></strong>Fcfa
                        </div>
                        <div class="card-footer">
                          <div class="d-grid gap-3 d-md-flex justify-content-md">
                            <a class="btn btn-danger d-md-flex justify-content-md" href="confirmation.php" role="button">Annuer la reservation</a>
                            <a class="btn btn-success d-md-flex justify-content-md" href="confirmReservation.php" role="button">Confirmer la reservation</a>
                          </div>
                        </div>
                    </div>           
                </div>
            </div>
        </div>

        <?php
    }else echo "Nous n avons pas connaissannce de vos information, veuillez s' il vous plait nous les founir a la page d acceuil"
    ?>
</body>
</html>