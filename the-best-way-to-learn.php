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
<title>My Learning Planet | Blog - Spaced Repetition : The best way to learn</title>
<meta name="description" content="MyLearningPlanet is a best tuition in gurgaon, coaching classes, home tuition, home tutor in gurgaon sector 52 for Kids all subject, call us @0124-438-2633.">
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
                                                                <img src="images/product_thumb1.jpg" alt="product"> Tutions - Classes I to VIII - All subjects </a>
                                                             
                                                            </li>
                                                            <li>
                                                                <a href="math-workshop.php" title="">
                                                                <img src="images/product_thumb2.jpg" alt="product"> Special Mathematics - Class I to VIII </a>
                                                              
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
                                <a class="dt-menu-expand">+</a>
                            </li>                            
							<li class="green"> <a href="parents_section.php"> Parent`s Section </a> </li>
							
							
							<li class="menu-item-simple-parent menu-item-depth-0 lavender current_page_item"><a href="blog.php" title="" class="bol">Blog</a>
                               
                            </li>
                         
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
                	<h1>The best way to learn</h1>
                    <div class="breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <a href="blog.php">Blog</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">The best way to learn</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="with-sidebar">
                 
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <a href="#" class="blog-author"><img src="images/rounded-bg-img.jpg" alt="rounded" title=""></a>
                                <div class="date">
                                            <span> 05 </span> 
                                            <p> June <br> 2015 </p> 
                                        </div>
                              
                            </div>		
                            <div class="entry-thumb">
                                <img src="images/Learning never stops.jpg" alt="spaced" title="">
                            </div>		
                            <div class="entry-details">	
                                <div class="entry-title">
                                    <h3>The best way to learn</h3>
                                </div>			
                                <!--entry-metadata ends-->	
                                <div class="entry-body">
									<p class="s_j">Learning never stops.</p>									<p class="s_j">This is as true as it could be. We start learning some skill or other right from the time of birth and keep on doing so till our last breath. The reasons may be different. The pace may be different. The method may be different. But all of us learn something or the other almost all through the life. </p>									<p class="s_j">Thus, a natural question comes to our mind.</p>									<p class="s_j">So if there’s one technique to best learn something, what shall it be?  Before answering the question, let’s see and old parable that goes something like this:</p>									<p class="s_j">A pottery teacher divided his class into 2 halves.</p>									<p class="s_j">To the first half he said, “You will devote the semester studying nitty-gritties of pottery, designing, planning and producing your perfect pot.  At the culmination of the semester, a competition will be held to see who makes best pot”.</p>									<p class="s_j">To the other half he said, “You will spend this semester making lots and lots of pots. You will get grades based on the no. of completed pots.  At the completion of the semester, you’ll even get a chance to send your best pot into a contest.”</p>									<p class="s_j">The first half threw themselves into their analysis, research, planning, and design.  Then, finally they set about crafting their one, perfect pot to be part of the competition.</p>									<p class="s_j">The second half, on the other hand, immediately grabbed fistfuls of clay and started, in full swing, churning out pots.  There were big ones, small ones, simple ones as well as intricate ones.  Their muscles ached for weeks as they gained the strength required to throw numerous pots.</p>									<p class="s_j">At the end of the semester, both halves were bidden to enter their most perfect pot into the competition.  As the votes were counted, to their surprise, all of the best pots belonged to the students that were tasked with quantity.  The practice made them considerably better potters than the planners who were on the quest for a single, perfect pot.</p>									<p class="s_j">So what does the story tell?  The best way to learn anything is to do it, and do it a lot.  </p>									<p class="s_j">But practicing something repetitively is just a start and it doesn’t tell the whole story. Of course, practice and repetition is essential to acquiring a new skill.  But simple practice won’t do the trick, it has to be deliberate practice.</p>
                                </div>
							<div  >
                                <h4>Deliberate Practice</h4>								<p class="s_j">Deliberate practice means practicing mindfully, being thoughtful and aware every moment about how you are practicing.  Psychologists state that expertise has more to do with the method one uses to practice rather than with merely executing an action a large number of times.   Deliberate practice refers to breaking down the required skills to be an expert and then focus on refining those skill chunks while practicing.  Additionally deliberate practice lays emphasis on continually improving one’s skills by aggregating the difficulty of practice, each time.  Here is a mind map that will explain more about deliberate practice is:</p>								<p><img src="mlp121.jpg" width="445" height="272" alt="best tuition center in gurgaon" title=""></p>
							</div>
							 <p class="s_j">As you may see, there are fundamentally 6 facades of deliberate practice:</p>
                             <p class="s_j"><strong>1.	Designed to improve your performance and skill</strong></p>
                             <p class="s_j"><strong>2.	A coach is available, all time to help improve your skill</strong></p>							 <p class="s_j"><strong>3.	A skill is repeated many times till that it turns into second nature </strong>  </p>
							<p class="s_j"><strong>4. Coach’s feedback is available on a continual basis.</strong></p>
							<p class="s_j"><strong>5.	It is mentally demanding and the challenge increases, perpetually</strong> </p>
							<p class="s_j"><strong>6.	It isn’t fun —you have to be absolutely absorbed and focused on honing the skill</strong> </p>  
                            <p class="s_j">So the answer to the question that we all have, “what is the best way to learn anything” is practice, deliberately practice.</p>
                              							
                        </div>
                    </article>
                    <!--commententries starts-->
                    <div class="commententries d_n">
                    	<h2 class="dt-sc-title"><span>Comments</span></h2>
                        <ul class="commentlist">
                        	<li>
                            	<article class="comment">
                                	<header class="comment-author">
                                        <img class="item-mask" src="images/author-hexa-bg.png" alt="author" title="">
                                        <img src="images/comment1.jpg" alt="comment1" title="">
                                    </header>
                                    <section class="comment-details">	
                                        <div class="author-name">
                                        	<a href="#">Jeniffer Conolley</a>
                                        </div>	
                                        <div class="commentmetadata">21 Nov 2012</div>  
                                        <div class="comment-body">		
                                            <div class="comment-content">
                                            	<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure.</p>
                                            </div>	
                                        </div>
                                        <div class="reply">
                                        	<a class="comment-reply-link" href="#">Reply <span class="fa fa-angle-double-right"></span></a>
                                        </div>	
                                    </section>
                                </article>
                                <ul class="children">
                                	<li>
                                    	<article class="comment">
                                            <header class="comment-author">
                                                <img class="item-mask" src="images/author-hexa-bg.png" alt="author" title="">
                                        		<img src="images/comment2.jpg" alt="comment2" title="">
                                            </header>
                                            <section class="comment-details">	
                                                <div class="author-name">
                                                    <a href="#">Lilly Dafoe</a>
                                                </div>	
                                                <div class="commentmetadata">21 Nov 2012</div>  
                                                <div class="comment-body">		
                                                    <div class="comment-content">
                                                        <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure.</p>
                                                    </div>	
                                                </div>
                                                <div class="reply">
                                                    <a class="comment-reply-link" href="#">Reply <span class="fa fa-angle-double-right"></span></a>
                                                </div>	
                                            </section>
                                        </article>
                                    </li>
                                </ul>
                            </li>
                            <li>
                            	<article class="comment">
                                	<header class="comment-author">
                                    	<img class="item-mask" src="images/author-hexa-bg.png" alt="author" title="">
                                        <img src="images/comment3.jpg" alt="comment3" title="">
                                    </header>
                                    <section class="comment-details">	
                                        <div class="author-name">
                                        	<a href="#">Michael Richards</a>
                                        </div>	
                                        <div class="commentmetadata">21 Nov 2012</div>  
                                        <div class="comment-body">		
                                            <div class="comment-content">
                                            	<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure.</p>
                                            </div>	
                                        </div>
                                        <div class="reply">
                                        	<a class="comment-reply-link" href="#">Reply <span class="fa fa-angle-double-right"></span></a>
                                        </div>	
                                    </section>
                                </article>
                            </li>
                        </ul>
                        <div id="respond" class="comment-respond d_n">
                            <h2>Enroll Your Words</h2>
                            <form method="post" action="#" id="commentform" class="comment-form">
                                <p class="column dt-sc-one-half first">
                                    <input id="author" name="author" type="text" placeholder="Name" required>
                                </p>
                                <p class="column dt-sc-one-half">
                                    <input id="email" name="email" type="email" placeholder="Email ID" required>
                                </p>
                                <p>
                                    <textarea id="comment" name="comment" placeholder="Message"></textarea>
                                </p>
                                <p>
                                    <input name="submit" type="submit" id="submit" value="Add Comment">
                                </p>
                            </form>
                        </div>
                        
                    </div>
                    <!--commententries ends-->
                </section>
                <!--primary ends-->
                
                <!--secondary starts-->
                <section id="secondary">
                
                	<aside class="widget widget_categories">
                    	<h3 class="widgettitle">Categories</h3>
                        <ul>
                        	<li>
                            	<a href="#">Play School<span>(16)</span></a>
                            </li>
                            <li>
                            	<a href="#">Academic Performance<span>(3)</span></a>
                            </li>
                            <li>
                            	<a href="#">Co-curricular<span>(26)</span></a>
                            </li>
                            <li>
                            	<a href="#">Visual Education<span>(18)</span></a>
                            </li>
                            <li>
                            	<a href="#">Inter Competition<span>(4)</span></a>
                            </li>
                        </ul>
                    </aside>
                	
                    <aside class="widget widget_text d_n">
                        <h3 class="widgettitle">Kids Achievements</h3>
                        <p>In lobortis rhoncus pulvinar. Pellentesque habitant morbi tristique <a href="#" class="highlighter">senectus</a> et netus et malesuada fames ac turpis egestas. </p>
                        <p>Sed tempus ligula ac mi iaculis lobortis. Nam consectetur justo non nisi dapibus, ac commodo mi sagittis. Integer enim odio.</p>
					</aside>
                    
                    <aside class="widget widget_text d_n">
                    	<h3 class="widgettitle">Visual Guidance</h3>
                        <p>Our methods of teaching and level of quality instructors all add up to a well-rounded experience.</p>
                    	<iframe src="http://player.vimeo.com/video/21195297" width="420" height="200"></iframe>
                    </aside>
                    
                    <aside class="widget widget_recent_entries d_n">
                    	<h3 class="widgettitle">Kids Voices</h3>
                    	<!--dt-sc-tabs-container starts-->            
                        <div class="dt-sc-tabs-container">
                            <ul class="dt-sc-tabs">
                                <li><a href="#"> New </a></li> 
                                <li><a href="#"> Popular </a></li>
                            </ul>
                            <div class="dt-sc-tabs-content">
                                <h5><a href="#">Explore your Thoughts!</a></h5>
                                <p>Nam consectetur justo non nis dapibus, ac commodo mi sagittis. Integer enim odio.</p>
                                <h5><a href="#">Perform for Success!</a></h5>
                                <p>Sed ut perspiciatis unde omi iste natus error siterrecte voluptatem accusantium doloremque laudantium.</p>
                            </div>
                            <div class="dt-sc-tabs-content">
                                <h5><a href="#">Admire &amp; Achieve!</a></h5>
                                <p>Sed ut perspiciatis unde omi iste natus error siterrecte voluptatem accusantium doloremque laudantium.</p>
                                <h5><a href="#">Your Opportuntiy!</a></h5>
                                <p>Nam consectetur justo non nis dapibus, ac commodo mi sagittis. Integer enim odio.</p>
                            </div>
                        </div>
                        <!--dt-sc-tabs-container ends-->
                    </aside>
                    
                    <aside class="widget widget_tag_cloud">
                    	<h3 class="widgettitle">Hit on Tags</h3>
                        <div class="tagcloud">
                        	<a href="#">Listen</a>
                            <a href="#">Observe</a>
                            <a href="#">Admire</a>
                            <a href="#">Accomplish</a>
                            <a href="#">Perform</a>
                            <a href="#">Achieve</a>
                            <a href="#">Target</a>
                        </div>
                    </aside>
                    
                </section>
                <!--secondary ends-->
                
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
