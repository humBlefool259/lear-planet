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
header("Location: dashboard/index.php");
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
<title>English, Japanese Language tuition in Gurgaon | MyLearningPlanet</title>
<meta name="description" content="MyLearningPlanet is offering English language tuition, Japaneses languages tuition classes in gurgaon sector 52 for children, for details call today @ 0124-438-2633.">
<meta name="Keywords" content="Japaneses language in gurgaon, learn Japaneses language in gurgaon, Japaneses language tuition for children, Classes for Japaneses language in gurgaon, languages tuition for children in gurgaon, learn english  language in gurgaon, English language tuition for children">
<meta name="author" content="MyLearningPlanet"/>
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
<!-- end logout flip script-->

<script>
  
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58838180-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>
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
                            <li class=" menu-item-simple-parent menu-item-depth-0 red"> <a href="index.php"> Home </a> 
                                      
                            </li>
                            
                            
                           
                          <li class="mustard"> <a href="about.php"> About us </a> </li>
                          <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0 steelblue current_page_item"> <a href="#" title="" class="bol"> Services </a>
                            
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

                                                        	<a href="fun-evenings.php"><img src="images/mega_menu_blog_img1.jpg"  width="200" height="137" alt="Fun and evening" title=""></a><a href="fun-evenings.php" class="funt">Fun evenings</a>

                                                        </div>

                                                       

                                                        	

                                                        

                                                       

                                                    </li>

                                                    <li class="widget widget_recent_entries">

                                                    	<div class="entry-thumb">

                                                        	<a href="birthday-parties.php"><img src="images/mega_menu_blog_img2.jpg" width="200" height="137" alt="Birthday-party" title=""></a><a href="birthday-parties.php"  class="funt">Birthday Parties </a>

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
							<li style="color: #fff;"><a href="dashboard/index.php" style="color: #fff;margin-left: 13px;"><?php echo "Edit Profile";?></a></li>
							<li style="color: #fff;"><a href="logout.php" style="color: #fff;margin-left: 13px;"><?php echo $_SESSION['logout'];?></a></li>
							</div>
		                     <?php
							 } 
                             ?>
							 
							</ul>
						  
						   
						</div> 
                </div>
            </div
            >
            <!--menu-container ends-->
        </header>
        <!--header ends-->
        <!--main starts-->
        <div id="main">
        	<!--breadcrumb-section starts-->
            <div class="breadcrumb-section">
            	<div class="container">
                	<h1>Learn English, Japanese Language in Gurgaon</h1>
                    <div class="breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <a href="#">Services</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">Language Lab – English and Japanese</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width">
                    
                    <div class="column dt-sc-one-half first">
                            <div class="dt-sc-pr-tb-col mustard">	
                                <div class="dt-sc-tb-header">
                                    <div class="dt-sc-tb-thumb">
                                        <img src="images/pricing-image2.jpg" width="572" height="350" alt="pricing details" title="">
                                    </div>
                                   <div style="clear:both"></div>
                                 
                                </div>
                                <ul class="dt-sc-tb-content">
                           
								  
                                        
                                </ul>
                                </div>
                        </div>
                    
                    <!--dt-sc-one-half starts-->
                    <div class="column dt-sc-one-half">                  
                    
                        <p style="text-align: justify">Give your child something to smile about with an enjoyable After-School Learning Language Program like English and Japaneses from My Learning Planet. Small groups encourage student participation and Language learning is based on the conversational Method.</p>
						<p style="text-align: justify">Course is supported by Age-appropriate curriculum and materials and specially trained fluent instructors conduct the classes. Our instructors specialize in teaching children. They use relaxed conversation along with fun and engaging activities to help your child learn to think and communicate in their new language.</p>
                        <p style="text-align: justify">Our proven-effective method of instruction immerses your child in Japanese language and makes learning fast and easy. Children who study languages are generally more imaginative, better abstract thinkers, and more flexible in their thought processes. </p>
 <p style="text-align: justify">My Learning Planet Language lab definitely offers a truly interactive and fun language learning experience for children.</p>
			<p style="text-align: justify">One language sets you in a corridor for life but two languages open every door along the way.</p>
<p style="text-align: justify">In learning planet we help children to explore new linguistic territories. The study of the foreign languages exposes children to the other ways of looking at the world. Learning languages help increase the learning ability, memory, creativity and <a rel="nofollow" href="http://www.mylearningplanet.in/math-workshop.php">critical thinking</a> of the child.</p>
	
					</div> 
                  
                   
                     <div style="clear:both"></div><div class="dt-sc-hr"></div>
                
                <!--primary ends-->
                               <h2 class="dt-sc-hr-green-title">Language lab</h2>
			
			<div class="column dt-sc-one-half first">
                        <div class="dt-sc-titled-box">
                            <h4 class="dt-sc-titled-box-title">Japanese language (Ohayogozaimasu)</h4>
                            <div class="dt-sc-titled-box-content">
                              <p style="text-align: justify">The learning planet provides a platform to enhance your child’s linguistic skills and quality of life by learning Japanese language. </p>
	<p style="text-align: justify">If you or your child is interested in learning nihongo or Japanese language then learning planet is the right platform. </p>
