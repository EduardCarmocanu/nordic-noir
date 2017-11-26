<?php
<<<<<<< HEAD
=======

>>>>>>> master
class QueryBuilder 
{
	private $pdo;
	
	public function __construct ($pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function select_all_from ($table)
	{
		$statement = $this->pdo->prepare("SELECT * from $table");
		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function select_all_where ($table, $column, $entry)
	{
		
		$statement = $this->pdo->prepare("SELECT * FROM $table WHERE $column='$entry'");
		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_ASSOC);	
	}
	
	
	
}