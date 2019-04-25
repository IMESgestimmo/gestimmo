<?php 

	define('HOST','localhost');
	define('USER','root');
	define('PWD','');
	define('DB','gestimmodb');

	$con = mysqli_connect(HOST,USER,PWD,DB) or die("Erreur de connexion");