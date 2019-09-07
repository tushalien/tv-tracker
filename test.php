<?php
session_start();
include "connect.php";
if(isset($_SESSION['status']))  {
							$user=$_SESSION['user'];
							$name=$_SESSION['name'];
$email=$_SESSION['email'];}
else{die();}
	$query="SELECT * FROM users WHERE Email = '$email';";
	$res=mysql_query($query);
	$row=mysql_fetch_assoc($res,0);
	$name=$row['Name'];
	$uid=$row['User_Id'];
	$_SESSION['uid']=$uid;
	$cover=$row['Profile_Pic'];
?>
<!doctype html>
<head>
<title>USER-Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title></title>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-1.7.2.min.js"></script>
  <link href="css/s.css" rel="stylesheet">
<link rel="stylesheet" href="sign/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/stylesi.css" />
<link href="font/css/font-awesome.min.css" rel="stylesheet">


<style>
input, select, textarea{
    color: white;
	
}



</style>

</head>

<body >
<header class="header">

  <div class="container" style="height:auto;">
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header" style="text-shadow:#000">
     
        <a href="index.php" class="navbar-brand scroll-top logo  animated bounceInRight"><b><i>   TvTracker </i></b></a> </div>
         
 <div id="main-nav" class="collapse navbar-collapse" align="center" style="text-align:center" style="">
  <ul class="nav navbar-nav" id="mainNav" >
   <li class="active" id="firstLink" ><a href="#home" class="scroll-link"><font size="+1"><b></b></font></a></li>
   <li> <a href="#notifications" class="scroll-link" style="font-size:18px;">Notifications</a>
       </li>
      <li><a href="#shows" class="scroll-link" style="font-size:18px;"><?php $query3="SELECT  Show_id, Followed_On FROM followed WHERE User_id= '$uid';";
	$res3=mysql_query($query3);
	$k=0;
	if(mysql_num_rows($res3) > 0){echo'Shows Followed';}?></a></li>
       <li> <a href="#profile" class="scroll-link" style="font-size:18px;"><?php $query3="SELECT  Show_Id FROM wishlist WHERE User_id= '$uid';";
	$res3=mysql_query($query3);
	$k=0;
	if(mysql_num_rows($res3) > 0){echo'Your Wishlist';}?></a>
       </li>
       
       <li> <a href="#stats" class="scroll-link" style="font-size:18px;"><?php $query3="SELECT  Show_id, Followed_On FROM followed WHERE User_id= '$uid';";
	$res3=mysql_query($query3);
	$k=0;
	if(mysql_num_rows($res3) > 0){echo'Tv Stats';}?></a>
       </li>
       <li> <a href="#recommended" class="scroll-link" style="font-size:18px;">Popular Shows</a>
       </li>
       <li> <a href="#calendar" class="scroll-link" style="font-size:18px;">Calendar</a>
       </li> <li> <a href="logout.php" class="scroll-link" style="font-size:18px;">Logout</a>
       </li>
       
         <li>
             <div class="input-group" style="padding-top:20px;"><form action="search.php" method="POST">
                            <input type="text" width="20px"  placeholder="Search TV Shows" style="background:transparent;  border:1px; color:white;" required name="search" >
       </form>
               </div>
          </li>
	
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  
  <!--/.container--> 
</header>
<!--/.header-->

<section id="home">
 <div class="banner-container">
 <img src="images/463438.jpg"  alt="banner" />
 
   <div class="container banner-content">
 
   <header class="cd-header" data-type="slider-item">
   <?php
if(isset($_SESSION['status']))  {
	$user=$_SESSION['user'];
	$name=$_SESSION['name'];
	echo "<div align='left' style='margin-top:500px;'><center><font size='+4' color='silver' >Good to see you....<br> </font></center></div>";

}

   ?>
	</header>
	</div>
   </div>
  </section>
