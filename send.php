<?php
require("connection.php"); 
session_start();

$username=$_SESSION["username"]; 
$msg=$_POST['message']; 
$sql="INSERT INTO message(username, content) VALUES ('$username', '$msg' )"; 
$result=mysqli_query($conn, $sql); 
if($result)
{
    header("location:home.php?send=success");
} else{
    header("location:home.php?send=failed");
}

mysqli_close($conn);
?>