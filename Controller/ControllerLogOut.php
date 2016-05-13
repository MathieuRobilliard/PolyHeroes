<?php
print_r($_COOKIE);
if(isset($_COOKIE["PolyHeroesConnected"]))  
{
		if( $_COOKIE["PolyHeroesConnected"] == "connected") 
		{
			log_out_Cookies("PolyHeroesConnected");
			header('Location: ./../View/HomePage.php');
		}
}
/*header('Location: ./../View/HomePage.php');*/
?>