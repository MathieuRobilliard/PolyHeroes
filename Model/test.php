<?php include("model.php"); ?>


<?php
	
$sql = "SELECT * FROM joueurs WHERE nomJoueur='test'";
$reponse = $bdd->query($sql);


while ($donnee = $reponse->fetch())
{
?>
	<p>ID du joueur: <?php echo $donnee['idJoueur']; ?> </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête



?>


<form action="cible.php" method="post">
<p>
    <input type="text" name="nomJoueur" />
	<input type="text" name="motDePasse" />
    <input type="submit" value="Valider" />
</p>
</form>

