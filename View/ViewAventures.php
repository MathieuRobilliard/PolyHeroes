<?php include("header.php"); ?>
<?php include("menu-left.php"); ?>

<?php include("./../Model/ModelAventures.php"); ?>

<!-- LIST OF JOURNEYS -->

<?php

$tab_aventures = selectAventure();

?> <div class="row"> <?php
list_Aventures($tab_aventures);
?></div> <?php


function list_Aventures($tj) {
	
    foreach ($tj as $j) {
        $nomAventure = $j->nomAventure;
        $resume = $j->resumeAventure;
        ?>
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail" id="listThings">
			  <img src="..." alt="[image Aventure]">
			  <div class="caption">
				<h3>	<?php echo $nomAventure; ?>		</h3>
				<p>		<?php echo $resume; ?>	</p>
				
				<?php
				if (get_data_Cookies("PolyHeroesName") != "notConnected")
				{
					?> <p><a href="ViewPersonnages.php?nomAventure=<?php echo $nomAventure ?>" class="btn btn-primary" role="button">Jouer cette aventure</a></p> <?php
				}
				elseif (get_data_Cookies("PolyHeroesName") == "notConnected")
				{
					?> <p><a href="ViewConnection.php" class="btn btn-primary" role="button">Connectez-vous!</a></p> <?php
				}
				?>
			  </div>
			</div>
		  </div>
		<?php
    }  
}

?>

<?php include("./../View/footer.php"); ?>