<section id="notifications">
<?php $c=0;$k=0;$m=0;
  echo'<center>';
	$query9="SELECT Signin_Time FROM users WHERE User_Id = '$uid' ; ";
	$res9=mysql_query($query9);
	$signin_time=mysql_result($res9,0);
	$newDate = date("Y-m-d", strtotime($signin_time));
	$date=date('Y-m-d');
	$query7="SELECT  Show_Id, Followed_On FROM followed WHERE User_id= '$uid';";
	$res7=mysql_query($query7);
	if(mysql_num_rows($res7)){
	while($row=mysql_fetch_assoc($res7,0))
	{ 
		$show_id=$row['Show_Id'];
        $sql="SELECT Episode_Id , Air_Date FROM episodes WHERE Show_Id ='$show_id' AND  Air_Date BETWEEN '$newDate' AND '$date' ";
		$query13="SELECT Name FROM shows WHERE Show_Id = '$show_id';";
		$res13=mysql_query($query13);
		$show_name=mysql_result($res13,0);
	$res8=mysql_query($sql);
	if(mysql_num_rows($res8)){$c=1;if($k==0){echo '<center><h1>You missed </h1></center>';$k=1;}
		while($row7=mysql_fetch_assoc($res8,0))
		{
		   $episode_name=$row7['Episode_Id'];
		   $date=$row7['Air_Date'];
		   $str='Episode &nbsp;:&nbsp;'.$episode_name.'&nbsp; on &nbsp;'.$date;
		     }
		echo '<h3><a href="show.php?id='.$show_id .'" target="_blank" style="color:#E56808;" class="voverlay"> '.$show_name.'</a>&nbsp;&nbsp;&nbsp;<font color="#F35108">'.$str.'</h3>';
	     }}}
		 
	else{echo '<Center><h2 style="color:red;">No new notification</h2></center>';$m=1;}
	if($c == 0 and $m==0){echo '<center><h2 style="color:red;">No new notification</h2></center>';}
		?>

</section>
<section id="shows">
 <?php 
 $query3="SELECT  Show_id, Followed_On FROM followed WHERE User_id= '$uid';";
	$res3=mysql_query($query3);
	$k=0;
	if(mysql_num_rows($res3) > 0){
	echo'<header><center>
								<h1 ><strong><hr></hr>Shows Followed<hr></hr></strong></h1></center>
							</header>

							

							<div class="row">';
			
	
	while($row=mysql_fetch_assoc($res3,0)){
		$show_id=$row['Show_id'];
		$follow_date=$row['Followed_On'];
		$sql="SELECT * FROM shows WHERE Show_Id = '$show_id' ";
		$res2=mysql_query($sql);
		while($row2=mysql_fetch_assoc($res2,0)){
		   $show_name=$row2['Name'];
		   $poster=$row2['Poster'];
		   ?>
           <div class="col-md-3">&nbsp;&nbsp;&nbsp;&nbsp;
<a href="show.php?id=<?php echo $show_id; ?>" class="image fit" target="_blank" style="display:inline-block;"><img src='images/<?php echo $poster; ?>' alt="" name="show_id" style="height:400px;"></a>
							<?php echo	'<header>
											<h3><center>'.$show_name.'</center>
										</header>
									</article>
								</div>';
		  
		}
		}}
		
					echo '		</div>';
 ?> 
</section>
<section id="profile">
<?php 
 $query3="SELECT  Show_Id FROM wishlist WHERE User_id= '$uid';";
	$res3=mysql_query($query3);
	$k=0;
	if(mysql_num_rows($res3) > 0){
	echo'<header><center>
								<h1><strong><hr></hr>Your Wishlist<hr></hr></strong></h1></font></center>
							</header>

							

							<div class="row">';
			
	
	while($row=mysql_fetch_assoc($res3,0)){
		$show_id=$row['Show_Id'];
		
		$sql="SELECT * FROM shows WHERE Show_Id = '$show_id' ";
		$res2=mysql_query($sql);
		while($row2=mysql_fetch_assoc($res2,0)){
		   $show_name=$row2['Name'];
		   $poster=$row2['Poster'];
		   ?>
           <div class="col-md-3">&nbsp;&nbsp;&nbsp;&nbsp;
<a href="show.php?id=<?php echo $show_id; ?>" class="image fit" target="_blank" style="display:inline-block;"><img src='images/<?php echo $poster; ?>' alt="" name="show_id" style="height:400px;"></a>
							<?php echo	'<header>
											<h3><center>'.$show_name.'</center>
										</header>
									</article>
								</div>';
		  
		}
		}}
		
					echo '		</div>';
 ?> 
