<?php
include_once 'database.php';
if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $id=$_POST['id'];
    $age=$_POST['age'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql= "INSERT INTO reg_form (name, id, age, username, password)
    VALUES ('$name','$id','$age','$username','$password')";

    if (mysqli_query($conn,$sql)){
        echo"New record created!";
    }
    else {
        echo "ERROR: " .$sql."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>