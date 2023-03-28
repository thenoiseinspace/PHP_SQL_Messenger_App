 <?php
session_start(); 
// include_once "header.php";
?>

<html>
<head>
<title>ChatBox</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Ubuntu">
<style>
h1.a {font-family: "Audiowide", sans-serif;}
h1.b {font-family: "Ubuntu", sans-serif;}
</style>
</head>
<body>

<!-- this chunk is new -->
<!-- <nav>
    <div class="wrapper">
        <a href="index.php"><img src="https://cdn-icons-png.flaticon.com/512/1053/1053209.png" alt="site logo"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="discover.php">About</a></li>
            <li><a href="blog.php">Find blogs</a></li>
            <li><a href="signup.php">Sign up</a></li>
            <li><a href="login.php">Log in</a></li>
        </ul>
    </div>
</nav>  -->

<!-- <div class="wrapper">  -->

<!-- return to original -->

<div id="main">
    <h4 style="font-family: Audiowide; font-size: 40px; padding-top: 0px;">WHISPER</h4>
    <h5 style="font-family: Ubuntu; font-size: 18px; padding-top: 0px;">Manage your messages. Privately.</h5>
    <!-- <img src="icon.png" width="100px"/>  -->
    <br> 
<span style="color:red;">
<?php
if(isset($_GET['login']))
{
    echo "Incorrect username or password, try again!";
}
?>
</span>
<div class="cols">
    <div class="col-left">
        <img src="https://cdn-icons-png.flaticon.com/512/1053/1053209.png" width="100px"/> <br> 
    </div>

    <div class="col-right">

        <table class="table">
            <form method = "post" action="login.php">

            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <button type="submit" name="login" >Log in</button>

            </form>
        </table>
        <table class="table">
            <form method = "post" action="login.php">
            <br>Not a member? Create an account. <br>
            <!-- <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <button class="index-button" type="submit" name="signup">Sign up</button> -->
            <button onclick="window.location.href='signup.php';">Click Here</button>

            </form>
        </table>
    </div>
</div>
</div>

<!-- <div id="footer">
    All rights reserved. Copyright <?php echo date('Y');?>
</div> -->
</body>

<?php ?>
</body>
</html>
