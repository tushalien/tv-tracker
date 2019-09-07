<?php 
session_start();
 include "connect.php";
$show=$_SESSION['id'];
$user=$_SESSION['user'];

$q = "delete from wishlist where User_Id=$user and Show_Id=$show;";
mysql_query($q) or die();
//added for testing


?>