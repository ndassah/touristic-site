<?php
require('../dossierPhp/connexion.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php require('head.php');?>
<body>

<?php 
require('navbar.php'); 
?>

<div class="container-md text-center py-5 ml-8">
<form method="post" class="row g-3 posi needs-validation" novalidate>
        <div class="col-md-8 mb-4">
          <label for="validationCustom01" class="form-label">User name</label>
         <div class="input-group has-validation">
          <span class="input-group-text" id="01"><i class="fas fa-user"></i></span>
          <input type="text" name="name" class="form-control" id="validationCustom01" 
          aria-describedby="inputGroupPrepend" placeholder="Fotso" autocomplete="off" 
          required>
          <div class="invalid-feedback">
          Please enter an user name.
          </div>
         </div>
        </div>
        <div class="col-md-8 mb-4">
          <label for="validationCustom03" class="form-label">Password</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="03"><i class="fas fa-lock"></i></span>
            <input type="password" name="passed" class="form-control" 
            id="validationCustom03" aria-describedby="inputGroupPrepend" 
            placeholder="Enter your password here." autocomplete="off" required >
            <div class="invalid-feedback">
              Please enter a password.
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <button class="btn btn-primary allertConnexion mb-4" type="submit" name="submits" >lOG IN</button>
        </div>
    </form><br><br>

    <strong>I do not have an account,</strong><a href="formInscription.php"> I'm registering.</a>
</div>


<script src="assets/js/bootstrap.bundle.min.js"></script>
<script referrerpolicy="no-referrer" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>    