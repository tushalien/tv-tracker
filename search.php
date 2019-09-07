 <?php
session_start();							
	include "connect.php";						
	if(isset($_SESSION['status']))
	{if($_SESSION['user']==null){header("location:error.html");	}}
	else header("location:error.html");	
		$search=$_POST['search'];
		  $search = stripslashes($search);
  $search = htmlspecialchars($search);
		
	$query11="select * from shows where Name like '%$search%'";
	$res11=mysql_query($query11);
	$num_rows = mysql_num_rows($res11);
	?>

<!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Tv Tracker-SEARCH</title>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
<link href="font/css/font-awesome.min.css" rel="stylesheet">

</head>

<body >
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="index.php" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i>Tv Tracker</i></b></a> </div>

      <div id="main-nav" class="collapse navbar-collapse" align="center" style="text-align:center" style="">
        <ul class="nav navbar-nav" id="mainNav" >
     	
       	<li><a href="#work" class="scroll-link">Search Results</a></li>
        <li><a href="#contactUs" class="scroll-link">Didn't find your Show?</a></li>
		  <li> <?php
if(isset($_SESSION['status']))  {echo '<a href="test.php" class="scroll-link">Your Profile</a>';} ?>
       </li>
         <li>
         <div class="input-group" style="padding-top:22px;"><form action="search.php" method="POST">
         <input type="text" width="20px"  placeholder="Search TV Shows" style="background:transparent;  border:none; color:white;" required name="search" >
       <button style="background:transparent; border:none;">    <img src="images/search_icon.png" ></button></form></div>             
          </li>
  		 </ul>
      </div> </nav></div>
</header>

<div id="#top"></div>

<section id="work" id="aboutUs" class="page-section page" >
  <div class="container text-center" >
    <div class="heading">
    <br><br>
      <h2>Your search keyword matched <span> <?php echo $num_rows; ?></span> TV Shows.</h2>
<BR><br>
	
 <div class="row">  
<?php
if ($num_rows==0){
		echo '<font size="+1" color="black;">Sorry, no shows were found. Try searching using another keyword.<br>
	</font>';}
while($row11=mysql_fetch_assoc($res11)){
	echo  '<div class="col-md-4">
   
    <a class="voverlay" href="show.php?id='.$row11['Show_Id'].'" title="'.$row11['Name'].'"><img src="images/'.$row11['Poster'].'" style="border:double;height:400px;" /><span></span></a>
  <div align="center"><font size="+3">'.$row11['Name'].'<br><bR> </font></div>
    </div>'; } ?>
 </div></div></div>
</section>
<section id="contactUs"  style="background-image:url(images/table.jpeg)">
<div class="container"  >
      <div class="row">
        <div class="heading text-center"> 
         <br>
          <font size="+3">Contact Me</font>
          <p>Got a suggestion or didn't find a show.. Just send us a message.</p></div></div>
    	 <div class="row">
        <div class="col-md-9 col-sm-6 col-xs-6"> 
        <form method="post" action='insert.php' id="contactfrm" role="form" >
          <div class="col-sm-12">
          
            <div  class="form-group" id="result"></div>
              <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" required placeholder="Enter name" title="Please enter your name (at least 2 characters)">  </div>
           <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" required placeholder="Enter email" title="Please enter a valid email address">  </div>
         <div class="form-group">
              <label for="comments">Comments</label>
              <textarea name="comment" class="form-control" id="comment" cols="3" rows="5" required placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
              <button name="submit" type="submit" class="btn btn-lg btn-primary" id="insert">Submit</button> </div> </div>
      </form></div>
      
  
          
   <?php $handle = fopen("counter.txt", "r");  
 $counter = (int ) fread($handle,20); fclose ($handle); $counter++; 
// echo' <div align="right" style="padding-right:20px;" ><strong> Site Hits:'. $counter . ' </strong></div> ' ; 
 $handle = fopen("counter.txt", "w" ); fwrite($handle,$counter) ; fclose ($handle) ;  ?>
</section>

<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2014 | All Rights Reserved -- Site by <a href="http://facebook.com/awtechs">Alien-Worm Techs</a> </div></div></div>
</section>
<script>
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a></div>
window.onblur = function () { document.title = 'Are you still here ?'; }
window.onfocus = function () { document.title = 'Tv Tracker-HOME'; }
</script>
  
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script> 


<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script type="text/javascript"> 
 $('#contactfrm').submit(function(){
 return false;
});
 $('#insert').click(function(){
 $.post( 
 $('#contactfrm').attr('action'),
 $('#contactfrm :input').serializeArray(),
 function(result){
 $('#result').html(result);
 }
 );
});
</script>
</body>
</html>
