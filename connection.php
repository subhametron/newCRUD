<?php
$server = "localhost";
$username = "root";
$password = "root";
$db = "db_clientaddressbook";

//create a connection
$conn = mysqli_connect ($server, $username, $password, $db);
//error_reporting(E_ERROR | E_PARSE);

//check connection
if (!$conn){
	die("connection_failure!" .mysqli_connect_error());
}
echo "";
?>