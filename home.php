<!-- // path http://localhost/php_sql_messenger_app/home.php -->
<?php
require("connection.php"); 
?>
<html>
    <head>
        <title>Messenger</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <div id="main_home">
         <div id="userinfo">
        userinfo</div>
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
            echo "<td>".$row['username']."</td>"; 
            echo "<td>".$row['content']."</td>"; 
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