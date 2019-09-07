<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
include "connect.php";
include "comment.class.php";
$id=$_SESSION['id'];

$arr = array();
$validates = Comment::validate($arr);

if($validates)
{
	
	mysql_query("	INSERT INTO comments(Show_Id,name,email,body)
					VALUES ('".$id."',
						'".$arr['name']."',
						'".$arr['email']."',
						'".$arr['body']."'
					)");
	
	$arr['dt'] = date('r',time());
	$arr['id'] = mysql_insert_id();
	$arr = array_map('stripslashes',$arr);
	
	$insertedComment = new Comment($arr);

	echo json_encode(array('status'=>1,'html'=>$insertedComment->markup()));

}
else
{
	echo '{"status":0,"errors":'.json_encode($arr).'}';
}

?>