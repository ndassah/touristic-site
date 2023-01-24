<?php require('../asset/securite.php');?>
<!DOCTYPE html>
<html lang="en">
    <?php include('head.php');?>
    <body>
    <?php require('navbar.php');?>
    <div class="container ">
    <div class="flo">
            <div class="contener">
                <div class="left text-center">

                   <strong>T</strong>rajet : <?= $_SESSION['villeDep'] ?> - <?=$_SESSION['villeArr']?><br><br>
                   <strong>V</strong>otre jour de depart : <?= $_SESSION['jourDep'] ?><br><br>
                   <strong>H</strong>eure de depart : <?= $_SESSION['heureDep'] ?><br><br>
                   <strong>N</strong>ombre de place a bord de votre bus :<?= $_SESSION['nbrePlace'] ?><br><br>
                   <strong>C</strong>out de votre voyage : <?= $_SESSION['nbrePlace'] ?>Fcfa<br><br>

                </div>
                <div class="right">
                    <h4>Remplissez le formulaire ci-dessous pour terminer la reservation</h4>
                    <form action="#" method="post">
                       <div class="int">
                         <label for="name">Nom</label>
                         <input type="text" class="form-control" name="nom" id="name" value="<?=$_SESSION['name']?>" placeholder="Entrer votre nom">
                       </div>
                       <div class="int">
                         <label for="email">Email</label>
                         <input  class="form-control" type="email" name="email" id="email" value="<?=$_SESSION['mail']?>" placeholder="Entrer votre adresse email">
                       </div>
                       <div class="int">
                         <label for="mode">Mode de payement</label>
                          <select class="form-select" name="mode" id="mode">
                            <option value="1">OrangeMoney</option>
                            <option value="1">MobileMoney</option>
                            <option value="1">Carte bancaire</option>
                          </select>
                       </div>
                       <div class="int">
                         <input type="submit" class="form-control"  value="Reserver">
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>