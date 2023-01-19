<?php require('../dossierPhp/inscription.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require('head.php');?>
<body>

<?php require('navbar.php'); ?>

<div class="container-xl text-center py-5 ml-8">
<form method="post" class="row g-3 needs-validation" novalidate>

    <?php if(isset($errorMessage)){echo '<h3>'.$errorMessage.'</h3>';}?>

        <div class="col-md-8 mb-4">
          <label for="validationCustom01" class="form-label">User name</label>
         <div class="input-group has-validation">
          <span class="input-group-text" id="01"><i class="fas fa-user"></i></span>
          <input type="text" name="name" class="form-control" id="validationCustom01" aria-describedby="inputGroupPrepend" placeholder="Fotso" autocomplete="off" required>
          <div class="invalid-feedback">
          Please enter an user name.
          </div>
         </div>
        </div>
        <div class="col-md-8 mb-4">
          <label for="validationCustom02" class="form-label">e-mail address</label>
         <div class="input-group has-validation">
          <span class="input-group-text" id="02">@</span>
          <input type="email" name="mails" class="form-control" id="validationCustom02" aria-describedby="inputGroupPrepend" placeholder="exemple@gmail.com" required autocomplete="off">
          <div class="invalid-feedback">
            Please enter an e-mail.
          </div>
         </div>
        </div>
        <div class="col-md-8 mb-4">
          <label for="validationCustom03" class="form-label">Password</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="03"><i class="fas fa-lock"></i></span>
            <input type="password" name="passe" class="form-control" id="validationCustom03" aria-describedby="inputGroupPrepend" placeholder="saisir votre mot de passe ici." autocomplete="off" required >
            <div class="invalid-feedback">
              Please enter a password.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit" name="submits">S'INSCRIRE</button>
        </div>
    </form><br><br>

    <strong> J'ai deja un compte,</strong><a href="formConnexion.php"> je me connectes </a>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>    