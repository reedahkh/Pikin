<?php
session_start();
include("dbconnection.php");

if (isset($_POST["submit"]) && !empty($_POST["submit"])); 

$phonenumber = $_POST['phonenumber'];
$homeaddress = $_POST['homeaddress'];
$homesuburb = $_POST['homesuburb'];
$homepostcode = $_POST['homepostcode'];
$officeaddress = $_POST['officeaddress'];
$officesuburb = $_POST['officesuburb'];
$officepostcode = $_POST['officepostcode'];
$image = $_POST['image'];
$numkids = $_POST['numkids'];
$ageofkids = $_POST['ageofkids'];
$typeofservice = $_POST['typeofservice'];
$servicehours = $_POST['servicehours'];

mysqli_query ($connection, "INSERT INTO parents (phonenumber, homeaddress, homesuburb, homepostcode, officeaddress, officesuburb, officepostcode, image, kids, ageofkids, typeofservice, hoursofservice) VALUES ($phonenumber', '$homeaddress', '$homesuburb', '$homepostcode', '$officeaddress', '$officesuburb', '$officepostcode', '$image', '$numkids', '$ageofkids', '$typeofservice', '$servicehours')");

if (mysqli_affected_rows ($connection) >0) {
    header('Location: member.php');
}
else {
    die(header('Location:setup.php?setupFailed=true&reason=error'));
}
?>