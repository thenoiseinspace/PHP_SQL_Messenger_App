<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $name=$_POST["email"];
    $name=$_POST["uid"];
    $name=$_POST["pwd"];
    $name=$_POST["pwdrepeat"];

    require_once 'dbh.inc.php'; 
    require_once 'functions.inc.php'; 

} else{
    header("location: ../signup/php"); 
}