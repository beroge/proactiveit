<?php
	$servername = "localhost";  // Host name depends on server
	$username = "root"; // DataBase username
	$password = ""; // DataBase password
	$database = "database"; // DataBase name

	$co = new mysqli($servername, $username, $password, $database);

	if ($connection->connect_error) {
	  die("Connection failed: " . $co->connect_error);
	}
	echo "";
?>
