<?php include("header.php"); ?>
<?php include("menu-left.php"); ?>
<?php include("./../Model/ModelCreation.php"); ?>
<?php include("./../Model/ModelAventures.php"); ?>


<div id="connection">
	<?php 
	$nomAventure = $_GET['nomAventure'];
	$idAventure = get_idAventure($nomAventure);
	?>
	<h4> Créez un nouveau personnage pour l'aventure <?php echo $nomAventure; ?> ici: </h4>
	
	<form method="post" action="../Controller/ControllerCreation.php?nomAventure=<?php echo $nomAventure ?>">
    <p>
		<label for="userName">Votre nom de compte :</label>
        <input type="text" name="userName" />
	
        <label for="name">Nom de votre personnage :</label>
        <input type="text" name="name" />
	   
	    <label class="radio-inline"> 
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Homme
		</label>
		<label class="radio-inline">
		  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Femme
		</label>
		
		<p>
	    <label for="weapons">Choisissez votre arme de départ :</label>
        <select name="weapons">
	    <?php
			$reqWeapons = get_AllNameEquipement();
			
			foreach ($reqWeapons as $equi) 
			{
				$nomEquipement = $equi->nomEquipement;
				$idEquipement = get_idEquipement($nomEquipement);
				$resumeEquipement = get_resumeEquipement($nomEquipement);
				?> <option value="<?php echo($idEquipement); ?>" ><?php echo ($nomEquipement);?></option> <?php
			}
		?>
		</p>
		</select>
    </p>
	<p> Vous commencez avec 20 PV! </p>
    <input type="submit" value="Créer le personnage" ></code>
	</form>	
	
	<?php
			if (isset($_GET['valideName']))
			{
				if( $_GET['valideName'] == false) 
				{
					?> <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Ce compte n'existe pas!</div> <?php
				}
			}
			?>
	
</div>


<?php include("footer.php"); ?>