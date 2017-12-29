<?php
session_start();
include("dbconnection.php");

if 	($_POST['submit']!=""){
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$suburb = $_POST['suburb'];
$postcode = $_POST['postcode'];
$avatar = $_POST['avatar'];
$numkids = $_POST['numkids'];
$ageofkids = $_POST['ageofkids'];
$typeofservice = $_POST['typeofservice'];
$servicehours = $_POST['servicehours'];

mysqli_query ($connection, "UPDATE educators SET phonenumber = '$phonenumber'AND address = '$address'AND suburb = '$suburb' AND postcode = '$postcode' AND avatar = '$avatar' AND numkids = '$numkids' AND ageofkids = '$ageofkids' AND typeofservice = '$typeofservice' AND hoursofservice = '$servicehours') WHERE EducatorID = '$EducatorID' ");

if (mysqli_affected_rows ($connection) >0) {
    header('Location: educator-member.php');
}
}
else {
    header('Location:esetup.php?setupFailed=true&reason=error');
}
?>