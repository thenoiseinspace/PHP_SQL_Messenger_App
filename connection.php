<?php
$dbname="messenger";
    $conn=new mysqli("localhost", "", $dbname); 

if ($conn->connect_error)
{
    die("Failed connection" .$conn->connect_error); 
}
echo "Connected successfully"; 
musqli_close($conn); 

?>