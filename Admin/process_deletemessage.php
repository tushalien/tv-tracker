<?php
$link=mysql_connect("localhost","root","8048963413")or die("Can't Connect...");
mysql_select_db("music",$link) or die("Can't Connect to Database...");
		
$query="delete from messages where Id =".$_GET['id'];
mysql_query($query,$link) or die("can't Execute...");
header("location:messages.php?ok=1");
?>