<?php

	try
	{
		//$pdo = new PDO('mysql:host=' .getenv('OPENSHIFT_MYSQL_DB_HOST').';dbname=' .getenv('OPENSHIFT_APP_NAME'), getenv('OPENSHIFT_MYSQL_DB_USERNAME'), getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
		$pdo = new PDO('mysql:host=127.6.241.2;dbname=bd polyheroes;charset=utf8', 'admintHqkgDh', '9bvP7VG6pBly',
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

?>