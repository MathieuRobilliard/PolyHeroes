<?php
	$username = $_POST["pseudo"];
	$password = $_POST["pass"];
	
	setcookie($username, $username, time());
print_r($_COOKIE);
?>