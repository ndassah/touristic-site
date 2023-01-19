<?php 

session_start();
require('../config.php');
if(!isset($_SESSION['passed']) || empty($_SESSION['user']))
{
    header('Location: ../dossierHtml/formConnexion.php');
    exit();
}
?>