<?php
require("configure.php");
session_start();
$user=$_SESSION['user'];
$query="update users set Signin_Time = CURRENT_TIMESTAMP where User_Id=$user ;";
	$res=mysql_query($query);
	session_destroy();
	header('location:index.php');?>