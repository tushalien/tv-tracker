<!DOCTYPE HTML>
<html>
<head>
<title>ADMIN-AlienTunes</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
	 $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script> 
</head>

<body>
<?php include("header.php");?>

<div class="content">
	 <div class="container">
		 <div class="slider">
				<ul class="rslides" id="slider1">
				  <li><img src="images/banner2.jpg" alt=""></li>
				  <li><img src="images/banner1.jpg" alt=""></li>
				  <li><img src="images/banner3.jpg" alt=""></li>
				</ul>
		 </div>
	 </div>
</div>

<div class="bottom_content">
	 <div class="container">
		 <div class="sofas">
			 <div class="col-md-6 sofa-grid">
			<a href="addartist.php">	 <img src="images/artist.jpg" alt=""/></a>
				 <h3>ADD A NEW SHOW</h3>
				 <h4><a>ADD NEW SHOWS</a></h4>
			 </div>
			 <div class="col-md-6 sofa-grid">
			<a href="addsong.php">	 <img src="images/song.jpg" alt=""/></a>
				 <h3>ADD A NEW EPISODE</h3>
				 <h4><a>ADD NEW EPISODES</a></h4>
			 </div>
			 <div class="clearfix"></div>
		 </div>
          <div class="sofas">
			 <div class="col-md-4 sofa-grid">
				 <a href="users.php"><img src="images/user.jpg" alt=""/></a>
				 <h3>VIEW USERS</h3>
				 <h4><a href="users.php">VIEW USERS</a></h4>
			 </div>
			 <div class="col-md-4 sofa-grid">
				<a href="messages.php"> <img src="images/request.jpg" alt=""/></a>
				 <h3>VIEW SHOWS FOLLOWED MOST</h3>
				 <h4><a href="messages.php">SHOWS FOLLOWED MOST</a></h4>
			 </div> 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>

<div class="recommendation">
	 <div class="container">
		 <div class="recmnd-head">
			 <h3>NEW RELEASES</h3>
		 </div>
		 <div class="bikes-grids">			 
			 <ul id="flexiselDemo1">
  <?php
$link=mysql_connect("localhost","root","8048963413")or die("Can't Connect...");
mysql_select_db("tv1",$link) or die("Can't Connect to Database...");

$query12="SELECT * FROM shows order by Show_Id desc limit 10; ";
$res12=mysql_query($query12,$link) or die("Can't Execute Query..");
while($row12=mysql_fetch_assoc($res12)){
echo '<li>
	 <a href="#"><img src="../'.$row12['Cover'].'" alt=""/></a>	
	 <h4><a href="#">'.$row12['Name'].'</a></h4>	
	 </li>';
		}?>
   </ul>
<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
	</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
	 </div></div></div>

 <div class="copywrite" align="center" style="height:25px;">
			 <p>Design by AW-Techs</p>
		 </div></div> </div></div>		 
</div>
</body>
</html>