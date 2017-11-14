<?php

require "../core/database/DB.php";
require "../core/database/QueryBuilder.php";
require "../core/Login.php";
require "../utilities/utilities.php";


$login = new Login(
	$_POST['email'],
	$_POST['password'],
	new QueryBuilder(DB::CONNECT())
);


if ($login->authenticate()) {
	// header('Location: /admin/dashboard.php');
	dd('match');
}
dd('no match');




$login = null;
unset($login);