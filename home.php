<!-- // path http://localhost/php_sql_messenger_app/home.php -->
<?php
require("connection.php"); 
session_start();
?>
<html>
    <head>
        <title>Messenger</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <div id="main_home">
         <div id="userinfo">
        <?php
            echo $_SESSION["username"];
        ?>
        <a href="Logout.php">Log out</a> 
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
            <textarea name="message" col="10" rows="4"></textarea>
            <button type="submit">Send</button>

        </form>
    </div>


</div>

</body>
</html>