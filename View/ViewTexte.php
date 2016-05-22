<?php 
include("header.php"); 
include("./../Controller/ControllerTexte.php");
include("menu-left.php"); 
?>
	  
<section id=texteAventure>
	
	<!-- Print the text -->
	<?php 		
		if ($pvActuels <= 0)
		{
			echo( "Votre personnage est mort!");
		}
		else 
		{
			echo( $tab_Json[$page]);
		}
		
	?>
</section>

<?php include("footer.php"); ?>