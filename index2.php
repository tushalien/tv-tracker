<!DOCTYPE HTML>
<?php
include "connect.php";

 	$q="SELECT COUNT( Show_Id ) , Show_Id
FROM shows
GROUP BY Show_Id
ORDER BY COUNT( Show_Id ) DESC 
LIMIT 30";
	$res=mysql_query($q) or die("Can't Execute Query...");
	
?>
<html>
	<head>
		<title>SeeFolio Website Template | Home :: w3layouts</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/index.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		  <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		 <!---- start-smoth-scrolling---->
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
	</head>
	<body>
	 
					
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
						
			
			<script>
				$(document).ready(function() {
					$("#owl-demo2").owlCarousel({
						items : 5,
						lazyLoad : false,
						autoPlay : true,
						navigation : true,
						navigationText :  true,
						pagination : false,
					});
				});
			</script>
			<div class="clients">
				<div class="container">
					
					<div id="owl-demo2" class="owl-carousel">
			<?php
					while($row=mysql_fetch_assoc($res))
					{$id=$row['Show_Id'];
				
					
						$query12="SELECT Name,Poster FROM shows where Show_Id=$id; ";
$res12=mysql_query($query12) or die("Can't Execute Query..");
while($row12=mysql_fetch_assoc($res12)){
//$row12= mysql_result($res12,0);

					  echo   '<div class="item">
					      	<div class="client-logo">';
								echo '<a target="_parent" href="show.php?id='.$row['Show_Id'].'"><img src="images/'.$row12['Poster'].'" title="'.$row12['Name'].'" style="height:500px;" /></a>';  
							echo '</div>      	
					      </div>';}
					}
					?>
					       
					<div>
				</div>
            
			</div>
			
		
			
	</body>
</html>

