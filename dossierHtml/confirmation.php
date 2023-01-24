<?php 
require('../dossierPhp/content.php');?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php');?>
<body> 

    <?php  require('navbar.php'); ?>
    <section class=sect1 id="sect1">
       <div class=cont>
           <h4>Faites nous confiance</h4>
           <h1>Voyagez en toute sécurité avec BookingTravel</h1>
           <p>Nous pronons la sécurité et la satisfaction de nos clients avant toute chose</p>
       </div>
    </section>
    <div class="container">
        <div class="text-center"> <?php $errorMessage ?> </div>
        <div class="flori">
        <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <p>Ville depart : </p><input class="form-control" type="text" name="villeD" placeholder="Douala" required autocomplete="off"><br>
                </div>
                <div class="col">
                    <p>Ville arrive : </p><input class="form-control" type="text" name="villeA" placeholder="Baham" required autocomplete="off" ><br>
                </div>
                <div class="col">
                    <p>Jour de depart </p><input class="form-control" type="date" name="jourD" required autocomplete="off"><br>
                </div>
                <div class="col">
                    <p>heure de depart</p>
                    <select class="form-select" name="option" required>
                      <option selected>choisir une tranche horaire de votre depart</option>
                      <option id="1">Aux premieres heures(00:00:00 - 05:59:00)</option>
                      <option id="2">Journee(06:00:00 - 11:59:00)</option>
                      <option id="3">Apres-midi(12:00:00 - 17:59:00)</option>
                      <option id="4">Soiree(18:00:00 - 23:59:00)</option>
                    </select>
                </div>
                <div class="col">
                    <P>...</P><button type="submit" name="submit" class="btn btn-primary mb-3">RECHERCHER</button>
                </div>
            </div>
        </form>
        </div>
    </div>

        <!-- section destination -->
        <section id="sect2">
        <div class="sup">
        <h1 class="title">Destinations populaires</h1>
        <div class="content">
            <!-- box -->
            <div class="box">
                <img src="img1.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Yaoundé</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <button type="submit" class="btn btn-primary" name="yaounde">Consulter</button>
                        <?php if(!empty($_POST['yaounde'])){
                            $villeChoisie = "Yaounde";
                        } ?>
                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="douala.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Douala</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <button type="submit" class="btn btn-primary" name="">Consulter</button>
                    </div>
                </div>
            </div>
            <!-- box -->
            <!-- box -->
            <div class="box">
                <img src="edea.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Edea</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <button type="submit" class="btn btn-primary" name="">Consulter</button>
                    </div>
                </div>
            </div>
            <!-- box -->
             <!-- box -->
             <div class="box">
                <img src="kribi.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Kribi</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <button type="submit" class="btn btn-primary" name="">Consulter</button>
                    </div>
                </div>
            </div>
            <!-- box -->
             <!-- box -->
             <div class="box">
                <img src="limbe.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Limbé</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Consulter</a>
                    </div>
                </div>
            </div>
            <!-- box -->
             <!-- box -->
             <div class="box">
                <img src="bafang.jpg" alt="">
                <div class="content">
                    <div>
                        <h4>Bafang</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>Ea iusto ipsa repudiandae amet conseq.</p>
                        <a href="#">Consulter</a>
                    </div>
                </div>
            </div>
            <!-- box -->
        </div>
        </div>
    </section>
    <?php require('../dossierHtml/footer.php');?>


<script src="index.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script referrerpolicy="no-referrer" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>    