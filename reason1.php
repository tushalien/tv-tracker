<?php 
session_start();
 $link=mysql_connect("localhost","root","9818011390")or die("Can't Connect...");
 mysql_select_db("tv1",$link) or die("Can't Connect to Database...");
$show=$_SESSION['id'];
$user=$_SESSION['user'];

$q = "delete from followed where User_Id=$user and Show_Id=$show;";
mysql_query($q,$link) or die();
//added for testing


?>