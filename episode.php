<?php 
session_start();
include "connect.php";
$id=$_GET['id'];
$season=$_GET['season'];
   $query12="SELECT * FROM `shows` where Show_Id=$id; ";    
$res12=mysql_query($query12) or die("Can't Execute Query..");
$row12=mysql_fetch_assoc($res12);	


	
$name = $row12['Name'];
$poster = $row12['Poster'];
$info = $row12['Info'];
$lang = $row12['Language'];
$cover= $row12['Cover'];

?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php echo $name; ?></title>

  <script src="js/jquery.min.js"></script>
  
 
  <script src="js/jquery-1.7.2.min.js"></script>
    
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
<link href="font/css/font-awesome.min.css" rel="stylesheet">
<link href="css/s.css" rel="stylesheet">
</head>
<title>TvTracker</title>
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
       <li><a href="#aboutUs">Episodes</a></li>
  <li> <?php
if(isset($_SESSION['status']))  {echo '<a href="test.php" class="scroll-link">Your Profile</a>';} ?>
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
    </nav>
  </div>
</header>
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
      <h2><?php echo "Season ".$season; ?></h2> </div>
      
	  	<table width="100%" >
					
                         <thead>
    <tr>
      <th>Episode</th>
      <th>Name</th>
      <th>Description</th>
      <th>Air Date</th>
      <th>Rating</th>
    </tr>
	 </thead><tbody>
  <?php
  $count=1;
 
$epi='s'.$season.'e';
$query="SELECT * FROM episodes WHERE Show_Id='$id' and Episode_Id like '$epi%' ;";
$res=mysql_query($query);
while($row=mysql_fetch_assoc($res,0)){
	echo '<tr>
						<td>'.$count.'
						<td><strong>'.$row['Name'].'</strong>
						<td>'.$row['Info'].'
						<td>'.$row['Air_Date'].'
						<td>'.$row['Rating'].'
						
						</tr>';
					$count++;
}
  
  ?></tbody></table>
    </div>
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

</body>
</html>
