<?php
require_once('core/database/DB.php');
require_once('core/database/QueryBuilder.php');

class Dashboard_controller
{ 

    private $queryBuilder;
    public $tours;

    public function __construct ()
	{
        $this->queryBuilder = new QueryBuilder(DB::CONNECT());
        $this->tours = $this->queryBuilder->select_all_from('Tours');
    }

    public function printOut($val){
        echo $val;
    }

    public function changeTour($object){
        try{
            $this->queryBuilder->insert_into_tours($object);
        }catch(Exception $e){
            $e->getMessage();
        }
        
    }

    public function createTour(){
        try{
            $this->queryBuilder->create_new_tour();
            $this->relocate();
        }catch(Exception $e){
            $e->getMessage();
        }
    }

    public function deleteTour($id){
        try{
            $this->queryBuilder->delete_tour($id);
            $this->relocate();
        }catch(Exception $e){
            $e->getMessage();
        }
    }


    public function relocate(){
        if (headers_sent()){
            die('<script type="text/javascript">window.location.href="/admin";</script>');
        }else{
            header('Location:/admin');
            die();
        }   
    }


    



}