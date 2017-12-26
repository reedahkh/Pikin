<?php
session_start();
include("dbconnection.php");

if (isset($_POST["submit"]) && !empty($_POST["submit"])); 

$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$suburb = $_POST['suburb'];
$postcode = $_POST['postcode'];
$avatar = $_POST['avatar'];
$numkids = $_POST['numkids'];
$ageofkids = $_POST['ageofkids'];
$typeofservice = $_POST['typeofservice'];
$servicehours = $_POST['servicehours'];

mysqli_query ($connection, "INSERT INTO parents (phonenumber, address, suburb, postcode, avatar, kids, ageofkids, typeofservice, hoursofservice) VALUES ($phonenumber', '$address', '$suburb', '$postcode', '$avatar', '$numkids', '$ageofkids', '$typeofservice', '$servicehours')");

if (mysqli_affected_rows ($connection) >0) {
    header('Location: member.php');
}
else {
    die(header('Location:setup.php?setupFailed=true&reason=error'));
}
?>