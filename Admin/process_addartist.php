<?php
if(!empty($_POST))
	{	$msg=array();
if($_FILES['pic']['error']>0)
		$msg[] = "Error uploading file";
		
if(!(strtoupper(substr($_FILES['pic']['name'],-4))==".PNG" || strtoupper(substr($_FILES['pic']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['pic']['name'],-4))==".JPG"))
			$msg[] = "wrong file  type";
			
if(file_exists("../images/pics/".$_FILES['pic']['name']))
			$msg[] = "File already uploaded. Please do not updated with same name";
		
if(!(strtoupper(substr($_FILES['cover']['name'],-4))==".PNG" || strtoupper(substr($_FILES['cover']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['cover']['name'],-4))==".JPG"))
			$msg[] = "wrong file  type";
			
if(file_exists("../images/covers/".$_FILES['cover']['name']))
			$msg[] = "File already uploaded. Please do not updated with same name";

if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			move_uploaded_file($_FILES['pic']['tmp_name'],"../images/pics/".$_FILES['pic']['name']);
			$pic = "images/pics/".$_FILES['pic']['name'];	
			move_uploaded_file($_FILES['cover']['tmp_name'],"../images/covers/".$_FILES['cover']['name']);
			$cover = "images/covers/".$_FILES['cover']['name'];
			$name=$_POST['name'];
			$genre=$_POST['genre'];
			$bio=$_POST['bio'];
			$language=$_POST['language'];
			$firstair=$_POST['firstair'];
			$IMDB=$_POST['imdb'];
			$director=$_POST['director'];
			$network=$_POST['network'];
			$duration=$_POST['duration'];
			$time=$_POST['time'];
			$link=$_POST['link'];
			$cast=$_POST['cast'];
			$status=$_POST['status'];
			$airday=$_POST['airday'];
		
	$link=mysql_connect("localhost","root","8048963413")or die("Can't Connect...");
	mysql_select_db("tv1",$link) or die("Can't Connect to Database...");
			
$query="insert into shows(Poster,Cover,Name,Genre,Info,Language,First_Air,IMDB,Director,Network,Duration,Time,Youtube_Link,Cast,status,Air_Day)
values('$pic','$cover','$name','$genre','$bio','$language','$firstair','$IMDB','$director','$network','$duration','$time','$link','$cast','$status','$airday')";
mysql_query($query,$link) or die($query."Can't Connect to Query...");
header("location:addartist.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	