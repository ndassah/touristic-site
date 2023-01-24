<!DOCTYPE html>
<html lang="en">
<?php require('head.php') ?>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <h4><a class=" navbar-bra " href="confirmation.php">BookingTravel</a></h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link">Just Booked</a>
        </li>
      </ul>
      <?php
      if(isset($_SESSION['auth']))
      {
        ?>

        <div class="dropdown">
          <button class="btn" type="button" id="profilUser" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user-circle fa-3x" style="color:white"></i>
          </button>

          <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="profilUser">
            <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> See my profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-layer-group"></i> Collections</a></li>
            <li><a class="dropdown-item" href="adminConfirmation.php"><i class="fa-solid fa-people-roof"></i> Communaute d'administration</a></li>
            <li><a class="dropdown-item" href="confirmation.php"><i class="fa-solid fa-book-open-reader"></i> Communaute Utilisateurs</a></li>
            <li><a class="dropdown-item nabr" href="#"><i class="fa-sharp fa-solid fa-door-open"></i> Sign out</a></li>
          </ul>
        </div>
    
          <br><br>
          </li>
        </ul>
        <?php
       }else{
        ?>
          <div class="dropdown">
            <button class="btn" type="button" id="profilUser" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle fa-3x" style="color:white"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="profilUser">
              <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> See my profile</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-layer-group"></i> Collections</a></li>
              <li><a class="dropdown-item" href="adminConfirmation.php"><i class="fa-solid fa-people-roof"></i> Communaute d'administration</a></li>
            <li><a class="dropdown-item" href="confirmation.php"><i class="fa-solid fa-book-open-reader"></i> Communaute Utilisateurs</a></li>
              <li><a class="dropdown-item" href="formConnexion.php"><i class="fa-solid fa-right-to-bracket"></i> Sign in</a></li>
            </ul>
          </div>
          <br><br>
              </li>
            </ul>
        <?php
       }
       ?>
    </div>
  </div>
</nav>

<script src="index.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>