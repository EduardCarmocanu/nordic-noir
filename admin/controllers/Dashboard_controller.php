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


    

    public function alerter($x){
        $printer = '<div class="alerter">';
        foreach ($x as $key => $item) {
            $p = '<p>'.$key.' = '.$item;
            $printer .= $p;
        }

        $printer .= '</div>';
        echo $printer;
    }



    public function singleAlert($x){
        echo '<div class="alerter"><p>'.$x.'</p></div>';
    }


    public function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    public function filestuff($name){
        require_once('controllers/Upload.php');
        if($_FILES[$name]["tmp_name"]){
            $check = getimagesize($_FILES[$name]["tmp_name"]);
            $Upload = new Upload_controller($_FILES[$name],$check);
            if(!$Upload->returner){
                return false;
            }else{
                echo $Upload->returner . '<br>';
                return $Upload->returner;  
            }
        }
    }
    

}