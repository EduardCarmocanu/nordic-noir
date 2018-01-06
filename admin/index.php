<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NOIR Admin</title>
	<script src="https://use.fontawesome.com/96a62ba6a5.js"></script>
	<link rel="stylesheet" href="../css/main.css">
	
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<?php
	//adding the controllers
	require_once('controllers/login_controller.php');
	$CLogin = new Login_controller();
	

	//checking if user is logged in
	if($CLogin->userLogged()){
			include('views/dashboard.php');		
		}else{
			//checking if the form was posted
			if(isset($_POST['username']) || isset($_POST['password'])){
				$username = $_POST['username'];
				$password =$_POST['password'];

				//checking the password compaired to the database
				$checker = $CLogin->checkUsers($username, $password);

				if($checker == true){
					//setting the session as logged in and refreshing the page
					$_SESSION['logged'] = $checker;
					echo "<meta http-equiv='refresh' content='0'>";
				}else{
					//displaying the errror message
					echo $checker;
				}
			}
			//login form is put into the view
			include('views/login.html');
		}


?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="views/js/dashboard.js"></script>
</body>
</html>