<?php

/*
*	This class holds all the operations on the database.
*	I handles all the queryes that we would need to do on the database
*	It required an instance of PDO in order to work
*/
class QueryBuilder 
{
	// declared private property
	private $pdo;
	
	public function __construct ($pdo)
	{
		// sets a pdo instante to the private property
		$this->pdo = $pdo;
	}
	
	// Selects all entries in a certain table
	public function select_all_from ($table)
	{
		$statement = $this->pdo->prepare("SELECT * from $table");
		$statement->execute();
		
		// Gets the response data
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}
	
	// Selected all entries in a table where a condition is valid
	public function select_all_where ($table, $column, $entry)
	{
		$statement = $this->pdo->prepare("SELECT * FROM $table WHERE $column='$entry'");
		$statement->execute();
		
		// Gets the response data
		return $statement->fetchAll(PDO::FETCH_ASSOC);	
	}

	// Inserts data into tours
	public function insert_into_tours($data){
		//$this->singleAlert($data->image_url);
		// Checks is image urls are different
		if($data->image_url != $data->old_image_url){
			$this->singleAlert($data->image_url,$data->old_image_url);						
			// deletes file at old URL
			unlink($data->old_image_url);
		}

		if($data->thumbnail_url != $data->old_thumbnail_url){
			// Deletes file at old URL
			unlink($data->old_thumbnail_url);
		}
		$userID = $_SESSION['logged']['id'];
		// creates current date to be inserted as database entry
		$date = date("Y-m-d");
		$statement = $this->pdo->prepare("UPDATE `Tours` SET `user_id`=$userID, `title`='$data->title', `content`='$data->content', `image_url`='$data->image_url', `thumbnail_url`='$data->thumbnail_url', `price`=$data->price, `aditional_info`='$data->aditional', `state`=$data->state, `date_altered`= '$date' WHERE `id`=$data->id");
		$statement->execute();
	}
	
	public function create_new_tour(){
		// sets SESSION id
		$userID = $_SESSION['logged']['id'];
		// creates current date to be inserted as database entry
		$date = date("Y-m-d");
		$statement = $this->pdo->prepare("INSERT INTO `Tours` (`user_id`,`title`,`state`,`date_created`,`date_altered`) VALUES ($userID,'NEW TOUR',0,'$date','$date')");
		$statement->execute();
	}

	public function delete_tour($id){
		$statement = $this->pdo->prepare("DELETE FROM `Tours` WHERE `id`=$id");
		$statement->execute();
	}


	public function singleAlert($x,$x2){
        echo '<div class="alerter"><p>'.$x.'</p><p>'.$x2.'</p></div>';
    }
	
	
	
	
}