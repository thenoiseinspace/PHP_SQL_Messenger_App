<!-- <?php
// session_start();
// require("connection.php"); 

// if(isset($_POST['signup']))
// {
//    $username=$_POST['username'];
//    $password=$_POST['password'];  

//    $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";

//    $result=mysqli_query($conn, $sql);
// //    he's using no for number here
//    $no=mysqli_num_rows($result); 
//    if($no==1)
//    {
//         $_SESSION["username"]=$username; 
//         header("location:home.php?login=success"); 
//    }
//    else{
//         header("location:index.php?login=failed"); 
//    }
//    mysqli_close($conn); 
// }
?> -->

<!-- pulling this from second tutorial, Dani Krossing -->

<?php
   include_once 'header.php';
?>

<div id="main">
   <div id="nested div">
<section class="signup-form">
   <h2>Sign Up</h2>
   <div class="signup-form-form">
      <form action="includes/signup.inc.php" method="post">
         <!-- using post so sensitive data doesnt appear in url -->
         <input type="text" name="name" placeholder="Full name">
         <input type="text" name="email" placeholder="Email">
         <input type="text" name="uid" placeholder="Username">
         <input type="password" name="pwd" placeholder="Password">
         <input type="password" name="pwdrepeat" placeholder="Retype password">
         <button type="submit" name="submit">Sign up</button>
      </form>
   </div>
</section> 
</div>
</div>

<?php