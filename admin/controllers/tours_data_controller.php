<?php

require '../core/database/DB.php';
require_once '../core/database/QueryBuilder.php';


$query_builder = new QueryBuilder(DB::CONNECT());

$raw_data = $query_builder->select_all_where('Tours', 'state', '1');

echo json_encode($raw_data);

