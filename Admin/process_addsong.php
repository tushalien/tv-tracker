<?php
 


			$show=$_POST['country'];
			$epi=$_POST['epi_id'];
			$name=$_POST['name'];
			$info=$_POST['info'];
			$date=$_POST['date'];
			$rating=$_POST['rating'];

$link=mysql_connect("localhost","root","8048963413")or die("Can't Connect...");
mysql_select_db("tv1",$link) or die("Can't Connect to Database...");
			
$query="insert into episodes(Show_Id,Episode_Id,Name,Info,Air_date,Rating)
		values($show,'$epi','$name','$info','$date','$rating')";
mysql_query($query,$link) or die($query."Can't Connect to Query...");


?>
	
	