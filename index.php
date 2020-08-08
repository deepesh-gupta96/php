<?php 

session_start();

if (isset($_SESSION['username'])) {
	$_SESSION['message'] = 'You must login first to view the page';
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');
}










 ?>