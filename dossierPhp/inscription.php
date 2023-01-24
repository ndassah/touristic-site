<?php

session_start();
require('bdd.php');
//Vérifier si l'utilisateur a appuyé sur le bouton d'envoie.
if(isset($_POST['submits']))
{
    // Enregistrement des informations issues du formulaire d'incription dans des variables.
    $name=htmlspecialchars($_POST['name']);
    $mails= htmlspecialchars($_POST['mails']);
    $passwordCrypte= password_hash($_POST['passe'], PASSWORD_DEFAULT); 

    if(!empty($name) AND !empty($mails)){

    //Vérifier si le nom de l'utilisateur qui souhaite s'inscrire existe déjá dans la table.
    $checkIfUserAlreadyExist = $bdd -> prepare('SELECT nom FROM users WHERE nom = ?');
    $checkIfUserAlreadyExist -> execute(array($name));

    //Si on a trouvé aucun utisateur qui porte ce nom déjá inscrit dans la table, alors ...
    if($checkIfUserAlreadyExist -> rowCount() == 0)
    {
        //Insert l'utilisateur dans la table
        $insererUsers= $bdd-> prepare('INSERT INTO users (nom, mail, pass) VALUES(?, ?, ?)');
        $insererUsers-> execute(array($name, $mails, $passwordCrypte));
        
        //Verifier que l'utilisateur est bien insere dans la table en récuperant les informations entrees.
        $recupUser=$bdd->prepare('SELECT * FROM users WHERE nom=? AND pass=? AND mail=?');
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
?> 