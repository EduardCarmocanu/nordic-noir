<?php

require '../core/database/DB.php';
require_once '../core/database/QueryBuilder.php';

// creates an instance of QueryBuilder
$query_builder = new QueryBuilder(DB::CONNECT());

// gets the raw_data from the databse
$raw_data = $query_builder->select_all_where('tours', 'state', '1');

// ecodes the data and echoes it
echo json_encode($raw_data);

