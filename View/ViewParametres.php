<?php include("header.php"); ?>
<?php include("menu-left.php"); ?>

<section id="parametres">
	<div id="connection">
		<p><strong>Vous pouvez changer votre mot de passe ici!</strong></p>
		<p>Pour cela, entrez votre pseudo, votre ancien mot de passe, et le nouveau:</p>
		<form method="POST" action="../Controller/ControllerParametres.php">
		<p>
		   <label for="pseudo">Votre pseudo :</label>
		   <input type="text" name="pseudo" />
		   <br />
		   <label for="oldPass">Votre ancien mot de passe :</label>
		   <input type="password" name="oldPass" />
		   <br />
		   <label for="newPass">Votre nouveau mot de passe :</label>
		   <input type="password" name="newPass" />
		</p>
		<input type="submit" value="Valider les modifications" ></code>
		<p>
		</form>
		<?php
		if (isset($_GET['validePseudo']) OR isset($_GET['valideOldMDP']) OR isset($_Get['valideNewMDP'])) 
		{
			if( $_GET['validePseudo'] == true AND $_GET['valideOldMDP'] == true AND $_GET['valideNewMDP'] == true) 
			{
				?> <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Nouveau mot de passe enrengistré!</div> <?php
			} 
			elseif ($_GET['validePseudo'] == true AND $_GET['valideOldMDP'] == false AND $_GET['valideNewMDP'] == false) 
			{
				?> <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Ancien mot de passe incorecte!</div> <?php
			} 
			elseif ($_GET['validePseudo'] == false AND $_GET['valideOldMDP'] == false AND $_GET['valideNewMDP'] == false) 
			{
				?> <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Ce pseudo n'existe pas!</div> <?php
			}
		
		}
		?>
	</div>
	
	
	<div id="connection">
	<a id="header-btn" href="./../View/HomePage.php?logOut='true'" class="btn btn-primary" role="button">Se déconnecter</a> 
	</div>
	
<section>

<?php include("./../View/footer.php"); ?>