</section>
<section id="stats" ">
<?php 
$query11="SELECT  Show_id  FROM followed WHERE User_Id= '$uid';";
	                $res11=mysql_query($query11);
					if(mysql_num_rows($res11) > 0){
					echo '<div><center>
								<h1><strong><hr></hr>Your Tv stats<hr></hr></strong></h1></center>
							</div>';?>
                    <table id="showswatched" align="center"><tr><th><font color="#FBFBFB" size="+2">Shows</th><th><font color="#FBFBFB" size="+2">Number of episodes</th><th><font color="#FBFBFB" size="+2">Time spent watching</th> </tr>
	               <?php while($row=mysql_fetch_assoc($res11,0)){
					$show_id=$row['Show_id'];
					
					$sql3="SELECT Name ,Duration from shows WHERE Show_Id='$show_id'";
					$res13=mysql_query($sql3);
					$row13=mysql_fetch_assoc($res13,0);
					$sname=$row13['Name'];
					$duration=$row13['Duration'];
					$sql2="SELECT COUNT( Episode_Id ) FROM episodes WHERE Show_Id ='$show_id' ";
					$res12=mysql_query($sql2);
					$count=mysql_result($res12,0);
					$time=$duration * $count;
					echo '<tr><td><a href="../show/show.php?id='.$show_id .'" target="_blank" style="color:#E56808; font-size:20px;">'.$sname.'</a></td><td>'.$count.'</td><td>'.$time.' Mins</td></tr>';
					
						}
					
					echo'</table>';
					}
		?>
        </section>
        <section id="recommended"><?php
					echo'<header><center>
								<h1><strong><hr></hr>Shows You Might Like<hr></hr></strong></h1></center>
							</header>';
	$types=array("Crime"=>0,"Drama"=>0,"Animation"=>0,"Suspense"=>0,"Comedy"=>0,"Fantasy"=>0,"Adventure"=>0,"Documentary"=>0,"Mystery"=>0,"Science-Fiction"=>0,"Thriller"=>0,"Action"=>0,"Horror"=>0,"Mini-Series"=>0);
		arsort($types);
		$query13="SELECT  Show_id  FROM followed WHERE User_Id= '$uid';";
	                $res13=mysql_query($query13);
					$arr=array();
					$i=0;
					echo '<center><table><tr><th><font color="white" size="+2">Name</th><th><font color="white" size="+2">Ratings </th></tr>';
					while( $row13=mysql_fetch_assoc($res13,0)){$arr[$i]=$row13['Show_id'];$i++;}
  $size=sizeof($types);				    
  $shows_display=array();
  $i=0;
  $j=0;
  $k=0;
  $m=0;
  foreach($types as $x=>$x_value)
		{    $j+=1;
		      if( $j >=10 ){break;}
			$gen=$x;
			$j+=1;
			$query14="SELECT Genre ,Show_Id,Name,IMDB from shows  ORDER BY IMDB DESC";
			$res14=mysql_query($query14);
			while($row14=mysql_fetch_assoc($res14)){
				$gen2=$row14['Genre'];
				$id=$row14['Show_Id'];
				$rating=$row14['IMDB'];
				$n=$row14['Name'];
				
				if(strpos($gen2,$gen) ){
					if ( in_array($id, $arr)){ }	
					else 
						{
						   if ( in_array($n,$shows_display)){}
						   else{
							   $shows_display[$i]=$n;$i+=1;echo '<tr><td><a href="show.php?id='.$id .'" target="_blank" style="color:#E56808; font-size:20px;">'.$n.'</td><td>'.$rating;
						   if($k>=10){break;}$k+=1;}
							}	
				}
					  		
			     }
			}		
						
			
					echo'</table>';
					

?>


</section>
<section id="calendar">
<div><h1><strong><center><hr></hr>Calendar</center><hr></hr></center></strong></h1><br>
    

<?php
if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
$cMonth = $_REQUEST["month"];
$cYear = $_REQUEST["year"];
$show_names=array();
$show_dates=array();
$query19="SELECT  Show_id  FROM followed WHERE User_Id= $uid;";
$res19=mysql_query($query19);
$i=0;$j=0;
$y=$date;
$y2=$cYear.'-'.$cMonth.'-31';
	while($row19=mysql_fetch_assoc($res19,0))
	{   $id1=$row19['Show_id'];
         $show_dates[$id1]='';
		$query20="SELECT Name from shows WHERE Show_Id = '$id1';";
		$res20=mysql_query($query20);
		if(mysql_num_rows($res20) )
		$name=mysql_result($res20,0);
		$show_names[$id1]=$name.'@'.$id1 ;
		$query21="SELECT Episode_Id,Air_Date FROM episodes WHERE Show_Id='$id1' AND Air_Date > '$y' ;";
		$res21=mysql_query($query21);
		while($row21=mysql_fetch_assoc($res21,0))
		   {
			$eid=$row21['Episode_Id'];$air=$row21['Air_Date'];
			$str=$eid."@".$air;
			$show_dates[$id1].=$str.'$';
			  }  
		}
		
