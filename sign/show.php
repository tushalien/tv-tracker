<?php 
session_start();
if(isset($_SESSION['status']))  {
	
$link=mysql_connect("localhost","root","8048963413")or die("Can't Connect...");
	mysql_select_db("tv1",$link) or die("Can't Connect to Database...");
	$id=$_GET['id'];
	$_SESSION['id']=$id;
	$user=$_SESSION['user'];
	 $q1="select * from followed where Show_Id=$id and User_Id=$user;";
$res1=mysql_query($q1,$link) or die(" again");
$row1=mysql_fetch_assoc($res1);
if($row1!=""){	$value='UNFOLLOW';}
else{$value='FOLLOW';}
}
else{$value='FOLLOW SHOW';}
							
$link=mysql_connect("localhost","root","8048963413")or die("Can't Connect...");
mysql_select_db("tv1",$link) or die("Can't Connect to Database...");


$id=$_GET['id'];
$_SESSION['id']=$id;
   $query12="SELECT * FROM `shows` where Show_Id=$id; ";    
$res12=mysql_query($query12,$link) or die("Can't Execute Query..");
$row12=mysql_fetch_assoc($res12);	





	
$name = $row12['Name'];
$poster = $row12['Poster'];
$info = $row12['Info'];
$lang = $row12['Language'];
$first = $row12['First_Air']; 
$imdb = $row12['IMDB'];
$network = $row12['Network'];
$director = $row12['Director'];
$duration = $row12['Duration'];
$time = $row12['Time']; 
$genre = $row12['Genre'];
$cast = $row12['Cast'];
$cover = $row12['Cover'];
$youtube = $row12['Youtube_Link']; 
$status = $row12['status'];
$airday = $row12['Air_Day']; 
?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php echo $name; ?></title>

  <script src="js/jquery.min.js"></script>
        <script src="index_videolb/jquery.js" type="text/javascript"></script>
<script src="index_videolb/jquery.tools.min.js" type="text/javascript"></script>
<script src="index_videolb/videolightbox.js" type="text/javascript"></script>
<script src="index_videolb/swfobject.js" type="text/javascript"></script>
 
  <script src="js/jquery-1.7.2.min.js"></script>
      <link href="css/animate.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="index_videolb/overlay-minimal.css"/>
<link rel="stylesheet" href="videolightbox.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="comment.css" />
</head>

<body >
<header class="header">

  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header" style="text-shadow:#000">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="index.php" class="navbar-brand scroll-top logo  animated bounceInRight"><b><i>  TvTracker </i></b></a> </div>
         
 <div id="main-nav" class="collapse navbar-collapse" align="center" style="text-align:center" style="">
  <ul class="nav navbar-nav" id="mainNav" >
   <li class="active" id="firstLink" ><a href="#home" class="scroll-link"><font size="+1"><b><?php echo $name; ?></b></font></a></li>
       <li><a href="#aboutUs">About Show</a></li>

       <li><a href="#contactUs" class="scroll-link">Seasons</a></li>
	     <li> <?php
if(isset($_SESSION['status']))  {echo '<a href="profile/" class="scroll-link">Your Profile</a>';} ?>
       </li>
	      <li>
             <div class="input-group" style="padding-top:25px;"><form action="search.php" method="POST">
                            <input type="text" width="20px"  placeholder="Search TV SHOW" style="background:transparent;
							border:none; color:white;" required name="search" >
       <button style="background:transparent; border:none;"> <img src="images/search_icon.png" ></button></form>
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

<div id="#top"></div>
<section id="home">
 <div class="banner-container"> <img src="images/<?php echo $cover; ?>"  alt="banner" />
   <div class="container banner-content">
    <div class="hero-text animated fadeInDownBig">
   <h1 class="responsive-headline"><FONT size="+7" color="white" ><span><?php echo $name; ?></FONT></span><br/> </h1>
  <a href="#basics" class="arrow-link"> <i class="fa fa-chevron-down"></i> </a> 
  </div> 
   </div>
  </div>
</section>

<section id="aboutUs">
  <div class="container">
    <div class="heading text-center"> 
      <h2><?php echo $name; ?></h2> </div>
	  
	 
  <div class="row feature design">
      <div class="area1 columns right">
       <P> <fonT size="+1">
       <input type="button" class="btn btn-lg btn-primary" id="play" value="<?php echo $value;?>"/>
	   <h2><strong> Airs</strong> <?php echo $time; ?>, <?php echo $airday; ?> on <?php echo $network; ?><br>
	   <strong>Creator :</strong> <?php echo $director; ?><br>
        <strong>Cast :</strong> <?php echo $cast; ?> <br>
        <strong>Genre :</strong><?php echo $genre; ?> <br>
		<strong>Duration :</strong><?php echo $duration; ?> minutes <br>
		
        <strong>IMDB Rating :</strong> <?php echo $imdb; ?> <br>
        <strong>Language :</strong> <?php echo $lang; ?> <br>
        <strong>First Aired :</strong> <?php echo $first; ?><br>
		<strong>Status :</strong> <?php echo $status; ?></h2>
	   
	   
 <strong>Overview</strong><hr> <?php echo $info; ?>  </font>  </P>   <?php 
  $link=substr($youtube,32);

 echo    '<a class="voverlay" href="http://www.youtube.com/v/'.$link.'?autoplay=1&rel=0&enablejsapi=1&playerapiid=ytplayer" title="'.$name.'">Watch Trailer<span></span></a>'; ?></div>
