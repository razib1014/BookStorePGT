<?php
//database connection required information.
$server = 'localhost';
$uname = 'root';
$pwd = '';
$dbName = 'bsd1';

//creating connection with database.
$dbconn = mysqli_connect($server, $uname, $pwd, $dbName);

//report error if can't connect with databse.
if(!$dbconn){
	die("Connection falied because".mysqli_connect_error());
}

?>