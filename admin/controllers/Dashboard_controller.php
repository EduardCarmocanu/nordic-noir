<?php
require_once('core/database/DB.php');
require_once('core/database/QueryBuilder.php');

class Dashboard_controller
{ 

    private $queryBuilder;
    private $tours;

    public function __construct ()
	{
        $this->queryBuilder = new QueryBuilder(DB::CONNECT());
        $this->users = $this->queryBuilder->select_all_from('tours');
    }



}