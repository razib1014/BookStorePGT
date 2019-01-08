<?php
session_start();
if(!isset($_SESSION["uname"])){
	//header("Location: ../php/user_login.php");
	header("Location: user_login.php");
	exit(); 
}
?>
