<?php
require("configure.php");
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
<?php include("header.php");
?>
<div class="container">
	 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
<div class="registration">
<div class="registration_left">
	<h2>Add a new Song</h2>
	 <div class="registration_form">
		<form id="registration_form" action="process_addsong.php" method="post" enctype="multipart/form-data">  <div>
 <?php
 $sql = "SELECT * FROM shows ORDER BY Name";
try {
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    } catch (Exception $ex) {
      echo($ex->getMessage());}
 ?>
    <label><span><b>SHOW </b></span><br>
     <select name="country"  style="width:250px;" >
   <option value="">Please Select</option>
    <?php foreach ($results as $rs) { ?>
     <option value="<?php echo $rs["Show_Id"]; ?>"><?php echo $rs["Name"]; ?></option>
      <?php } ?>
      </select>
    </label></div>
    

   <div>
   <label>
	<span><b> Episode Id </b> </span><br><input placeholder="Episode Id" type="text" name="epi_id" style="width:260px;" tabindex="1" required ></input></label><br>
</div><div>
   <label>
	<span><b> Name </b> </span><br><input placeholder="Name" type="text" name="name" style="width:260px;" tabindex="1" required ></input></label><br>
</div><div><label>
	<span><b> Info</b> </span><br><input placeholder="Info" type="text" name="info" style="width:260px;" tabindex="1" required ></input></label><br>
</div><div><label>
	<span><b> Air Date </b> </span><br><input placeholder="Air Date" type="date" name="date" style="width:260px;" tabindex="1" required ></input></label><br>
</div><div><label>
	<span><b> Rating </b> </span><br><input placeholder="Rating" type="text" name="rating" style="width:260px;" tabindex="1" required ></input></label><br>
</div><div>
					
  <div><input type="submit" value="Add the Song" id="register-submit" onclick="javascript:return confirm('Are you sure you want to add this song?')"></div>
			
   	</form></div></div>
 <div class="clearfix"></div>
	 </div>
</div>
 <div class="copywrite" align="center" style="height:25px;">
	 <p></p>
</div></div></div></div></div>

</body>
</html>