<div class="area2 columns  left"> <img src="images/<?php echo $poster; ?>" alt="" width="400px" height="300px"> </div>
    </div>
    </div>
    </div>
</section>

<section id="contactUs" style="background-color:#FFF">
 <div class="container"  >
     <div class="heading text-center"> 
      <h2><?php echo '<font color="#000000">Seasons aired so far for'; echo $name; ?></font></h2> </div>

    <div class="row feature design">
<div class="row">
    <?php
	$link=mysql_connect("localhost","root","8048963413")or die("Can't Connect...");
mysql_select_db("tv1",$link) or die("Can't Connect to Database...");
$query="SELECT Episode_Id FROM episodes WHERE Show_Id='$id';";
$res=mysql_query($query,$link);
while($row=mysql_fetch_assoc($res,0)){
$str=$row['Episode_Id'];

}
$num_seasons=" ";
$arr=str_split($str);
$i=1;
$pos=strpos($str,"e");

while($i<$pos){
$num_seasons.=$arr[$i];$i+=1;}

$num_seasons=(int)$num_seasons;
$i=1;
while($i <= $num_seasons){
	echo '<div class="col-md-4">
  					<blockquote>	';
  						
  				  	
echo '<a href="episode.php?id='.$id.'&season='.$i.'">Season '.$i.'<span></span></a>';

  				echo	'</blockquote>
  				</div>';
	

$i++;}



?>
 
</div></div>
    </div>
</section>

<section  style="background-color:#fff">

 <div class="container" align="center"  >
      <?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

include "connect.php";
include "comment.class.php";


$comments = array();
$result = mysql_query("SELECT * FROM comments where Show_Id='$id' ORDER BY id ASC");

while($row = mysql_fetch_assoc($result))
{
	$comments[] = new Comment($row);
}
foreach($comments as $c){
	echo '<div align="center">'.$c->markup().'</div>';
}
?><!--
     <div class="heading text-center" id="addCommentContainer" align="center">
	<h2>Add a review</h2>
	<form id="addCommentForm" method="post" action="" style="align-content:center;">
    	<div>
        	<label for="name">Your Name</label>
        	<input type="text" name="name" id="name" />
            
            <label for="email">Your Email</label>
            <input type="text" name="email" id="email" />
      
            
            <label for="body">Comment Body</label>
            <textarea name="body" id="body" cols="20" rows="5"></textarea>
            
            <input type="submit" id="submit" value="Submit" />
        </div>
    </form>
</div>

    </div>
    -->	 <div class="row">
        <div  id="addCommentContainer"><h2>Post a review</h2> </div>	
        <form method="post" action='' id="addCommentForm" role="form" style="width:700px;" >
    
          
              <div class="form-group">
             
              <input type="text" class="form-control" name="name" id="name" required placeholder="Enter name" title="Please enter your name (at least 2 characters)">  </div>
           <div class="form-group">
            
              <input type="email" class="form-control" name="email" id="email" required placeholder="Enter email" title="Please enter a valid email address">  </div>
         <div class="form-group">
  
              <textarea name="body" class="form-control" id="body" cols="3" rows="5" required placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
              <div align="left"><button name="submit" type="submit" value="Submit" class="btn btn-lg btn-primary" >Submit</button></div></div>	
      </form></div></div>
</section>


<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2014 | All Rights Reserved -- Site by <a href="facebook.com/awtechs">AW-Techs</a> </div>
   </div>  </div></section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> </div></div>


<script src="js/jquery.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="script.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script> 

<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
<script>
$('#play').click(function() {
	
   if ($(this).val() == "FOLLOW") {
	   $("input:button").val("Please Wait..");
	   jQuery.ajax({
       type: "POST",
       url: "reason.php",
       cache: false,
       success: function(response)
       {
         alert("Yeahh, You followed the show.");
		 $("input:button").val("UNFOLLOW");
       }
	    
     });
      
   }
   else if ($(this).val() == "UNFOLLOW"){
	   $("input:button").val("Please Wait..");
	   jQuery.ajax({
       type: "POST",
       url: "reason1.php",
       cache: false,
       success: function(response)
       {
         alert("Oh!! you unfollowed the show.");
		 $("input:button").val("FOLLOW");
       }
	    
     });
   }
   else
	   
   alert("You must be logged in to follow the show.");
    
});
$('#wishlist').click(function() {
	
   if ($(this).val() == "Add to wishlist") {
	   $('#wishlist').val("Please Wait..");
	   jQuery.ajax({
       type: "POST",
       url: "wishlist.php",
       cache: false,
       success: function(response)
       {
         alert("Show added to wishlist");
		$('#wishlist').val("Remove From Wishlist");
       }
	    
     });
       
   }
   else if ($(this).val() == "Remove From Wishlist"){
	  $('#wishlist').val("Please Wait..");
	   jQuery.ajax({
       type: "POST",
       url: "wishlist1.php",
       cache: false,
       success: function(response)
       {
         alert("Show removed from wishlist");
$('#wishlist').val("Add to wishlist");
       }
	    
     });
   }
   else
	   
   alert("You must be logged in to follow the show.");
    
});

</script>

</body>
</html>
