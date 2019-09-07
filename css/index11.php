
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
     
        <a href="../profile/index.php" class="navbar-brand scroll-top logo  animated bounceInRight"><b><i>   TvTracker </i></b></a> </div>
         
 <div id="main-nav" class="collapse navbar-collapse" align="center" style="text-align:center" style="">
  <ul class="nav navbar-nav" id="mainNav" >
   <li class="active" id="firstLink" ><a href="#home" class="scroll-link"><font size="+1"><b></b></font></a></li>
      <li><a href="#home" class="scroll-link">Home</a></li>
      
       <li><a href="#features" class="scroll-link" >Features</a>
        <li><a href="#aboutUs">Gallery</a></li>
       
                </li>
       <li><a href="#team" class="scroll-link">Contact Us</a></li>
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
 <img src="images/header-bg.jpg"  alt="banner" />
 
   <div class="container banner-content">

   <header class="cd-header" data-type="slider-item">

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
   </div></div>
	</header>
	</div>
   </div>
  </section>
<section id="features">

<h2>Track every TV show you watch, automatically .</h2>
<h2><p><strong>To get started, just login, sit back and enjoy.</strong></p></h2>
<h2><p><strong>See what's trending right. Never miss what's on tonight. .</strong></p></h2>
</section>
<section id="aboutUs">
  <iframe src="index2.php" style="height:100%;width:100%;border:none;" scrolling="no" ></iframe>
</section>
<section id="team">



<div class="container" >
  
       <div class="row">
        <div class="col-md-9 col-sm-6 col-xs-6"> 

      </div>
      
 <div class="col-md-3 col-sm-6 col-xs-6"> 

    </div>
    </div>
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
</body>
</html>
