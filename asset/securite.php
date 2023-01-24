<?php 

session_start();
if(!isset($_SESSION['passed']) || empty($_SESSION['idUser']))
{
    header('Location: ../dossierHtml/formConnexion.php');
}
?>