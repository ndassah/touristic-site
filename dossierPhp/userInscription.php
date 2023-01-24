<?php
require('bdd.php');

if(isset($_POST['secret'])){
  $secret=$_POST['secret'];
  if($secret == "admin2020"){

    //Vérifier si l'utilisateur a appuyé sur le bouton d'envoie.
if(isset($_POST['submitss']))
{
    // Enregistrement des informations issues du formulaire d'incription dans des variables.
    $name=htmlspecialchars($_POST['name']);
    $mails= htmlspecialchars($_POST['mails']);
    $passwordCrypte= password_hash($_POST['passe'], PASSWORD_DEFAULT); 

    if(!empty($name) AND !empty($mails)){

    //Vérifier si le nom de l'utilisateur qui souhaite s'inscrire existe déjá dans la table.
    $checkIfUserAlreadyExist = $bdd -> prepare('SELECT nom FROM adminUser WHERE nom = ?');
    $checkIfUserAlreadyExist -> execute(array($name));

    //Si on a trouvé aucun utisateur qui porte ce nom déjá inscrit dans la table, alors ...
    if($checkIfUserAlreadyExist -> rowCount() == 0)
    {
        //Insert l'utilisateur dans la table
        $insererUsers= $bdd-> prepare('INSERT INTO adminUser (nom, mail, pass) VALUES(?, ?, ?)');
        $insererUsers-> execute(array($name, $mails, $passwordCrypte));
        
        //Verifier que l'utilisateur est bien insere dans la table en récuperant les informations entrees.
        $recupUser=$bdd->prepare('SELECT * FROM adminUser WHERE nom=? AND pass=? AND mail=?');
        $recupUser->execute(array($name, $passwordCrypte, $mails));
        $userInfos= $recupUser->fetch();
        $idUser=$userInfos['id'];
        $passworded=$userInfos['pass'];
        $mail=$userInfos['mail'];

        //Si on a pú récupérer un utilisateur, alors ... 
        if($recupUser->rowCount() > 0)
        {
            //Crée des sessions.
            $_SESSION['auth'] = true;
            $_SESSION['idUser']=$idUser;
            $_SESSION['mail']= $mail;
            $_SESSION['name']=$name;
            $_SESSION['passed']= $passworded;

            header('Location: ../dossierHtml/confirmation.php');
        }
        //Si le nom que l'utilisateur a choisi existe déjá dans la table, alors ...
    }    
    else
    {
        $errorMessage = 'Désolé, cet utilisateur existe déjá !';
    }
  }else{
    $errorMessage = 'Veuillez renseigner tout les champs !';
  }
}

  }else echo "Votre mot de passe est incorecte, vous n'avez pas le droit de vous inscrire sur ce compte";
}else echo "Veuillez soumettre votre formulaire.";

?> 