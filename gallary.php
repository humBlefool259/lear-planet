<?php
session_start();
include_once("connection.php");
if(isset($_POST['login']))
{
$username = $_POST['login_username'];
$password = $_POST['login_password'];
$sql = "select * from child_registration where username = '$username'";
$result = mysql_query($sql);
$raw = mysql_fetch_array($result);
if((!$raw['verify']=='yes'))
{
$msg = '<h5 style="color:red">Please Verify your email</h5>';
echo '<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
                    <script>
                   $(document).ready(function(){
					openpopup("popup1");
				   });
                    </script>'; 
}
else if(($raw['username']==$username)&&($raw['password']==$password))
{
$_SESSION['ID'] = $raw['id'];
$_SESSION['child_name'] = $raw['child_name'];
$_SESSION['username'] = $raw['username'];
$_SESSION['date'] = $raw['date'];
$_SESSION['other_specific_services'] = $raw['other_specific_services'];
header("Location: dashboard/dashboard.php");
}
else 
{
 $msg = '<h5 style="color:red">wrong username or password</h5>';
                    echo '<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
                    <script>
                   $(document).ready(function(){
					openpopup("popup1");
				   });
                    </script>'; 
}
}
?>


<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en-gb" class="no-js"> <!--<![endif]-->
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>My Learning Planet- Image Gallary</title>
<meta name="description" content="">
<meta name="author" content="My Learning Planet">
<meta name="dc.language" content="en">
<meta name="geo.region" content="IN-HR" />
<meta name="geo.placename" content="Gurgaon" />
<meta name="geo.position" content="28.459497;77.026638" />
<meta name="ICBM" content="28.459497, 77.026638" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="style.css" rel="stylesheet" type="text/css">
<link href="css/shortcodes.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/shortcodes.css" rel="stylesheet" type="text/css">
<!--prettyPhoto-->
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />   
<!--[if IE 7]>
<link href="css/font-awesome-ie7.css" rel="stylesheet" type="text/css">
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
<!--jquery-->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--popup1 start-->


<script language="javascript"> 
function openpopup(id){ 
      //Calculate Page width and height 
      var pageWidth = window.innerWidth; 
      var pageHeight = window.innerHeight; 
      if (typeof pageWidth != "number"){ 
      if (document.compatMode == "CSS1Compat"){ 
            pageWidth = document.documentElement.clientWidth; 
            pageHeight = document.documentElement.clientHeight; 
      } else { 
            pageWidth = document.body.clientWidth; 
            pageHeight = document.body.clientHeight; 
      } 
      }  
      //Make the background div tag visible... 
      var divbg = document.getElementById('bg'); 
      divbg.style.visibility = "visible"; 
        
      var divobj = document.getElementById(id); 
      divobj.style.visibility = "visible"; 
      if (navigator.appName=="Microsoft Internet Explorer") 
      computedStyle = divobj.currentStyle; 
      else computedStyle = document.defaultView.getComputedStyle(divobj, null); 
      //Get Div width and height from StyleSheet 
      var divWidth = computedStyle.width.replace('px', ''); 
      var divHeight = computedStyle.height.replace('px', ''); 
      var divLeft = (pageWidth - divWidth) / 2; 
      var divTop = (pageHeight - divHeight) / 2; 
      //Set Left and top coordinates for the div tag 
      divobj.style.left = divLeft + "px"; 
      divobj.style.top = divTop + "px"; 
      //Put a Close button for closing the popped up Div tag 
      if(divobj.innerHTML.indexOf("closepopup('" + id +"')") < 0 ) 
      divobj.innerHTML = "<a href=\"#\" onclick=\"closepopup('" + id +"')\"><span class=\"close_button\">X</span></a>" + divobj.innerHTML; 
} 
function closepopup(id){ 
      var divbg = document.getElementById('bg'); 
      divbg.style.visibility = "hidden"; 
      var divobj = document.getElementById(id); 
      divobj.style.visibility = "hidden"; 
} 
</script>
<!--popup1 end-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- start logout flip script-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<meta name="google-site-verification" content="GF_YQkSHiTZxggdKSymppWZO2ZI5H3bRNgkT1dSl2Dc" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58838180-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- end logout flip script-->
</head>
<body>
	<!--wrapper starts-->
    <div class="wrapper">
        <!--header starts-->
        <header>
	  
            <div class="container">
                <div class="logo">
                    <a href="index.php" title="My Learning Planet"><img src="images/my_learning_planet.png" alt="My Learning Planet" title="My Learning Planet"></a>
                </div>
		 
                <div class="contact-details">
                    
                    <p class="phone-no">
                        <i>0124-438-2633</i>
                        <span class="fa fa-phone"></span>
                	</p>
