<?php
	$servername = "localhost";  // Host name depends on server
	$username = "root"; // DataBase username
	$password = ""; // DataBase password
	$database = "database"; // DataBase name

	$connection = new mysqli($servername, $username, $password, $database);

	if ($connection->connect_error) {
	  die("Connection failed: " . $connection->connect_error);
	}
	echo "";
?>
 <?php

class Database{

	

	private $host  = 'localhost';

  private $user  = 'root';

   // private $user  = 'pcrtnmco_rtracker';

    private $password   = "";

   // private $password   = "sjnFb?fn;F(A";

   //private $database  = "test"; 

   private $database  = "database"; 

    

    public function getConnection(){		

		$connection = new mysqli($this->host, $this->user, $this->password, $this->database);

		if($connection->connect_error){

			die("Error failed to connect to MySQL: " . $connection->connect_error);

		} else {

			return $connection;

		}

    }

}

?>