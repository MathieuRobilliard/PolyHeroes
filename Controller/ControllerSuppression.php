<?php
include("./../Model/ModelPersonnages.php");
$nomAventure = $_GET['nomAventure'];
$idPersonnage = $_GET['idPersonnage'];

supprimerPersonnage($idPersonnage);
$suppChar = true;
header('Location: ./../View/ViewPersonnages.php?nomAventure=' .$nomAventure. '&suppChar=' .$suppChar);



?>