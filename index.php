<?php
session_start();
include "connect.php";
?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title></title>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="sign/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
<link href="font/css/font-awesome.min.css" rel="stylesheet">


<style>
input, select, textarea{
    color: white;
	
}



</style>

</head>
<script>
 function al(){
	 sweetAlert("Oops...", "Something went wrong!", "error");
	 
	 } 
	 function login(){
		 document.getElementById('intlogin').style.display="block";
	      document.getElementById('intlogin').style.marginTop="30px";		
		 document.getElementById('intsignup').style.display="none";
		 }
	 function signup(){
		 document.getElementById('intsignup').style.display="block";
	      document.getElementById('intlogin').style.marginTop="30px";
		  document.getElementById('intlogin').style.display="none";		
		 
		 }	 
</script>
<body >
<header class="header">

  <div class="container" style="height:auto;">
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header" style="text-shadow:#000">
     
        <a href="index.php" class="navbar-brand scroll-top logo  animated bounceInRight"><b><i>   TvTracker </i></b></a> </div>
         
 <div id="main-nav" class="collapse navbar-collapse" align="center" style="text-align:center" style="">
  <ul class="nav navbar-nav" id="mainNav" >
   <li class="active" id="firstLink" ><a href="#home" class="scroll-link"><font size="+1"><b></b></font></a></li>
      <li><a href="#home" class="scroll-link">Home</a></li>
      <li> <?php
if(isset($_SESSION['status']))  {echo '<a href="test.php" class="scroll-link">Your Profile</a>';} ?>
       </li>
       <li><a href="#features" class="scroll-link" >Features</a>
        <li><a href="#aboutUs">Gallery</a></li>
       
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
<?php
	  									
		if(isset($_GET['mail']))
			{
			echo '<script type="text/javascript">alert("Email already exists.Try to login or signup with a different email-id.");</script>';	}
		if(isset($_GET['ok']))
			{echo '<script type="text/javascript">alert("You are successfully registerd,Please login to continue.");</script>';	}		
		if(isset($_GET['error']))
			{echo '<script type="text/javascript">alert("Username or Password is wrong. Please try again.");</script>';		}	?>	

<section id="home">
 <div class="banner-container">
 <?php if(isset($_SESSION['status']))  {echo'<img src="images/463438.jpg"  alt="banner" />';}
   else{echo'
 <img src="images/abc.jpg"  alt="banner" />';}?>
   
   <div class="container banner-content">
 
   <header class="cd-header" data-type="slider-item">
 <?php
if(isset($_SESSION['status']))  {
	$user=$_SESSION['user'];
	$name=$_SESSION['name'];

}
else{echo'
        <div class="form" id="form" style="float:left;" >
    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
 <div class="tab-content">
  	<div id="signup"> 
    
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
     
<form action="login.php" method="post">
    <div class="field-wrap">
      <label>UserName<span class="req">*</span></label>
         <input type="text"required autocomplete="off" name="unm"/> </div>
         
    <div class="field-wrap">
      <label>Password<span class="req">*</span> </label>
   <input type="password"required autocomplete="off" name="pass"/> </div>
   <br>
 <button type="submit" class="button button-block"/>Log In</button><br><br>
       </form>
<div></div>
  </div>
   </div>
   </div></div>';}?>
	</header>
	</div>
   </div>
  </section>
<section id="features" style=""><center>
<div class="content-top" id="about"><br>
	 		<h1 style="color:red;"><strong>Easy & Organised</strong></h1>
	 		<h3  style="color:brown;">This is Why You Will Use it </h3><br><br>
	 		<div class="row">
				<div class="col-md-3" >
					<img src="images/icon1.png" alt="" width=120px height=120px/>
				    <div class="desc">
						<h3 style="color:red;">Review </h3>
						<p style="color:red;font-size:16px;">Review your favourite shows</p>
					</div>
				</div>
				<div class="col-md-3">
					<img src="images/icon2.jpg" alt="" width=120px height=120px/>
				    <div class="desc">
						<h3 style="color:red;">Search</h3>
						<p style="color:red;font-size:16px;">For popular shows<br>On The Go !</p>
					</div>
				</div
				><div class="col-md-3">
					<img src="images/icon3.png" alt="" width=120px height=120px/>
				    <div class="desc">
						<h3 style="color:red;">Notifications</h3>
						<p style="color:red;font-size:16px;">Stay updated with<br>showtimes</p>
					</div>
				</div>
                <div class="col-md-3" >
					<img src="images/icon4.png" width=120px height=120px/>
				    <div class="desc">
						<h3 style="color:red;">Trailer</h3>
						<p style="color:red;font-size:16px;">To spark up your <br> interest in the show</p>
					</div>
				</div>
				<div class="clear"></div>
			</div>
</section>
<section id="aboutUs">
  <iframe src="index2.php" style="height:100%;width:100%;border:none;" scrolling="no" ></iframe>
</section>
<section id="contact" style="background-image:url(images/table.jpeg)">
<div class="container"  >
      <div class="row">
        <div class="heading text-center"> 
         <br>
          <font size="+3" color="white">Contact Us</font>
          <p><font color="white">Got a suggestion or didn't find a show.. Just send us a message.</font></p></div></div>
    	 <div class="row">
        <div class="col-md-9 col-sm-6 col-xs-6"> 
        <form method="post" action='insert.php' id="contactfrm" role="form" >
          <div class="col-sm-12">
          
            <div  class="form-group" id="result"></div>
              <div class="form-group">
              <label for="name"></label>
              <input type="text" class="form-control" name="name" id="name" required placeholder="Enter name" title="Please enter your name (at least 2 characters)">  </div>
           <div class="form-group">
              <label for="email"></label>
              <input type="email" class="form-control" name="email" id="email" required placeholder="Enter email" title="Please enter a valid email address">  </div>
         <div class="form-group">
              <label for="comments"></label>
              <textarea name="comment" class="form-control" id="comment" cols="3" rows="5" required placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
              <button name="submit" type="submit" class="btn btn-lg btn-primary" id="insert">Submit</button> </div> </div>
      </form></div>
      
  
          
  


</section>



<section class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center"> Copyright 2015 | All Rights Reserved -- Site by <a href="http://tushalien.blogspot.com">Tushar Agrawal And Abhishek Chaudhary</a> </div>
   </div>  </div></section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> </div></div>


<script src="js/jquery.min.js" type="text/javascript"></script> 

<script src="js/bootstrap.min.js" type="text/javascript"></script> 

<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script> 
 <script src="sign/index.js"></script>
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
