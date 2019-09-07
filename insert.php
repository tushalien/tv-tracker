<?php
include "connect.php";
 
 $con = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
   $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

 if($name=="" || $email=="" || $comment==""){
	 echo '<font size="+1" color="red">First fill all the required fields.</font>';}
 else{$sql = "insert into messages (Name, Email,Comments) values ('$name','$email','$comment')";
 
 if(mysqli_query($con, $sql)){
 echo '<font size="+2">Thanks for your request.Your request will be considered soon.</font>';
 } }
?>