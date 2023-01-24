
<?php

session_start();
require('bdd.php');
if(isset($_POST['submitss']))
{
    $name=htmlspecialchars($_POST['name']);
    $passed= htmlspecialchars($_POST['passed']);
    if(!empty($name) AND !empty($passed))

    {
    $recupUser=$bdd->prepare('SELECT * FROM adminUser WHERE nom=?');
    $recupUser->execute(array($name));
    $userInfos= $recupUser->fetch();

    if($recupUser->rowCount() > 0)
    {
        $passworded=$userInfos['pass']; 
        $mail=$userInfos['mail']; 
        $idUser=$userInfos['id'];  
        if(password_verify($passed,$passworded))
        {
            $_SESSION['auth'] = true;
            $_SESSION['name']=$name;
            $_SESSION['mail']=$mail;
            $_SESSION['idUser']=$idUser;
            $_SESSION['passed']=$passworded;
            header('Location: ../dossierHtml/confirmation.php');
        }else{
            header('Location: ../dossierHtml/formConnection.php');
            }
        
    }else{
        ?><script type = "text/javascript">console.log('salut gamin !')</script><?php
    }

    }else{
        ?><script type = "text/javascript">console.log('salut les jeunes !')</script><?php
    }
}  
?>