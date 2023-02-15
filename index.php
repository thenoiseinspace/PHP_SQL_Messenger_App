<?php
session_start(); 
?>
<html>
<head>
<title>ChatBox</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="main">
    <br><br><br>
    <h4>Manage your team messages</h4>
    <img src="icon.png" width="100px"/> <br> 
<span style="color:red;">
<?php
if(isset($_GET['login']))
{
    echo "Incorrect username or password, try again!";
}
?>
</span>

<table>
    <form method = "post" action="login.php">

    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit" name="login">Log in</button>

    </form>
</table>
</div>

<div id="footer">
    All rights reserved. Copyright<?php echo date('Y');?>
</div>
</body>

<?php ?>
</body>
</html>
