<?php
$link=mysql_connect("localhost","root","8048963413")or die("Can't Connect...");
mysql_select_db("tv1",$link) or die("Can't Connect to Database...");
 	$q="select * from users";
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
		  <li class="active">View Users</li>
		 </ol>
	<table border='1' WIDTH='100%' background="images/bgw.jpg"><font color="#FFFFFF">
		<tr>
		<td WIDTH='5%'><b><u>ID.</u></b>
		<TD WIDTH='15%'><b><u>Full Name</u></b>
        <TD WIDTH='25%'><b><u>Email</u></b>
		<TD WIDTH='15%'><b><u>Password</u></b>
        <TD WIDTH='50%'><b><u>Time</u></b>
		</tr>
<?php
$count=1;
while($row=mysql_fetch_assoc($res))
{
echo '<tr>
	<td>'.$count.'
	<td>'.$row['Name'].'
	<td>'.$row['Email'].'
	<td>'.$row['Password'].'
	<td>'.$row['Signin_Time'].'							
	</tr>';
	$count++;}
?>
</font>
	</TABLE>			

 <div class="clearfix"></div>
	 </div>
	 <div> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br></div>
</div>
</div>

</body>
</html>