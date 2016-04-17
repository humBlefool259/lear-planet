<?php
    header('Content-Type: text/html; charset=utf-8');
?><?php
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
<html lang="en-gb" class="no-js"><!--<![endif]-->
<head>

<meta http-equiv="content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title>Tuition in Gurgaon | Coaching Classes in Gurgaon | mylearningplanet.in</title>
<meta name="description" content="MyLearningPlanet is a best tuition in gurgaon, coaching classes, home tuition, home tutor in gurgaon sector 52 for Kids all subject, call us @0124-438-2633.">
<meta name="Keywords" content="coaching classes in gurgaon, best tuition in gurgaon, tuition in sector 52 gurgaon, best institution in gurgaon for kids">
<meta name="author" content="">
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
<link rel='stylesheet' id='layerslider-css' href="css/layerslider.css" type='text/css' media='all' />
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
<script src="js/modernizr-2.6.2.min.js"></script>

<!--popup1 start-->

<script language="javascript"> 

</script>
<!--popup1 end-->
<meta name="google-site-verification" content="GF_YQkSHiTZxggdKSymppWZO2ZI5H3bRNgkT1dSl2Dc" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58838180-1', 'auto');
  ga('send', 'pageview');

</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- start logout flip script-->
<script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<!-- end logout flip script-->
</head>
<body class="main">
<div id="fb-root"></div>
	<!--wrapper starts-->
    <div class="wrapper">
        <!--header starts-->
 
		<header>
	  
            <div class="container">
                <div class="logo">
                    <a href="index.php" title="My Learning Planet"><img src="images/my_learning_planet.png" width="232" height="71" alt="My Learning Planet" title="My Learning Planet"></a>
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
                            <li class="current_page_item menu-item-simple-parent menu-item-depth-0 red"> <a href="index.php" class="bol"> Home </a>             
                            </li>
                            
                            
                         
                            <li class="mustard"> <a href="about.php"> About us </a> </li>
                           <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0 steelblue"> <a href="#" title=""> Services </a> 
                            
                                <div class="megamenu-child-container">
                                    <ul class="sub-menu">
                                         <li> <a href="#">Special Services</a>
                                            <ul class="sub-menu">
											<li><a href="special-education.php" title="">Special Education</a></li>
                                                <li><a href="remedial-teaching.php" title="">Topic Teaching/ Remedial Classes</a></li>
                                                <li><a href="special-assistance-in-project-work.php" title="">Special Assistance in Project work</a></li>
                                                <li><a href="olympiads.php" title="">Mind Lab - IMO, NSTSC, NSO, NCO, Logical workshops</a></li>
                                                <li><a href="learning-material.php" title="">Learning Material - Ready to use notes. Child friendly worksheets </a></li>
                                            </ul>
                                            <a class="dt-menu-expand">+</a> 
                                        </li>
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-depth-1 menu-item-with-widget-area">
                                           <a href="#">Popular Services</a>
                                            <div class="menu-item-widget-area-container">
                                                <ul>
                                                    <li class="widget widget_popular_products">
                                                        <ul class="product_list_widget">
                                                             <li>
                                                                <a href="tutions.php" title="">
                                                                <img src="images/product_thumb1.jpg" width="70" height="70" alt="product"> Tutions - Classes I to VIII - All subjects </a>
                                                             
                                                            </li>
                                                            <li>
                                                                <a href="math-workshop.php" title="">
                                                                <img src="images/product_thumb2.jpg" width="70" height="70" alt="product"> Special Mathematics - Class I to VIII </a>
                                                              
                                                            </li>
                                                            <li>
                                                                <a href="language.php" title="">
                                                                <img src="images/product_thumb3.jpg" width="70" height="70" alt="product">Language Lab - English and Japanese </a>

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
                                                        	<a href="fun-evenings.php"><img style="border:6px solid #008c99;" src="images/mega_menu_blog_img1.jpg" width="200" height="137" alt="mega menu" title=""></a><a href="fun-evenings.php" class="funt">Fun evenings</a>
                                                        </div>
                                                        
                                                        	
                                                      
                                                       
                                                    </li>
                                                    <li class="widget widget_recent_entries">
                                                    	<div class="entry-thumb">
                                                        	<a href="birthday-parties.php"><img src="images/mega_menu_blog_img2.jpg" width="200" height="137" alt="birthday-party" alt="mega menu" title="" style="border:6px solid #008c99;"></a><a href="birthday-parties.php" class="funt">Birthday Parties </a>
                                                        </div>
                                                        
                                                        	
                                                      
                                                      
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a class="dt-menu-expand">+</a>
                            </li>                            
							<li class="green"> <a href="parents_section.php"> Parent`s Section </a> </li>
							
							
							<li class="menu-item-simple-parent menu-item-depth-0 lavender"><a href="blog.php" title="">Blog</a>
                              
                            </li>
                            <!-- <li class="purple"><a href="shop.html" title="">Shop</a></li> -->
							 <li class="purple"><a href="gallary.php" title="">Image Gallary</a></li>
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
                    	<h4>Sign In</h4>
                        <ul class="class_hours">
                        	<li><input type="email" name="login_username" placeholder="username"  style="font-family:lato !important;" required></li>
                            <li><input type="password" name="login_password" placeholder="password" required></li>
                            <li><a href="parents_section.php">New User?</a>&nbsp;<a href="forgot.php">Forgot Password</a></li>
							<?php 
							if(isset($msg))
							{
				            if(isset($msg)) { echo $msg; }
							}
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
            </div
            ><!--menu-container ends-->
        </header>
        <!--header ends-->
        <!--main starts-->
        <div id="main">
        
            <!--slider starts-->
            <div id="slider"> 
                <div id="layerslider_4" class="ls-wp-container" style="width:100%;height:500px;max-width:1920px;margin:0 auto;margin-bottom: 0px;">
                   <div class="ls-slide" data-ls="slidedelay:5000; transition2d: all;">
                        <img src="images/layerslider-gallery/1.jpg" width="1366" height="498" alt="slider" class="ls-bg" alt="Slide background" />
                   </div>
                    <div class="ls-slide" data-ls="slidedelay:5000; transition2d: all;">
                        <img src="images/layerslider-gallery/2.jpg" width="1366" height="498" alt="slider" class="ls-bg" alt="Slide background" />
                        
                       
                       </div>
                    <div class="ls-slide" data-ls="slidedelay:5000; transition2d: all;">
                          <img src="images/layerslider-gallery/3.jpg" width="1366" height="499" alt="slider" class="ls-bg" alt="Slide background" />
						 </div>
                </div>
            </div>
            <!--slider ends-->

            <!--primary starts-->
            <section id="primary" class="content-full-width" style="padding:30px 0px 10px 0px !important;">
                <!--container starts-->
                <div class="container">
                    
                    <div class="dt-sc-one-fourth column first">
                        <div class="dt-sc-ico-content type1">
                            <div class="icon">
                                <span class="icon-outer">
                                    <img src="images/tutions.jpg" width="112" height="112"  alt="tuition in gurgaon sector 52" title="">
                                    <span class="infolayer">
                                        <a href="tutions.php"><i class="fa fa-link"></i></a>
                                    </span>
                                </span>
                            </div>
                            <h2><a href="tutions.php">Tutions - All subjects </br>Classes I to VIII  </a></h2>
                            <p>We provide flexible and individual out of school tutoring for all subjects suitable for children from early years till VIII standard.</p>
                        </div>
                    </div>
                    
                    <div class="dt-sc-one-fourth column">
                        <div class="dt-sc-ico-content type1">
                            <div class="icon">
                                <span class="icon-outer">
                                    <img src="images/math.jpg" width="112" height="112"  alt="math tuition" title="">
                                    <span class="infolayer">
                                        <a href="math-workshop.php"><i class="fa fa-link"></i></a>
                                    </span>
                                </span>
                            </div>
                            <h2><a href="math-workshop.php">Special Mathematics Classes </br>Class I to VIII</a></h2>
                            <p>From time to time we conduct logical workshops also which is a method of delivering math instruction.</p>
                        </div>
                    </div>
                    
                    <div class="dt-sc-one-fourth column">
                        <div class="dt-sc-ico-content type1">
                            <div class="icon">
                                <span class="icon-outer">
                                    <img src="images/fun.jpg" width="112" height="112"  alt="fun and evening party" title="">
                                    <span class="infolayer">
                                        <a href="fun-evenings.php"><i class="fa fa-link"></i></a>
                                    </span>
                                </span>
                            </div>
                            <h2><a href="fun-evenings.php">Fun Evenings</br>Hourly basis</a></h2>
                            <p>My Learning Planet is an upscale play care facility designed with your child's enjoyment in mind. </p>
                        </div>
                    </div>
                    
                    <div class="dt-sc-one-fourth column">
                        <div class="dt-sc-ico-content type1">
                            <div class="icon">
                                <span class="icon-outer">
                                    <img src="images/birthday.jpg" width="112" height="112" alt="birthday party for children" title="">
                                    <span class="infolayer">
                                        <a href="olympiads.php"><i class="fa fa-link"></i></a>
                                    </span>
                                </span>
                            </div>
                           <h2><a href="olympiads.php">Preparation for <br/>Olympiads</a></h2>
                            <p>The learning planet helps your child to prepare for various Olympiad exams like IMO, NSTSE, ACO, NSO, IAIS.</p>
                        </div>
                    </div>
                    
                </div>
                <!--container ends-->
                <div class="dt-sc-hr"></div>
                <!--fullwidth-background starts-->
                <section class="fullwidth-background dt-sc-parallax-section turquoise-bg">
                    <!--container starts-->
                    <div class="container">
                        <!--dt-sc-one-half starts-->
                        <div class="dt-sc-one-half column first">
                            <h2>That’s not all, we have more in store!</h2>
                            <!--dt-sc-one-half starts-->
                            <div class="dt-sc-one-half column first">
                                
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-glass"> </span> 
                                    </div>
                                    <h4><a href="special-education.php" > Special Education </a></h4>
                                    <p>Special education is the education of students with special needs in a way that addresses the students' individual differences and needs. </p>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-pencil"> </span> 
                                    </div>
                                    <h4><a href="remedial-teaching.php" >Remedial Teaching </a></h4>
                                    <p>Before each unit, we pre-test the students to determine their prior knowledge about the concepts in the unit we are about to teach.</p>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-bullseye"> </span> 
                                    </div>
                            <h4><a href="birthday-parties.php">Birthday Parties</a></h4>
                                   <p>A birthday party is much more than just a party. It is an excellent opportunity for kids to socialize with their friends and make ...</p>
                                </div>
                            
                            </div>
                            <!--dt-sc-one-half ends-->
                            
                            <!--dt-sc-one-half starts-->
                            <div class="dt-sc-one-half column">
                                
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-tachometer"> </span> 
                                    </div>
                                    <h4><a href="special-assistance-in-project-work.php" target="_blank">Special Assistance  </a></h4>
                                    <p>Tears at the tips of the eyes- isn’t it a common situation when all the little kids get a intimidating school project on their hands? </p>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-magic"> </span> 
                                    </div>
                                    <h4><a href="learning-material.php">Learning Material  </a></h4>
                                    <p>In today's complex world, children's futures are determined by their ability to master the basics of reading, math and computers. </p>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                                <div class="dt-sc-ico-content type2">
                                    <div class="icon"> 
                                        <span class="fa fa-music"> </span> 
                                    </div>
                                    <h4><a href="language.php">Language Lab </a></h4>
                                    <p>Give your child something to smile about with an enjoyable After-School Learning Language Program from My Learning Planet.</p>
                                </div>
                            
                            </div>
                            <!--dt-sc-one-half ends-->
                        </div>
                        <!--dt-sc-one-half ends-->
                        
                        <!--dt-sc-one-half starts-->
                        <div class="dt-sc-one-half column">
                            <h2>Learn something new While play!</h2>
                            <div class="add-slider-wrapper">
                                <ul class="add-slider">
                                  <li> <img src="images/add4.jpg" width="464" height="345" alt="children learning game" title=""> </li>
                                  <li> <img src="images/add5.jpg" width="464" height="345" alt="children education game" title=""> </li>
                                  <li> <img src="images/add6.jpg" width="464" height="345" alt="learning new while play" title=""> </li>
                                </ul>
                            </div>
                        </div>
                        <!--dt-sc-one-half ends-->
                    </div>
                    <!--container ends-->
                </section>
<!--                 fullwidth-background ends -->
                <div class="dt-sc-hr"></div>
           <!--      container starts -->
                <div class="container">
                    <h2 class="dt-sc-hr-green-title">Images Section</h2>
                    
                <!--     portfolio-content starts -->
                    <div class="front-portfolio-container">
                       <div class="portfolio-content portfolio-content1">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                  	  <img src="images/child1.jpg" width="371" height="320" alt="children education centre in gurgaon sector 52" title="">
                                      <div class="image-overlay">
                                      
                                        <a href="gallary.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/child1.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                       <div class="portfolio-content portfolio-content2">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                  	  <img src="images/child2.jpg" width="371" height="320" alt="children tuition in sector 52 gurgaon" title="">	
                                      <div class="image-overlay">
                                    
                                        <a href="gallary.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/child2.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                      
                       <div class="portfolio-content portfolio-content3">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="images/child3.jpg" width="371" height="320" alt="children fun with learning" title="">
                                      <div class="image-overlay">
                                   
                                        <a href="gallary.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/child3.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                       
                       <div class="portfolio-content portfolio-content4">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="images/child4.jpg" width="371" height="320" alt="children entertainment while learning" title="">
                                      <div class="image-overlay">
                                      
                                        <a href="gallary.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/child4.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                      
                       <div class="portfolio-content portfolio-content5">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="images/child5.jpg" width="371" height="320" alt="need help in school project work" title="">
                                      <div class="image-overlay">
                                       
                                        <a href="gallary.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/child5.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                      
                       <div class="portfolio-content portfolio-content6">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="images/child6.jpg" width="371" height="320" alt="kids fun evening" title="">
                                      <div class="image-overlay">
                          
                                        <a href="gallary.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/child6.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                              
                       <div class="portfolio-content portfolio-content7">
                           <div class="front-portfolio">
                              <div class="portfolio-outer">
                                  <div class="portfolio-thumb">
                                      <img src="images/child7.jpg" width="371" height="320" alt="portfolio" title=""> 		
                                      <div class="image-overlay">
                               
                                        <a href="gallary.php" class="link"><span class="fa fa-link"></span></a>
                                        <a href="images/child7.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                                    </div>
                                  </div>
                              </div>
                           </div>
                       </div>
                       <div class="dt-sc-hr-small"></div>
                      <!--  <div class="aligncenter">
                           <a href="#" class="dt-sc-button medium mustard"> Hit here to view all <span class="fa fa-chevron-circle-right"> </span></a>        
                       </div> -->
                    </div>
                       
                 <!--    front-portfolio-container ends -->
                    
                </div>
               <!--  container ends -->
                
                <div class="dt-sc-hr"></div>
               <!--  fullwidth-background starts -->
                 <section class="fullwidth-background dt-sc-parallax-section orange-bg">
                   <!--  container starts -->
                    <div class="container">
                        <h2 class="dt-sc-hr-white-title">Recent Blog</h2>
							<div class="column dt-sc-one-half first">
                            <article class="blog-entry">
                                <div class="blog-entry-inner">
                                    <div class="entry-meta">
                                        <a href="How-to-balance-the-After-School-Activities-blog.php" class="blog-author"><img src="images/rounded-bg-img.jpg" width="57" height="51" alt="Maths tutions in Gurgaon" title=""></a>
                                        <div class="date">
                                            <span> 04 </span> 
                                            <p> Sept. <br> 2015 </p> 
                                        </div>
                                      
                                      
                                    </div>		
                                    <div class="entry-thumb">
                                        <a href="How-to-balance-the-After-School-Activities-blog.php"><img src="images/How-to-balance-the-After-School-Activities bolg.jpg" width="445" height="272" alt="How to balance" title=""></a>
                                    </div>		
                                    <div class="entry-details">	
                                        <div class="entry-title">
                                            <h3><a href="How-to-balance-the-After-School-Activities-blog.php">How To Balance The After School Activities</a></h3>
                                        </div>			
                                     
                                        <div class="entry-body">
                                            <p><em>Now a days there is so much choice of extracurricular activities available for school age children's. Decision of picking them or leaving them can really become a tough decision for parents...</em> </p>
                                        </div>	 		
                                        <a href="How-to-balance-the-After-School-Activities-blog.php" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>		
                                    </div>	
                                </div>
                            </article>
                        </div>
						
						<div class="column dt-sc-one-half first">
                            <article class="blog-entry">
                                <div class="blog-entry-inner">
                                    <div class="entry-meta">
                                        <a href="what-are-the-advantages-and-disadvantages-of-activity-based-learning.php" class="blog-author"><img src="images/rounded-bg-img.jpg" width="57" height="51" alt="the-best-way-to-learn" title=""></a>
                                        <div class="date">
                                            <span> 22 </span> 
                                            <p> August <br> 2015 </p> 
                                        </div>                                      
                                      
                                    </div>		
                                    <div class="entry-thumb">
                                        <a href="what-are-the-advantages-and-disadvantages-of-activity-based-learning.php"><img src="images/activity-based-learnings.jpg" width="445" height="272" alt="advantages and disadvantages of activity based learning" title=""></a>
                                    </div>		
                                    <div class="entry-details">	
                                        <div class="entry-title">
                                            <h3><a href="what-are-the-advantages-and-disadvantages-of-activity-based-learning.php">What are the advantages & disadvantages of Activity based learning?</a></h3>
                                        </div>			
                                     
                                        <div class="entry-body">
                                           
                                            <p><em>As the name suggest Activity based learning is gaining knowledge by doing activities. In this methodology students rather than attending the classes given by teachers..</em> </p>
                                        </div>	 		
                                        <a href="what-are-the-advantages-and-disadvantages-of-activity-based-learning.php" class="dt-sc-button small"> Read More <span class="fa fa-chevron-circle-right"> </span></a>		
                                    </div>	
                                </div>
                            </article>
                        </div>
					
						
						
                    </div>
               <!--      container ends  -->   
                </section>
           
        
               <!--  fullwidth-background starts -->
                <section class="fullwidth-background dt-sc-parallax-section product_bg">
                 <!--    container starts -->
                    <div class="container">
                        <h2 class="dt-sc-hr-green-title"> Testimonials </h2>
                    
                    <div class="column dt-sc-one-fourth first">
                    	<div class="activity box1">
                        	<h4> Meeta Saxena  </h4>
                            <img src="images/meeta.jpg" alt="Meeta Saxena" width="275" height="183" title="">
                            <p>My Learning Planet is truly a perfect platform which helped my child to blossom into a mature human being with the help of guidance and support by the friendly staff</p>
                        </div>
                    </div>
                    
                    <div class="column dt-sc-one-fourth">
                    	<div class="activity box2">
                        	<h4>Ritu Batra  </h4>
                            <img src="images/ritu.jpg" alt="Ritu Batra" width="275" height="183" title="">
                            <p>Thanks a lot! Again and Again My Learning Planet. You have made my life easier by helping my child to learn all the concepts by heart.</p>
                        </div>
                    </div>
                    
                    <div class="column dt-sc-one-fourth">
                    	<div class="activity box3">
                        	<h4> Anamika Kwatra  </h4>
                            <img src="images/anamika.jpg" width="275" height="183" alt="Anamika Kwatra" title="">
                            <p>My child is truly blessed to be a part of “My Learning Planet”. The educators are caring and friendly who teach my child by paying individual attention.</p>
                        </div>
                    </div>
                    
                    <div class="column dt-sc-one-fourth">
                    	<div class="activity box4">
                        	<h4> Rujuta Yadav</h4>
                            <img src="images/rujuta.jpg" width="275" height="183" alt="Rujuta Yadav" title="">
                            <p>My Learning Planet helped my kid practice their math concepts and reading skills and keep them interested while they learn.<br/><br/></p>
                        </div>
                    </div>
                    
                    <div class="dt-sc-hr"></div>
                    
                
                    </div>
                <!--     container ends -->
                </section>
                <!--fullwidth-background ends-->
            </section>
            <!--primary ends-->
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
                            <h1 class="widgettitle red_sketch"> About My Learning Planet </h1>
                            <p style="text-align: justify">My Learning Planet creates a love of learning in an environment of collaboration, tolerance, wonderment, and play.
							We provide free or low-cost educational resources that promote understanding and compassion. We have always found that learning can be enjoyable and satisfying. 
							Our company's mission is to produce educational materials that emphasize creativity and the pure enjoyment of learning.&nbsp;<a href="about.php">Read more </a> </p>
                            
                        </aside>
                    </div>

                    <div class="column dt-sc-one-fourth">
                        <aside class="widget tweetbox">
                            <h3 class="widgettitle yellow_sketch"><a href="#">We are Social </a></h3>
<div class="fb-like-box border_no" data-href="https://www.facebook.com/mylearningplanet" data-width="250px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true" style="border:none"></div>
                        </aside>
                    </div>
					                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_recent_entries">
                            <h3 class="widgettitle green_sketch"> Our Location </h3>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d7016.823179012097!2d77.07942578324574!3d28.437006594347306!3m2!1i1024!2i768!4f13.1!2m1!1sMy+learning+Planet%2C+B-110%2C+second+floor%2C+Ardee+city%2C+Sector+-52%2C+Gurgaon!5e0!3m2!1sen!2sin!4v1421152403841" width="250" height="270" frameborder="0" style="border:0"></iframe>
                    
                        </aside>
                    </div>
                    <div class="column dt-sc-one-fourth">
                        <aside class="widget widget_text">
                        <h3 class="widgettitle steelblue_sketch">Contact</h3>
                            <div class="textwidget">
                               <p class="dt-sc-contact-info"><span class="fa fa-map-marker"></span> B-110, Second Floor, Ardee City, Sector 52, Gurgaon,Haryana-122003 (India) </p>
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
                            <div id="ajax_subscribe_msg"></div>  <?php
				  if(isset($_GET['token']))
				  {
					echo '<h4  class="redmsg">Thanks you for subscribing with us!</h4>';
				  }
				  ?>
                        </aside>
                    </div>
                    
                </div>    
                <!--container ends-->
            </div>
            <!--footer-widgets-wrapper ends-->  
            <div class="copyright">
        		<div class="container">
                	<p class="copyright-info">© 2014 My Learning Planet. All rights reserved. <span style="font-size:13px;">Website Designed by <a href="http://www.webfries.com/" target="_blank">WEBFRIES</a></span></p>
        			<div class="footer-links">
                        <p>Follow us</p>  <ul class="dt-sc-social-icons">
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
     <script  type="text/javascript" src="js/jquery.js"></script>
    <script  type="text/javascript" src="js/shortcodes.js"></script>   
    <script  type="text/javascript" src="js/custom.js"></script>
    <!-- Layer Slider --> 
    <script  type="text/javascript" src="js/jquery-transit-modified.js"></script> 
    <script type='text/javascript' src="js/layerslider.transitions.js"></script> 
    <!--<script type="text/javascript">var lsjQuery = jQuery;</script>--> 
    <script type="text/javascript">var lsjQuery = jQuery;</script><script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1240, layersContainer: 1060, skinsPath: 'js/layerslider/skins/'}) } }); </script>
    
</body>
</html>