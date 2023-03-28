<?php
session_start();
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
        $_SESSION["username"]=$username; 
        header("location:home.php?login=success"); 
   }
   else{
        header("location:index.php?login=failed"); 
   }
   mysqli_close($conn); 
}
?>

<!-- ////separate version from Dani Krossing/// -->
<!-- <?php
//    include_once 'header.php'; 
// ?>

<section class="signup-form">
   <h2> Log in</h2>
   <div class="signup-form-form">
         <form action="includes/login.inc.php" method="post">
            <input type="text" name="name" placeholder="Username/email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Log in</button>
         </form>
   </div>
</section>

<?php
   include_once 'footer.php';
   ?> -->




