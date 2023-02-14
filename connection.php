<?php
$dbname="messenger";
//the empty string is in place of the password, since we did not set one
    $conn=new mysqli("localhost", "root", "", $dbname); 

if ($conn->connect_error)
{
    die("Failed connection" .$conn->connect_error); 
}
// echo "Connected successfully"; 

?>