<p class="phone-no">
                        <i>+91 989-988-8185</i>
                        <span class="fa fa-phone"></span>
                	</p>
<p class="mail">
                        <a href="#">contact@mylearningplanet.in</a>
                        <span class="fa fa-envelope"></span>
					</p> 					
                </div> 
            </div>
            <!--menu-container starts-->
            <div id="menu-container">
                <div class="container">
                    <!--nav starts-->
                    <nav id="main-menu">
                    	<div class="dt-menu-toggle" id="dt-menu-toggle">Menu<span class="dt-menu-toggle-icon"></span></div>
                        <ul id="menu-main-menu" class="menu">
                            <li class=" menu-item-simple-parent menu-item-depth-0 red"> <a href="index.php"> Home </a> 
                                           
                            </li>
                            
                            
                           
                            <li class="mustard"> <a href="about.php"> About us </a> </li>
                            <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0 steelblue"> <a href="#" title=""> Services </a> 
                            
                                <div class="megamenu-child-container">
                                    <ul class="sub-menu">
                                        <li> <a href="#">Special Services</a>
                                            <ul class="sub-menu">
                                                <li> <a href="special-education.php">Special Education</a> </li>
                                                <li><a href="remedial-teaching.php" title="">Topic Teaching/ Remedial Classes</a></li>
                                                <li><a href="special-assistance-in-project-work.php" title="">Special Assistance in Project work</a></li>
                                                <li><a href="olympiads.php" title="">Mind Lab - IMO, NSTSC, NSO, NCO, Logical workshops</a></li>
                                                <li><a href="learning-material.php" title="">Learning Material - Ready to use notes. Child friendly worksheets </a></li>
                                     
                                            </ul>

                                        </li>
                                        <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area"> -->
										 <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area">
                                            <a href="#">Popular Services</a>
                                            <div class="menu-item-widget-area-container">
                                                <ul>
                                                    <li class="widget widget_popular_products">
                                                        <ul class="product_list_widget">
                                                            <li>
                                                                <a href="tutions.php" title="">
                                                                <img src="images/product_thumb1.jpg" alt="product"> Tutions - Classes I to VIII - All subjects </a>
                                                             
                                                            </li>
                                                            <li>
                                                                <a href="math-workshop.php" title="">
                                                                <img src="images/product_thumb2.jpg" alt="product"> Special Mathematics Classes - Class I to VIII </a>
                                                              
                                                            </li>
                                                            <li>
                                                                <a href="language.php" title="">
                                                                <img src="images/product_thumb3.jpg" alt="product">Language Lab - English and Japanese </a>

                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area  fill-two-columns">
                                            <a href="#">Fun Frolic</a>
                                            <div class="menu-item-widget-area-container">
                                            	<ul>
                                                	<li class="widget widget_recent_entries">
                                                    	<div class="entry-thumb">
                                                        	<a href="fun-evenings.php"><img src="images/mega_menu_blog_img1.jpg" alt="fun" title=""></a><a href="fun-evenings.php" class="funt">Fun evenings</a>
                                                        </div>
                                                       
                                                        	
                                                        
                                                       
                                                    </li>
                                                    <li class="widget widget_recent_entries">
                                                    	<div class="entry-thumb">
                                                        	<a href="birthday-parties.php"><img src="images/mega_menu_blog_img2.jpg" alt="birthday" title=""></a><a href="birthday-parties.php"  class="funt">Birthday Parties </a>
                                                        </div>
                                                       
                                                        	
                                                       
                                                      
                                                    </li>
                                                </ul>
                                                
                                            </div> 
                                        </li>
                                    </ul>
                                </div>
                                
                            </li>
                  
							<li class="green"> <a href="parents_section.php"> Parent's Section </a> </li>
							
							
							<li class="menu-item-simple-parent menu-item-depth-0 lavender"><a href="blog.php" title="">Blog</a>
                               
                            </li>
                            <!-- <li class="purple"><a href="shop.html" title="">Shop</a></li> -->
							 <li class="purple current_page_item"><a href="gallary.php" title="" class="bol">Image Gallary</a></li>
                            <li class="pink"><a href="contact.php" title="">Contact us</a></li>
							
 
                                       
                            </li></ul></nav>
                    <!--nav ends-->
                
                     <ul class="dt-sc-social-icons">
                        <li><a href="https://www.facebook.com/Mylearningplanet" title="Facebook" class="dt-sc-tooltip-top facebook" target="blank"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="https://www.linkedin.com/company/my-learning-planet" title="linkdin" class="dt-sc-tooltip-top linkedin" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="https://twitter.com/Mylearningplane" title="Twitter" class="dt-sc-tooltip-top twitter" target="_blank"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="https://plus.google.com/u/0/b/118178787253037045021/dashboard/overview" title="Google Plus" class="dt-sc-tooltip-top gplus" target="_blank"><span class="fa fa-google-plus"></span></a></li>
                   <li><a href="http://www.pinterest.com/mylearningplane" title="Pinterest" class="dt-sc-tooltip-top pint" target="_blank"><span class="fa fa-pinterest"></span></a></li>
                    </ul>
					<!--popup1 start-->
		
			 <div id="bg" class="popup_bg"></div> 
				<div id="popup1" class="popup"> 
				<form method="post">
                    	<h2>Sign In</h2>
                        <ul class="class_hours">
                        	<li><input type="email" name="login_username" placeholder="username"  style="font-family:lato !important;" required></li>
                            <li><input type="password" name="login_password" placeholder="password" required></li>
                            <li><a href="parents_section.php">New User?</a>&nbsp;<a href="forgot.php">Forgot Password</a></li>
							<?php 
				            if(isset($msg)) { echo $msg; }
				             ?>
                            <li><input type="submit" name="login" value="LOGIN"></li>
                            </ul>
						</form>	
				</div>
		
		<!--popup1 end-->
					
					
					
					<div class="social-icons pull-right">
					       
							<ul class="nav navbar-nav">
							<?php
						   $account = 'Account';
						   $login = 'Login';
						   $exclamation = '!';
						   if(!isset($_SESSION['ID']))
						   {
						   ?>
							<li class="lon"><a href="#" onclick="openpopup('popup1')"><i class="fa fa-lock"></i><?php echo "$login";?></a></li>
							<?php 
						   }
						   else
						   {  
						   ?> 
							<div id="flip">
						   <li style="color: #73d5f0;margin-top: 20px;"><a href="#"><?php echo $_SESSION['msg'];?>&nbsp;<?php echo $_SESSION['child_name'].$exclamation;?></a></li>
						   </div>
						   <div id="panel">
							<li style="color: #fff;"><a href="dashboard/dashboard.php" style="color: #fff;margin-left: 13px;"><?php echo "Edit Profile";?></a></li>
							<li style="color: #fff;"><a href="logout.php" style="color: #fff;margin-left: 13px;"><?php echo $_SESSION['logout'];?></a></li>
							</div>
		                     <?php
							 } 
                             ?>
							 
							</ul>
						  
						   
						</div> 
                </div>
            </div>
            <!--menu-container ends-->
        </header>
        <!--header ends-->
        <!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Image Gallary</h1>
                    <div class="breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Image Gallary</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width">
                    <div class="dt-sc-sorting-container">
                        <a href="#" title="" class="active-sort" data-filter="*"> All (12) </a>
                        <a href="#" title="" data-filter=".arts"> Arts (1) </a>
                        <a href="#" title="" data-filter=".innovation"> Innovation (3) </a>
                        <a href="#" title="" data-filter=".fun"> Fun (4) </a>
                        <a href="#" title="" data-filter=".listen"> Listen (5) </a>
                        <a href="#" title="" data-filter=".music"> Music (6) </a>
                    </div> 
                    <!--dt-sc-portfolio-container starts-->
                    <div class="dt-sc-portfolio-container">
                        
                        <div class="portfolio dt-sc-one-fourth column first music">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon1.jpg" alt="cartoon1" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon1.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Arts &amp; Craft </a></h5>
                                    <p><a href="#">Cool</a>, <a href="#">Fun</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column all music">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon2.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon2.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Summer Fun </a></h5>
                                    <p><a href="#">Lead</a>, <a href="#">Sustain</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column all arts fun listen">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon3.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon3.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Swim Lesson </a></h5>
                                    <p><a href="#">Joy</a>, <a href="#">Enjoy</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column all music">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon4.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon4.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Fly with me </a></h5>
                                    <p><a href="#">Slick</a>, <a href="#">bless</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column first all fun music listen">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon5.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon5.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Active Learning </a></h5>
                                    <p><a href="#">Learn</a>, <a href="#">Lead</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column all innovation listen">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon6.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon6.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Our Approach </a></h5>
                                    <p><a href="#">Blow</a>, <a href="#">Relax</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column all listen">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon7.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon7.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Our School </a></h5>
                                    <p><a href="#">Fun</a>, <a href="#">Enjoy</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column all fun">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon8.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon8.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Karate Kid </a></h5>
                                    <p><a href="#">Slick</a>, <a href="#">bless</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column first all innovation music listen">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon9.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon9.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Play Time </a></h5>
                                    <p><a href="#">Learn</a>, <a href="#">Lead</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column all">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon10.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon10.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Your Innovations </a></h5>
                                    <p><a href="#">Slick</a>, <a href="#">bless</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column all innovation">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon11.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon11.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Music Hour </a></h5>
                                    <p><a href="#">Learn</a>, <a href="#">Lead</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio dt-sc-one-fourth column all fun music">
                            <div class="portfolio-thumb">
                            	<img class="item-mask" src="images/portfolio-mask.png" alt="portfolio" title="">
                                <img src="images/cartoon12.jpg" alt="cartoon" title="">
                                <div class="image-overlay">
                                    <a href="#" class="link"><span class="fa fa-link"></span></a>
                                    <a href="images/cartoon12.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                </div>
                            </div>
                            <div class="portfolio-detail">
                                <div class="portfolio-title">
                                    <h5><a href="#"> Get Ready for Adventure </a></h5>
                                    <p><a href="#">Fun</a>, <a href="#">Enjoy</a></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--dt-sc-portfolio-container ends-->
                </section>
                <!--primary ends-->
            </div>
            <!--container ends-->
        </div>
        <!--main ends-->
        
        <!--footer starts-->
        <footer>
            <!--footer-widgets-wrapper starts-->
            <div class="footer-widgets-wrapper">
                <!--container starts-->
                <div class="container">
                    
                    <div class="column dt-sc-one-fourth first">
                          <aside class="widget widget_text">
                            <h3 class="widgettitle red_sketch"> About My Learning Planet </h3>
                            <p style="text-align: justify">My Learning Planet creates a love of learning in an environment of collaboration, tolerance, wonderment, and play.
							We provide free or low-cost educational resources that promote understanding and compassion. We have always found that learning can be enjoyable and satisfying. 
							Our company's mission is to produce educational materials that emphasize creativity and the pure enjoyment of learning.&nbsp;<a href="about.php">Read more </a> </p>
                            
                        </aside>
                    </div>

                    <div class="column dt-sc-one-fourth">
                        <aside class="widget tweetbox">
                            <h3 class="widgettitle yellow_sketch"><a href="#">We are Social </a></h3>
