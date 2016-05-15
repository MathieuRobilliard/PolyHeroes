<?php 

$accountCreated = false;
$noValidePseudo = false;

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['pass'];

include("./../Model/ModelInscription.php");
$isPlayer = get_not_users($pseudo);

if ($isPlayer != "" OR $pseudo == "" OR $motDePasse == "")
{
	$noValidePseudo = true;
	header('Location: ./../View/ViewInscription.php?noValidePseudo=' .$noValidePseudo);
}
elseif($isPlayer == "" AND $pseudo != "" AND $motDePasse != "")
{
	$motDePasseHash = md5($motDePasse);	// md5 has low security
	inscription($pseudo,$motDePasseHash);
	$accountCreated = true;
	header('Location: ./../View/ViewInscription.php?accountCreated=' .$accountCreated);	
}

//header('Location: ./../View/ViewInscription.php?noValidePseudo=' .$noValidePseudo);	


?>