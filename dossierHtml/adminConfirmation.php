<?php require('../asset/securite.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <?php include('head.php'); ?>
<body>

<?php
require('../dossierPhp/bdd.php');
require('navbar.php');
?>

<div class="container py-5">
<h3><a href="adminConfirmation.php" class="link-acceuil">Communaute d'administration.</a></h3><br><br>

    <div class="row">
        <div class="col-md-4 sticky-top">
           <h4>Faire un planing</h4><br> 
            <a class="btn btn-primary" href="adminContent.php" role="button">Programmer une journee</a><br><br>
            <h4>Search</h4><br>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
        <div class="col-8">
            <?php
            $recupInfoAdmin= $bdd-> query('SELECT * FROM adminreservation ORDER BY id DESC');
             //show reservation information of admin
             while($affichInfoAdmin=$recupInfoAdmin->fetch()){
                ?><div class="card"><?php
                ?><div class="card-header"><?php 
                //code
                ?></div><?php
                ?><div class="card-body"><?php
                    ?><br><strong> <?php echo "Programme de la journee du : ".htmlspecialchars($affichInfoAdmin['jourOuvrable']);?></strong><br><?php
                    ?><strong>D</strong>escription :<br><?php
                    echo "Trajet : ".htmlspecialchars($affichInfoAdmin['townD'])?> - <?php echo htmlspecialchars($affichInfoAdmin['townA']).'<br>';
                    ?>L'heure de depart du bus a ete prevue pour <strong><?php echo htmlspecialchars($affichInfoAdmin['horaire'])?></strong><br><?php;
                    ?>Ce bus dispose de <strong> <?php echo htmlspecialchars($affichInfoAdmin['nbrePlace']);?> </strong>places assises<br><?php
                    ?>Et son cout est de <?php echo htmlspecialchars($affichInfoAdmin['tarif']) ;?>Fcfa par voyageur<br><?php
                ?></div><?php
                ?><div class="card-footer"><?php
                //code
                ?></div><?php
                ?></div><?php
            }
            ?>
        </div>
    </div>
</div>

<?php

?>

<script src="index.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script referrerpolicy="no-referrer" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>