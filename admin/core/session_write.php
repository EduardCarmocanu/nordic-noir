<?
session_start();

// sets name of session if there is an existing valid session
if (isset($_GET['session_name'])) {$_SESSION['session_name'] = $_GET['session_name'];}

// destroys session
if (isset($_GET['logout'])) {session_destroy();}

?>