<div class="fb-like-box" data-href="https://www.facebook.com/mylearningplanet" data-width="250px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                        </aside>
                    </div>
					                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_recent_entries">
                            <h3 class="widgettitle green_sketch"> Our Location </h3>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14033.335783475552!2d77.079358!3d28.439348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41a78a9d749ae380!2sWebfries!5e0!3m2!1sen!2sin!4v1418288873174" width="250" height="270" frameborder="0" style="border:0"></iframe>
                    
                        </aside>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_text">
                        <h3 class="widgettitle steelblue_sketch">Contact</h3>
                            <div class="textwidget">
                               <p class="dt-sc-contact-info"><span class="fa fa-map-marker"></span> B-110, Second Floor, Ardee City, Sector 52, Gurgaon,Haryana-122011 (India) </p>
                                <p class="dt-sc-contact-info"><span class="fa fa-phone"></span>0124-4382-633</p>
								<p class="dt-sc-contact-info"><span class="fa fa-phone"></span>+91 989-988-8185</p>
                                <p class="dt-sc-contact-info"><span class="fa fa-envelope"></span><a href="mailto:contact@mylearningplanet.in">contact@mylearningplanet.in</a></p>
                            </div>
                        </aside>
                        <aside class="widget mailchimp">
                            <p> We're social </p>
                            <form class="mailchimp-form" action="subscribe.php" method="post">
                                <p>
                                    <span class="fa fa-envelope-o"> </span>
                                    <input type="email" placeholder="Email Address" name="mc_email" required />	
                                </p>	
                                <input type="submit" value="Subscribe" class="button" name="btnsubscribe">
                            </form>
                            <div id="ajax_subscribe_msg"></div>
                        </aside>
                    </div>
                    
                </div>    
                <!--container ends-->
            </div>
            <!--footer-widgets-wrapper ends-->  
            <div class="copyright">
        		<div class="container">
                	<p class="copyright-info">© 2014 My Learning Planet. All rights reserved.</p>
        			<div class="footer-links">
                        <p>Follow us</p><ul class="dt-sc-social-icons">
                        	<li class="facebook"><a href="https://www.facebook.com/Mylearningplanet" target="blank"></a></li>
                            <li class="twitter"><a href="https://twitter.com/Mylearningplane" target="_blank"></a></li>
                            <li class="gplus"><a href="https://plus.google.com/u/0/b/118178787253037045021/dashboard/overview" target="_blank"></a></li>
                            <li class="pinterest"><a href="http://www.pinterest.com/mylearningplane" target="_blank"></a></li>
							 <li class="linke"><a href="https://www.linkedin.com/company/my-learning-planet" target="_blank"></a></li>
                        </ul>
                    </div>
        		</div>
        	</div>  
        </footer>
        <!--footer ends-->
        
    </div>
    <!--wrapper ends-->
    <a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>
    <!--Java Scripts-->
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-migrate.min.js"></script>

    
	<script type="text/javascript" src="js/jquery.tabs.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery-easing-1.3.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.inview.js"></script>

    
    <script type="text/javascript" src="js/validation.js"></script>
    <script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>    
    <script type="text/javascript" src="js/twitter/jquery.tweet.min.js"></script> 
    <script type="text/javascript" src="js/shortcodes.js"></script>       
    <script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>
