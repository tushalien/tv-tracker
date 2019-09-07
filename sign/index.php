<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>AlienTunes-LOGIN</title>
    <link rel="stylesheet" href="style.css">  
  </head>
<body>
  
<div align="left" style="padding-left:20px; padding-top:10px; ">
<a href="index.php">
<b><font color="#lab188" size="+3">AlienTunes</font></b></a>
</div>       <?php
	  	if(isset($_GET['user']))
			{
			echo '<script type="text/javascript">alert("User name already exists.Choose a different user name.");</script>';	}								
		if(isset($_GET['mail']))
			{
			echo '<script type="text/javascript">alert("Email already exists.Try to login or signup with a different email-id.");</script>';	}
		if(isset($_GET['ok']))
			{echo '<script type="text/javascript">alert("You are successfully registerd,Please login to continue.");</script>';	}		
		if(isset($_GET['error']))
			{echo '<script type="text/javascript">alert("Username or Password is wrong. Please try again.");</script>';		}	?>									
	
<div class="form">
    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
 <div class="tab-content">
  	<div id="signup"> 
    <h1>Sign Up for Free</h1>
    <form action="action.php" method="post" onsubmit="return validate();" >
     <div class="top-row">
    <div class="field-wrap">
      <label>Full Name<span class="req">*</span>  </label>
    <input type="text" required autocomplete="off" name="fullname"  id="fullname" />  </div>
          
  <div class="field-wrap">
   <label> User Name<span class="req">*</span></label>
   <input type="text"required autocomplete="off" name="username" id="username"/></div></div>
      
   <div class="field-wrap">
  <label>Email Address<span class="req">*</span>  </label>
  <input type="email"required autocomplete="off" name="email" id="email"/> </div>
         
  <div class="field-wrap">
    <label>Set A Password<span class="req">*</span></label>
    <input type="password"required autocomplete="off" name="pass" id="pass"/> </div>
       
 <button type="submit"  class="button button-block"/>Get Started</button>
  </form> </div>
        
  <div id="login">   
     <h1>Welcome Back!</h1>
<form action="login.php" method="post">
    <div class="field-wrap">
      <label>UserName<span class="req">*</span></label>
         <input type="text"required autocomplete="off" name="unm"/> </div>
         
    <div class="field-wrap">
      <label>Password<span class="req">*</span> </label>
   <input type="password"required autocomplete="off" name="pass"/> </div>
       <p class="forgot"><a href="#">Forgot Password?</a></p>
 <button type="submit" class="button button-block"/>Log In</button>
       </form>
<div><br><br><br><br></div>
  </div>
   </div>
   </div>
 <script src='jquery.min.js'></script>
 <script src="index.js"></script>
 
</body>
</html>
