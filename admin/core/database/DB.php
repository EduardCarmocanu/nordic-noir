<?php
class DB
{
	
	public static function CONNECT ()
	{
		
		$host = "localhost";
		$db = "nordicNoir";
		$user = "root";
		$password = "root";
		
		try {
			$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
			return $pdo;
			
		}catch (Exception $e) {
			echo "There has been an internal database Error";
		}
	}
	
}
