<?php
include("./../Model/ModelPersonnages.php");
$nomAventure = $_GET['nomAventure'];
$idPersonnage = $_GET['idPersonnage'];

supprimerPersonnage($idPersonnage);
// IL faut aussi supprimer dans la table personnage, avec un trigger.
header('Location: ./../View/ViewPersonnages.php?nomAventure=' .$nomAventure);



?>