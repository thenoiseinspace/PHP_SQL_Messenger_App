<?php

require("connection.php"); 

if(isset($_POST['login']))
{
   $username=$_POST['username'];
   $password=$_POST['password'];  

   $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";

   $result=mysqli_query($conn, $sql);
//    he's using no for number here
   $no=mysqli_num_rows($result); 
   if($no==1)
   {
        header("location:home.php?login=success"); 
   }
   else{
        header("location:index.php?login=failed"); 
   }
   mysqli_close($conn); 
}
?>