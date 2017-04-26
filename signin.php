<?php
include_once("connection.php");
session_start();


$email=  $_POST["email"];
$password=  $_POST["password"];
$_SESSION["email"]=$email;
//$email= mysqli_real_escape_string($conn, $_POST['email']);
//$password= mysqli_real_escape_string($conn, $_POST['password']);
$check= "SELECT * FROM `easel`.`customer` where `email_customer`='".$email."' AND `password_customer`='".$password."'";
$result=mysqli_query($conn,$check);
$numResults=mysqli_num_rows($result);

if($numResults ==1)
{
    //session_start(); 
    $_SESSION["email"]=$email;
    header('Location: memberHome.php'); //if query worked, should to index with modified Member Home Page (which hasn't been implemented yet)
    mysqli_close($conn);
    
}
else{
    $_SESSION["error"]="Your email or password was incorrect. Please try again...:(";
    //echo 'Email or password is incorrect'; //email and password not found in database --> :D
    header('Location: login.php');
    mysqli_close($conn);
}
?>