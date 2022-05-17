<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pl_scoreboard');
 
/* Attempt to connect to MySQL database */
$mysqli = new  mysqli("localhost", "root", "", "pl_scoreboard");

	//check connection
	if($mysqli->connect_error){
		die("connection failed. ". $mysqli->connect_error);
	}
?>