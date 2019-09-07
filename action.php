<?php
function validate($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
include "connect.php";
	$fnm=$_POST['name'];
	$pass=validate($_POST['pass']);
	$email=validate($_POST['email']);
	$fnm=validate($fnm);
	$q="select * from users where Email='$email'";
	$res=mysql_query($q) or die("try again");
	$row=mysql_fetch_assoc($res);
	if($row!=""){	header("location:index.php?mail=1");die();}
	
	
	$query="insert into users(Name,Email,Password)
	values('$fnm','$email','$pass')";
	
	mysql_query($query,$link) or die("Can't Execute Query...");
	header("location:index.php?ok=1");
?>