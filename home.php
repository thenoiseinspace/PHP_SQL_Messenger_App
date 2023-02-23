<!-- // path http://localhost/php_sql_messenger_app/home.php -->
<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:index.php");
}
require("connection.php"); 
// session_start();
?>
<html>
    <head>
        <title>Messenger</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Ubuntu">
        <style>
        h1.a {font-family: "Audiowide", sans-serif;}
        h1.b {font-family: "Ubuntu", sans-serif;}
        </style>
    </head>
<body id="home_body">
    <div id="main_home">
         <div id="userinfo">
                <div id="display_user"> User: 
                    <?php
                        echo $_SESSION["username"];
                    ?>
                </div>
                <div id="display_logout">
                    <a href="Logout.php">Log out</a> 
                </div>
        </div>
        <div>
        <h4 style="font-family: Audiowide; font-size: 40px; padding-top: 0px;">WHISPER</h4>
        </div>
        <div id="msgscreen">
            <?php
         $sql = "SELECT * FROM message";  
         $result=mysqli_query($conn, $sql); 
         echo "<table border='1'>
            <tr>
                <th>username</th>
                <th>message</th>
            </tr>
         ";
         while($row=mysqli_fetch_array($result))
         {
            echo "<tr>";
            echo "<td style='font-size: 20px;'>".$row['username']."</td>"; 
            echo "<td style='font-size: 23px; background-color:grey;'>".$row['content']."</td>"; 
            echo "</tr>";
         }
         echo "</table>";
            ?>
    </div>
    <div id="msgbox">
        <form method="post" action="send.php">
            <textarea name="message" style="width: 100%; border-radius: 5px;" rows="7">Type message...</textarea>
            <button type="submit">Send</button>

        </form>
    </div>


</div>

</body>
</html>