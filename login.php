<?php
session_start();
include("dbconnection.php"); //creates database connection

if (isset($_POST["submit"]) && !empty($_POST["submit"])); 

$email = $_POST ['email'];
$password = $_POST ['password'];

//Executes the query
$sql = "SELECT email, password from parents where email = '$email' and password = 'SHA1 ($password)' ";
$result = mysqli_query ($connection, $sql);
$row = mysqli_fetch_array ($result);
if (is_array($row))
{
	$_session ['email'] = $row [email];
	$_session ['password'] = $row [password];
}
else 
	die(header('Location:signin.php?loginFailed=true&reason=password')); 
if(isset($_session['username'])); 
	header('Location:member.php');

?>