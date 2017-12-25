<?php 
$host = "localhost";
$username = "root";
$password = "root";
$database = "pickin";

$connection = new mysqli ($host, $username, $password, $database);

if ($connection ->connect_error)
{
	die ("connection failed" . $connection ->connect_error);
}


 ?>