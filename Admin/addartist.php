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
		  <li class="active">Add Artist</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>Add a new Artist</h2>
   <div class="registration_form">
	<form id="registration_form" action="process_addartist.php" method="post" enctype="multipart/form-data">  <div>

</label>
 </div>
    
 <div>
<label>
<span><b> NAME </b> </span><input placeholder="SHOW" type="text" name="name" size="35" tabindex="1" required ></input>
</label></div>
				
<div>
<label><span><b> POSTER  </b> </span>
<span><input type='file' name='pic' size='35' required></span></label></div>
					
 <div>
<label><span><b> COVER </b> </span>
<span><input type='file' size='35' name="cover" required></span></label></div>
						
 <div><label><span><b> ABOUT SHOW </b> </span><br>
  <textarea cols="40" rows="6" name='bio'  ></textarea></label></div>
   <div>
<label>
<span><b> LANGUAGE </b> </span><input placeholder="LANGUAGE" type="text" name="language" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> FIRST_AIR(YYYY-MM-DD) </b> </span><input placeholder="FIRST_AIR" type="text" name="firstair" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> IMDB </b> </span><input  type="text" name="imdb" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> DIRECTOR </b> </span><input type="text" name="director" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> NETWORK </b> </span><input  type="text" name="network" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> DURATION </b> </span><input  type="text" name="duration" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> TIME </b> </span><input type="text" name="time" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> GENRE </b> </span><input  type="text" name="genre" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> CAST </b> </span><input  type="text" name="cast" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> YOUTUBE_LINK </b> </span><input type="text" name="link" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> STATUS </b> </span><input  type="text" name="status" size="35" tabindex="1" required ></input>
</label></div>
 <div>
<label>
<span><b> AIR_DAY </b> </span><input  type="text" name="airday" size="35" tabindex="1" required ></input>
</label></div>
                    
 <div><input type="submit" value="Add the Artist" id="register-submit" onclick="javascript:return confirm('Are you sure you want to add this artist?')">	</div>
					
</form>
	 </div>
		 </div>
		
		 <div class="clearfix"></div>
	 </div>
</div>
		 <div class="copywrite" align="center" style="height:25px;">
			 <p>Copyright © 2015 Furnyish Store All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		 </div>			 
		 </div>
	 </div>
</div>
</div>

</body>
</html>