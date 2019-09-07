<?php 
session_start();
include "connect.php";
 $show=$_SESSION['id'];
$user=$_SESSION['user'];


$q = "INSERT INTO wishlist (User_Id,Show_Id) values('$user','$show');";
mysql_query($q) or die();
//added for testing


?>