$monthNames = array("January", "February", "March", "April", "May", "June", "July", 
"August", "September", "October", "November", "December");
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}
?>


<table width="100%" border="0" cellpadding="2" cellspacing="2">
<tr align="center">
<th colspan="7" align="center"><strong><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="margin-right:500px;color:#F8F2F2;padding:5px;">Previous</a><?php echo $monthNames[$cMonth-1].' '.$cYear; ?><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>" style="margin-left:490px;color:#F8F2F2;padding:5px;">Next</a> </strong> </td>
</tr>
<tr>
<th align="center"  ><strong>S</strong></td>
<th align="center" ><strong>M</strong></td>
<th align="center" ><strong>T</strong></td>
<th align="center" ><strong>W</strong></td>
<th align="center" ><strong>T</strong></td>
<th align="center" ><strong>F</strong></td>
<th align="center" ><strong>S</strong></td>
</tr>
<font color="#C8A9A9">
<?php 
$str="";$temp="";
$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
$maxday = date("t",$timestamp);
$thismonth = getdate ($timestamp);
$startday = $thismonth['wday'];
for ($i=0; $i<($maxday+$startday); $i++) {
	$temp.=$str;
	$str="";
	
    if(($i % 7) == 0 ) echo "<tr>";
    if($i < $startday) echo "<td></td>";
    else {
		$cday=($i - $startday + 1);
		foreach($show_dates as $x=>$val){
			$value1=explode("$",$val);
			foreach($value1 as $va=>$value){
				if($value == ''){}
				else{
			$array=explode("@",$value);
			$date=$array[1];
			$eid=$array[0];
			$array=explode("-",$date);
			$show_name=$show_names[$x];
			$year=$array[0];$month=$array[1];$day=$array[2];
			
			if($year==$cYear && $month==$cMonth && $day==$cday)
			   {$str.=$show_name."@".$eid."@".$date."#";
			     $d=1;
				   } 
			}
		}}
			echo'<font size="+1">';
			if($str=="")
		echo "<td align='center' valign='middle' height='30px' width='180px' style='color:black;'>". ($i - $startday + 1) ."</td>";
		   else{
		echo "<td align='center' valign='middle' height='30px' width='180px' style='background-color:#D8CDCD;'><a  onclick='toggle()' style='color:red;text-decoration:none'>".($i - $startday + 1)."</a></td>";   }
		   }
    if(($i % 7) == 6 ) echo "</tr>";
}


echo'<table width="100%" border="0" cellpadding="2" cellspacing="2" id="info" style="display:none;">';
$array=explode("#",$temp);
$sid="";$name="";$c=0;
	foreach($array as $item=>$item_value)
	{  $i=0;
	$c+=1;
		$array2=explode("@",$item_value);
		foreach ($array2 as $item2=>$value2)
		{
		
		if($i==0)
		$name=$value2;
		if($i==1)
		$sid=$value2;
		if($i==2)
		$eid=$value2;
		if($i==3)
		$air=$value2;
		$i+=1;
		}
		if ($sid=="" or $name ==""){}
		else{
		echo'<tr><td style="width:20%;">'.$c.'</td><td style="width:40%;"><a href="../show/show.php?id='.$sid .'" target="_blank">'.$name.'</td><td style="width:20%;">'.$eid.'</td><td style="width:20%;">'.$air.'</tr>';
		}
		}
	
	
	echo'</table>';

?>
<script>

function toggle(){
	if(document.getElementById('info').style.display == "" || document.getElementById('info').style.display == "block")
	  document.getElementById('info').style.display="none";
	 else
	  document.getElementById('info').style.display="";
	
	
	
	}

</script>
</table>
</td>
</tr>
</table>
   
				</div>
                



</section>



<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2014 | All Rights Reserved -- Site by <a href="facebook.com/awtechs">AW-Techs</a> </div>
   </div>  </div></section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> </div></div>


<script src="js/jquery.min.js" type="text/javascript"></script> 

<script src="js/bootstrap.min.js" type="text/javascript"></script> 

<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
 <script src="sign/index.js"></script>
</body>
</html>