<p style="text-align: justify">	Our well equipped language lab will help the learner in developing and enhancing Japanese reading, writing, listening and speaking skills.</p>
	<p style="text-align: justify">We use the latest technology to facilitate our learners and help them develop their language skills efficiently.</p>
	<p style="text-align: justify">Our lessons are designed in such a manner that not only help the learner to develop efficient language skills but also give an opportunity to learn about the Japanese culture, their festivals and celebrations  etc through various hands on activities because we strongly believe that learning language means learning a particular culture.</p>
	<p style="text-align: justify">We help them to learn the Japanese alphabets (including Hiragana and Katakana), as well as Kanji. The lesson focuses on the correct usage of the vocabulary, grammatical patterns, sentence structure and common words and phrases.</p>
	<p style="text-align: justify">We impart knowledge about how to converse in Japanese through various role plays like telephonic conversation, preparation for the interview, speeches etc.</p>
	<p style="text-align: justify">To reinforce what the child learning all Japanese lessons we plan various activities time to time like role plays, games, debates etc. all these activities will help the learner to become more confident speaker and well versed about the language.</p>
<p style="text-align: justify">Give us an opportunity to help your child develop love for Japanese language. </p>
<p style="text-align: justify">We believe in learning to teach and teaching to learn.</p></br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="column dt-sc-one-half">
                        <div class="dt-sc-titled-box green">
                            <h4 class="dt-sc-titled-box-title">English Language Classes</h4>
                            <div class="dt-sc-titled-box-content">
                                <p style="text-align: justify">Does your child feel nervous while speaking in English in front of others?</p>
								<p style="text-align: justify">Does your child get scared or has no vocabulary to use to communicate with others?</p>
	<p style="text-align: justify">Now here we come with the solution, we provide the right kind of trainers who could understand your child and guide him in becoming a fantastic speaker, listener and writer of the English language.
Give your child something to smile along with an enjoyable after school language learning programs. </p>
	<p style="text-align: justify">Now here we come with the solution, we provide the right kind of trainers who could understand your child and guide him in becoming a fantastic speaker, listener and writer of the English language.
Give your child something to smile along with an enjoyable after school language learning programs. </p>
	<p style="text-align: justify">World has seen many great speakers and writers like swami vivekand, chetan bhagat etc now the next name in the list is your child’s name. Our language module will focus on developing the efficient writing, reading, speaking and listening skills. We aim at providing flexible approach and not the traditional or monotonous way of teaching. </p>
<p style="text-align: justify">We, at learning planet, impart training in public speaking, spoken English, communicational skills and personality development. We use creative methods to boost confidence of the students in communication skills. They participate in various activities like debates, role plays etc which help in enhancing their personality also.</p>
  <p style="text-align: justify"><strong>Various mock interviews are held to improve the interview skills of the child.</strong></p>
	<p>Our classroom is actually no classroom at all, they are the HUBS of activity based learning.</p>
	 </div>
                        </div>
                    </div>
					  </section>

                <!--primary ends-->

            </div>
			</div>
			
			
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

							Our company's mission is to produce educational materials that emphasize creativity and the pure enjoyment of learning.&nbsp;<a href="about.html">Read more </a> </p>

                            

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

                            <h3 class="widgettitle green_sketch">Our Location</h3>

                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14033.335783475552!2d77.079358!3d28.439348!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41a78a9d749ae380!2sWebfries!5e0!3m2!1sen!2sin!4v1418288873174" width="250" height="270" frameborder="0" style="border:0"></iframe>

                    

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

                            <div id="ajax_subscribe_msg"></div>

                        </aside>

                    </div>

                    

                </div>    

                <!--container ends-->

            </div>

            <!--footer-widgets-wrapper ends-->  

            <div class="copyright">

        		<div class="container">

                	<p class="copyright-info">© 2014 My Learning Planet. All rights reserved. Design by <a href="http://www.webfries.com" title="" target="blank"> Webfries </a></p>

        			<div class="footer-links">

                        <p>Follow us</p>

                       <ul class="dt-sc-social-icons">

                        	<li class="facebook"><a href="https://www.facebook.com/Mylearningplanet" target="blank"></a></li>

                            <li class="twitter"><a href="https://twitter.com/Mylearningplane" target="_blank"></a></li>

                            <li class="gplus"><a href="https://plus.google.com/u/0/b/118178787253037045021/dashboard/overview" target="_blank"></a></li>

                            <li class="pinterest"><a href="http://www.pinterest.com/mylearningplane" target="_blank"></a></li>

							 <li class="linke"><a href="https://www.linkedin.com/company/my-learning-planet" target="_blank"></a></li>

                        </ul>

						<div class="social-icons pull-right">

					       

							<ul class="nav navbar-nav">

							

							<?php 

							$sql = "select * from child_registration";

							$result = mysql_query($sql);

							$raw = mysql_fetch_array(result);

							

							?>

							

							<?php

						   $account = 'Account';

						   $login = 'Login';

						   $str = $raw['id'];

						   if($_SESSION['ID']==$raw['id'])

						   {

						   ?>

						<!-- <li><a href="#"><i class="fa fa-user"></i><?php echo "$account";?></a></li> -->

								

								<li><a href="parents_section.php"><i class="fa fa-lock"></i><?php echo "$login";?></a></li>

								<?php 

						   }

		

						   else{

						   ?>

						       

						   <li><i class="fa fa-user"></i><a href="#"><?php echo $_SESSION['msg'];?>&nbsp;&nbsp;<?php echo $_SESSION['child_name'];?></a></li>

								

								<li><i class="fa fa-lock"></i><a href="logout.php"><?php echo $_SESSION['logout'];?></a></li>

		                     <?php } ?>

							</ul>

						  

						   

						</div> 

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

</body>

</html>
