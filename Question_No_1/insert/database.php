<?php
$servername="localhost";
$username="root";
$password="";
$db="registration_form";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!conn){
    die("Failed: ".sqli_connect_error());
}
?>