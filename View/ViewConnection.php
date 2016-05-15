<?php include("header.php"); ?>
<?php include("menu-left.php"); ?>


<!-- Ici faire un test de cookie: si le cookie existe alors on affiche pas: -->
<div id="connection">
	<p>Veuillez entrer votre pseudo et votre mot de passe:</p>
	<form method="POST" action="../Controller/ControllerConnection.php">
    <p>
       <label for="pseudo">Votre pseudo :</label>
       <input type="text" name="pseudo" />
       <br />
       <label for="pass">Votre mot de passe :</label>
       <input type="password" name="pass" />
    </p>
    <input type="submit" value="Se connecter" ></code>
	<p>
	</form>
	
	<?php
	if (isset($_GET['validePseudo']) AND isset($_GET['valideMDP'])) 
	{
		if( $_GET['validePseudo'] == true AND $_GET['valideMDP'] == true) 
		{
			?> <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Connexion réussie!</div> <?php
		} 
		elseif ($_GET['validePseudo'] == true AND $_GET['valideMDP'] == false)
		{
			?> <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Mot de passe incorecte!</div> <?php
		} 
		elseif ($_GET['validePseudo'] == false AND $_GET['valideMDP'] == false)
		{
			?> <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Ce pseudo n'existe pas!</div> <?php
		}
	
	}
	?>
</div>

<?php include("footer.php"); ?>
