<?php require('../dossierPhp/adminCont.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php');?>
<body>

<div class="container py-5">

<h3><a href="adminConfirmation.php"class="adminAcceuil">Communaute d'administration.</a></h3><br><br>

<form action="" method="POST">
  <div class="row posi">
    <div class="col-8 mb-5">
      <strong><h5><p>Combien de journees souhaitez vous programmmer ?</p></h5></strong> 
      <input type="number" class="form-control" name="nbreJournee" autocomplete="off" required placeholder="7"> 
    </div>
    <div class="col-6 text-center pb-5">
        <input type="submit" value="SOUMETTRE" name="affichForm" class="btn btn-primary">
    </div>
  </div>
</form>

<?php
if(isset($_POST['affichForm'])){

    $nbreJournee=htmlspecialchars($_POST['nbreJournee']);
    $_SESSION['nbreJournee']=$nbreJournee;
        ?>
        <form action="" method="POST">
            <div class="row">
                  <div class="col">
                     <p>journee du...</p>
                     <?php for($i=0;$i<$nbreJournee;$i++){?> 
                        <input type="date" class="form-control" class="mb-3" name="<?php echo $i.'dates'; ?>" required autocomplete="off">
                        <input type="hidden" name="nbreJournee" value="<?php echo $nbreJournee; ?>">
                        <?php } ?>
                  </div>
                  <div class="col">
                      <p>Ville de depart </p>
                      <?php for($i=0;$i<$nbreJournee;$i++){?>
                        <input type="text" class="form-control" class="mb-3" name="<?php echo $i.'texts' ?>" required autocomplete="off">
                        <input type="hidden" name="nbreJournee" value="<?php echo $nbreJournee; ?>">
                      <?php } ?>
                  </div>
                  <div class="col">
                      <p>Ville d'arrivee </p>
                      <?php for($i=0;$i<$nbreJournee;$i++){?>
                         <input type="text" class="form-control" class="mb-3" name="<?php echo $i.'textss' ?>" required autocomplete="off">
                         <input type="hidden" name="nbreJournee" value="<?php echo $nbreJournee; ?>">
                      <?php } ?>
                  </div>
                    <div class="col">
                        <p>Heure de depart  </p>
                        <?php for($i=0;$i<$nbreJournee;$i++){?>
                            <input type="time" class="form-control" name="<?php echo $i.'times' ?>" class="mb-3" required autocomplete="off">
                            <input type="hidden" name="nbreJournee" value="<?php echo $nbreJournee; ?>">
                        <?php } ?>
                    </div>
                    <div class="col">
                        <p>Nombre de places <abbr title="disponibles">dis</abbr></p>
                        <?php for($i=0;$i<$nbreJournee;$i++){?> 
                            <input type="number" class="form-control" class="mb-3" name="<?php echo $i.'places' ?>" required>
                            <input type="hidden" name="nbreJournee" value="<?php echo $nbreJournee; ?>">
                        <?php } ?>
                    </div>
                    <div class="col">
                        <p>Tarif par voyageur</p>
                        <?php for($i=0;$i<$nbreJournee;$i++){?> 
                            <input type="number" class="form-control" class="mb-3" name="<?php echo $i.'tarif' ?>" required>
                            <input type="hidden" name="nbreJournee" value="<?php echo $nbreJournee; ?>">
                        <?php } ?>
                    </div>
                <div class="col-12 py-5 text-center">
                    <input type="submit" value="ENREGISTRER" name="submits" class="btn btn-primary">
                </div>
            </div>
        </form>
</div>
        <?php
        
    }

?>


</body>
</html>