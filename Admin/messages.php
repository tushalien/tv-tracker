<?php
$link=mysql_connect("localhost","root","8048963413")or die("Can't Connect...");
mysql_select_db("music",$link) or die("Can't Connect to Database...");
$q="select * from messages";
$res=mysql_query($q,$link) or die("Can't Execute Query...");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ADMIN-AlienTunes</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" /> 
</head>
<body>
<?php include("header.php");?>
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">View Mesages</li>
		 </ol>
<?php
if(isset($_GET['ok']))							
{	echo '<script type="text/javascript">alert("The message was deleted successfully.");</script>';		}									
?>											
	<table border='1' WIDTH='100%' background="images/bgw.jpg"><font color="#FFFFFF">
						<tr>
								<td WIDTH='10%'><b><u>QUERY NO.</u></b>
								<TD WIDTH='20%'><b><u>NAME</u></b>
								<TD WIDTH='50%'><b><u>MESSAGE</u></b>
                                <TD WIDTH='50%'><b><u>TIME</u></b>
								<TD WIDTH='25%'><b><u>DELETE</u></b>
							
						</tr>
<?php
			$count=1;
			while($row=mysql_fetch_assoc($res))
			{echo '<tr>
						<td>'.$count.'
						<td>'.$row['Name'].'
						<td>'.$row['Message'].'
						<td>'.$row['Time'].'
						<td><a href="process_deletemessage.php?id='.$row['Id'].'"><img src="images/drop.png" ></a>
						</tr>';
					$count++;
						}
?>
</font>
</TABLE>
<div class="clearfix"></div>
	 </div>
	 <div> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br></div>
</div>
</div>

</body>
</html>