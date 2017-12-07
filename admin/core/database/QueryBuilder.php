<?php
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

	public function insert_into_tours($data){
		//$this->singleAlert($data->image_url);
		if($data->image_url != $data->old_image_url){
			$this->singleAlert($data->image_url,$data->old_image_url);						
			unlink($data->old_image_url);
		}
		if($data->thumbnail_url != $data->old_thumbnail_url){
			unlink($data->old_thumbnail_url);
		}
		$userID = $_SESSION['logged']['id'];
		$date = date("Y-m-d");
		$statement = $this->pdo->prepare("UPDATE `Tours` SET `user_id`=$userID, `title`='$data->title', `content`='$data->content', `image_url`='$data->image_url', `thumbnail_url`='$data->thumbnail_url', `price`=$data->price, `aditional_info`='$data->aditional', `state`=$data->state, `date_altered`= '$date' WHERE `id`=$data->id");
		$statement->execute();
	}

	public function create_new_tour(){
		$userID = $_SESSION['logged']['id'];
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