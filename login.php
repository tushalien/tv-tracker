<?php 
require("configure.php");
session_start();
$unm=$_POST['unm'];
$pass=($_POST['pass']);
$statement= $DB->prepare("Select * from users where(
Email=:unm and Password=:pass);");
$statement->bindParam(":unm",$unm);
$statement->bindParam(":pass",$pass);
$statement->execute();
 $result = $statement->fetchAll();
 
 if(count($result)== 0) 
 {header("location:index.php?error=1");die();

    }
	$_SESSION=array();
	foreach ($result as $rs){
					$_SESSION['user']=$rs['User_Id'];
					$_SESSION['name']=$rs['Name'];
				
					$_SESSION['email']=$rs['Email'];
				
					$_SESSION['status']=true;}
header("location:test.php");

?>