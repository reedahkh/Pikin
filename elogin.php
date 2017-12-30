<?php
session_start();
include("dbconnection.php"); //creates database connection
if (isset($_POST['email']) && isset($_POST['password'])) { 
	
	$email = $_POST ['email'];
	$password = $_POST ['password'];
	//Executes the query
	$sql = "SELECT * from educators where email = '$email' and password = '$password' ";
	$result = mysqli_query ($connection, $sql);	
	if ($result->num_rows > 0){
		while ($row = mysqli_fetch_assoc ($result)) {
			
			$_SESSION['EducatorID'] = $row['EducatorID'];
			$_SESSION['email'] = $row['email'];
			header("Location:educator-member.php");
		}
	}	
	
}
else {
	header('Location:esignin.php?loginFailed=true&reason=password'); 

}
?>