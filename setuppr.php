<?php
session_start();
include("dbconnection.php");

if (isset($_POST["submit"])){
	$data = array(
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'phonenumber' => $_POST['phonenumber'],
            'homeaddress' => $_POST['homeaddress'],
            'homesuburb' => $_POST['homesuburb'],
            'homepostcode' => $_POST['homepostcode'],
            'officeaddress' => $_POST['officeaddress'],
            'officesuburb' => $_POST['officesuburb'],
            'image' => $_POST['image'],
            'numkids' => $_POST['numkids'],
            'ageofkids' => $_POST['ageofkids'],
            'typeofservice' => $_POST['typeofservice'],
            'servicehours' => $_POST['servicehours']
        );
	function UpdateTable($table, $data, $condition)
	{
		$data = array();

		foreach ($data as $key => $value) {
			$data [] = "$key = '$value'";
		}
		$sql = "UPDATE $table SET " . implode(" , ", array_values($data)). "WHERE $condition";
	}
	UpdateTable("parents", $data, "ParentID = '$ParentID'");
    	header('Location:pmember.php');

}
	else {
    	header("Location:setup.php?setupFailed=true&reason=error");
	}
		
?>

