<?php 
$host = "localhost";
$username = "root";
<<<<<<< HEAD
$password = "root";
=======
$password = "";
>>>>>>> 165d05d41442f08e6329d31b431e97c22ad175cb
$database = "pickin";

$connection = new mysqli ($host, $username, $password, $database);

if ($connection ->connect_error)
{
	die ("connection failed" . $connection ->connect_error);
}


 ?>