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



}