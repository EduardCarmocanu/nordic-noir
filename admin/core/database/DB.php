<?php

/*
*	This class handles the connection to the databse
*	It returns PDO instance in order for it to be used in Database operations
*/

class DB
{
	
	public static function CONNECT ()
	{
		// Connection Credentials 
		$host = "localhost";
		$db = "nordicNoir";
		$user = "root";
		$password = "";
		
		try {
			$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
			return $pdo;
			
		}catch (Exception $e) {
			echo "There has been an internal database Error";
		}
	}
	
}
