<?php
session_start();
include("dbconnection.php"); //creates database connection
if ($_POST['submit']!= "") { 
$email = $_POST ['email'];
$password = $_POST ['password'];
//Executes the query
$sql = "SELECT * from parents where email = '$email' and password = 'SHA1 ($password)' ";
$result = mysqli_query ($connection, $sql);
if (mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc ($result)) {
		$_SESSION['ParentID'] = $row['ParentID'];
		$_SESSION['email'] = $row['email'];
		header("Location:pmember.php");
	}
}	
	
}
else 
	header('Location:signin.php?loginFailed=true&reason=password'); 
?>