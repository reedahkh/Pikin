<?php 
$host = "localhost";
$username = "seyi";
$password = "classified";
$database = "pikin";

$connection = new mysqli ($host, $username, $password, $database);

if ($connection ->connect_error)
{
	die ("connection failed" . $connection ->connect_error);
}


 ?>