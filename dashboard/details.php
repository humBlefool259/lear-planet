<?php
include("../lock.php");
$_SESSION['msg'] = 'Hi';
$msg = $_SESSION['msg'];
$_SESSION['logout'] = 'logout';
$logout = $_SESSION['logout'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
<title>Parent's Dashboard</title>

<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-jvert-tabs-1.1.4.css" />
<link rel="stylesheet" type="text/css" href="css/my-job.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="../style.css" rel="stylesheet" type="text/css">
<!-- <link href="../css/shortcodes.css" rel="stylesheet" type="text/css"> -->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/shortcodes.css" rel="stylesheet" type="text/css">
<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">   -->
<link rel='stylesheet' id='layerslider-css' href="../css/layerslider.css" type='text/css' media='all' />

<!--prettyPhoto-->
<link href="../css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />   
<!-- Include JQuery Core-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bubblegum+Sans' rel='stylesheet' type='text/css'>
<!--jquery-->
<script src="js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
 <script src="js/ga.js" async type="text/javascript"></script>

         <!-- global javascript variable for host/domain  replicate here as hirist Amitv 8 may 2014 -->
        <script type="text/javascript">
            var host = "iimjobs";
        </script>
<!-- Include JQuery Vertical Tabs plugin -->
<script type="text/javascript" src="js/jquery-jvert-tabs-1.1.4.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$("#vtabs1").jVertTabs();
	$("#vtabs2").jVertTabs({
		selected: 1
	});
	
		
	// add click events for open tab buttons
	$("input[id^=openTab]").each(function(index){
		$(this).click(function(){
			openTab("#vtabs6",index);
			return false;
		});
	});	
	function openTab(tabId,index){
		$(tabId).jVertTabs('selected',index);
	}
});
</script>
<link rel="stylesheet" type="text/css" href="css/tabcontent.css" />
<script type="text/javascript" src="js/tabcontent.js"></script>

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

<!--start new service validation-->

<script type="text/javascript" >
function formValidator(){
	// Make quick references to our fields
	var selectService1 = document.getElementById('selectService1');
	
	
	
	// Check each input in the order that it appears in the form!
	
	 if(notEmpty(selectService1, "Please select Service!!")){
	
							return true;
						
					}
	return false;
	
}

function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

  
  
</script>


<!--end new srvice validation-->


<!--start popup8 form validation-->
<script type="text/javascript" >
function formValidator1(){
	// Make quick references to our fields
	var age = document.getElementById('age1');
	var class1 = document.getElementById('class2');
	var school1 = document.getElementById('school2');
	var password = document.getElementById('password2');
	var address = document.getElementById('address2');
	var contact = document.getElementById('contact');
	var emergency_contact = document.getElementById('emergency_contact');
	var other_specific_services = document.getElementById('other_specific_services2');
	
	
	// Check each input in the order that it appears in the form!
	
	 if(notEmpty(age, "Please select Age!!")){
		if(isAlphanumeric(class1, "Please Enter Valid Class!!")){
			if(isAlphabet(school1, "Please enter only letters for school Name")){
			
			if(notEmpty(password, "Please fill password")){
			if(notEmpty(address, "Please fill Address")){
				if(phonenumber(contact, "please enter Valid contact no!!")){
				if(phonenumber(emergency_contact, "please enter Valid Emergency contact no!!")){
				
				if(notEmpty(other_specific_services, "Please fill other specific service!!")){
				
							return true;
							}
						}
					}
				}
			}
			}
		
		}
	}
	return false;
	
}

function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+.*|.*[a-zA-Z]+|.*[a-zA-Z]+.*/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}

function madeSelection(elem, helperMsg){
	if(elem.value == "Please Choose"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function phonenumber(elem, helperMsg)  
{  
  var phoneno = /^\d{10}$/;  
  if(elem.value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
    alert(helperMsg);
		elem.focus();
		return false;  
  }  
  }  
  
 
</script>
<!--End popup8 form validation-->
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
</head>

<body>
<header>
	  
            <div class="container">
                <div class="logo">
                    <a href="../index.php" title="My Learning Planet"><img src="images/my_learning_planet.png" alt="My Learning Planet" title="My Learning Planet"></a>
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
                            <li class="current_page_item menu-item-simple-parent menu-item-depth-0 red"> <a href="../index.php"> Home </a> 
                                <!-- <ul class="sub-menu">
                                    <li> <a href="#"> Submenu Level I </a> </li>
                                    <li> <a href="#"> Submenu Level I </a>  </li>
                                    <li> <a href="#"> Submenu Level I </a> </li>
                                    <li> <a href="#"> Submenu Level I </a> </li>
                                    <li> <a href="#"> Submenu Level I </a> 
                                        <ul class="sub-menu">
                                            <li> <a href="#"> Submenu Level II </a> </li>
                                            <li> <a href="#"> Submenu Level II </a> </li>
                                            <li> <a href="#"> Submenu Level II </a>  </li>
                                        </ul>   
                                        <a class="dt-menu-expand">+</a>                             
                                    </li>
                                </ul>  
                                <a class="dt-menu-expand">+</a>   -->                    
                            </li>
                            
                            
                            <!-- <li class="yellow"> <a href="#"> Services </a> </li> -->
							
                           <!--  <li class="menu-item-simple-parent menu-item-depth-0 blue"><a href="gallary.php" title="">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="gallary.php">Portfolio Four Column</a></li>
                                    <li><a href="portfolio-three-column.html">Portfolio Three Column</a>
                                        <ul class="sub-menu">
                                            <li><a href="portfolio-three-column-with-sidebar.html">With Sidebar</a></li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                </ul> -->
                               <!--  <a class="dt-menu-expand">+</a>
                            </li> -->
                            <li class="mustard"> <a href="../about.php"> About us </a> </li>
                           <li class="menu-item-megamenu-parent megamenu-4-columns-group menu-item-depth-0 steelblue"> <a href="#" title=""> Services </a> 
                            
                                <div class="megamenu-child-container">
                                    <ul class="sub-menu">
                                         <li> <a href="#">Special Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="../remedial-teaching.php" title="">Topic Teaching/ Remedial Classes</a></li>
                                                <li><a href="../special-assistance-in-project-work.php" title="">Special Assistance in Project work</a></li>
                                                <li><a href="../olympiads.php" title="">Mind Lab - IMO, NSTSC, NSO, NCO, Logical workshops</a></li>
                                                <li><a href="../learning-material.php" title="">Learning Material - Ready to use notes. Child friendly worksheets </a></li>
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
                                                                <a href="../tutions.php" title="">
                                                                <img src="images/product_thumb1.jpg" alt="product"> Tutions - Classes I to VIII - All subjects </a>
                                                             
                                                            </li>
                                                            <li>
                                                                <a href="../math-workshop.php" title="">
                                                                <img src="images/product_thumb2.jpg" alt="product"> Special Mathematics - Class I to VIII </a>
                                                              
                                                            </li>
                                                            <li>
                                                                <a href="../language.php" title="">
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
                                                        	<a href="#"><img src="images/mega_menu_blog_img1.jpg" alt="" title=""></a>
                                                        </div>
                                                        <div class="entry-body">
                                                        	<a href="../fun-evenings.php">Fun evenings</a>
                                                        </div>
                                                       
                                                    </li>
                                                    <li class="widget widget_recent_entries">
                                                    	<div class="entry-thumb">
                                                        	<a href="#"><img src="images/mega_menu_blog_img2.jpg" alt="" title=""></a>
                                                        </div>
                                                        <div class="entry-body">
                                                        	<a href="../birthday-parties.php">Birthday Parties </a>
                                                        </div>
                                                      
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a class="dt-menu-expand">+</a>
                            </li>                            
							<li class="green"> <a href="../parents_section.php"> Parent`s Section </a> </li>
							
							
							<li class="menu-item-simple-parent menu-item-depth-0 lavender"><a href="../blog.php" title="">Blog</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="blog-two-column.html">Blog Two Column</a>
                                    	<ul class="sub-menu">
                                            <li><a href="blog-two-column-with-sidebar.html">With Sidebar</a></li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                    <li><a href="blog.html">Blog One Column</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-with-sidebar.html">With Sidebar</a></li>
                                        </ul>
                                        <a class="dt-menu-expand">+</a>
                                    </li>
                                </ul>
                                <a class="dt-menu-expand">+</a> -->
                            </li>
                            <!-- <li class="purple"><a href="shop.html" title="">Shop</a></li> -->
							 <li class="purple"><a href="../gallary.php" title="">Image Gallary</a></li>
                            <li class="pink"><a href="../contact.php" title="">Contact us</a></li>
							
 
                                       
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
				<form action="index.php" method="post">
                    	<h2>Sign In</h2>
                        <ul class="class_hours">
                        	<li><input type="email" name="login_username" placeholder="username" required></li>
                            <li><input type="password" name="login_password" placeholder="password" required></li>
                            <li><a href="../parents_section.php">New User?</a>&nbsp;<a href="../forgot.php">Forgot Password</a></li>
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
							<li style="color: #fff;"><a href="dashboard.php" style="color: #fff;margin-left: 13px;"><?php echo "Edit Profile";?></a></li>
							<li style="color: #fff;"><a href="../logout.php" style="color: #fff;margin-left: 13px;"><?php echo $_SESSION['logout'];?></a></li>
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
<div class="miscl">
<div class="clr"></div>
<div class="wrapper">
<div class="c-agent">
<h4 class="ss_l">Parent's:  <span>Dashboard</span></h4>

</div>
</div>
</div>
<div class="edit-conf">
<!-- <a href="#"> Edit Information</a> <a href="#"> Confirm &amp; Apply</a> -->
</div>
<div class="result">
<div class="dashb">
<div id="vtabs1">

                <?php
				$ID = $_SESSION['ID'];
				$sqlc = "select * from add_service where s_id=$ID";
				$queryc = mysql_query($sqlc);
				$raws1 = mysql_fetch_array($queryc);
				$s_id1 = $raws1['s_id'];
				if($s_id1 != '')
				{
				?>	

	  <h3>New Services</h3>
			<table>
				<tr>
				
				<th>New Services</th>
				<th>Date</th>
				</tr>
					<?php
				
					/* $date = date("Y/m/d"); */
					$ID = $_SESSION['ID'];
					$sql = "select * from add_service where s_id='$ID' order by date desc";
					$result = mysql_query($sql);
					while($raw = mysql_fetch_assoc($result))
					{
					?>
					<tr>
					
					<td><?php echo $raw['new_service'];?></td>
					<td><?php echo $raw['date'];?></td>
									
					</tr>
					<?php }?>
					</table>
					
					<?php
				    }
					?>
					
				<!--Start Notification table-->	
					<?php
				$ID = $_SESSION['ID'];
				$sqlc = "select * from notification where s_id=$ID";
				$queryc = mysql_query($sqlc);
				$raws1 = mysql_fetch_array($queryc);
				$s_id1 = $raws1['s_id'];
				if($s_id1 != '')
				{
				?>	
					<h3>Notification</h3>
			<table>
				<tr>
				<th>Notification</th>
				<th>Date</th>
				</tr>
					<?php
				
					$date = date("Y/m/d");
					$ID = $_SESSION['ID'];
					$sql = "select * from notification where s_id='$ID' order by date desc";
					$result = mysql_query($sql);
					while($raw1 = mysql_fetch_assoc($result))
					{
					?>
					<tr>
					
					<td><?php echo $raw1['notification'];?></td>
					<td><?php echo $raw1['date'];?></td>
									
					</tr>
					<?php }?>
					</table>
					<?php
			     	}
					?>
					<!--End Notification table-->
					
			<!--Start Recommendation table-->		
				<?php
				$ID = $_SESSION['ID'];
				$sqlc = "select * from recommendation where s_id=$ID";
				$queryc = mysql_query($sqlc);
				$raws1 = mysql_fetch_array($queryc);
				$s_id1 = $raws1['s_id'];
				if($s_id1 != '')
				{
				?>	
					
					<h3>Recommendation</h3>
			<table>
				<tr>
				<th>recommendation</th>
				<th>Date</th>
				</tr>
					<?php
				
					$date = date("Y/m/d");
					$ID = $_SESSION['ID'];
					$sql = "select * from recommendation where s_id='$ID' order by date desc";
					$result = mysql_query($sql);
					while($raw2 = mysql_fetch_assoc($result))
					{
					?>
					<tr>
					
					<td><?php echo $raw2['recommendation'];?></td>
					<td><?php echo $raw2['date'];?></td>
									
					</tr>
					<?php }?>
					</table>
					<?php
			       	}
					?>
					
					<!--End Recommendation table-->
					
				<!--Start Weekly Observation Report table-->	
					<?php
				$ID = $_SESSION['ID'];
				$sqlc = "select * from weekly_observation_report where s_id=$ID";
				$queryc = mysql_query($sqlc);
				$raws1 = mysql_fetch_array($queryc);
				$s_id1 = $raws1['s_id'];
				if($s_id1 != '')
				{
				?>	
					
					<h3>Weekly Observation Report</h3>
			<table>
				<tr>
				<th>course</th>
				<th>Areas of Improvement</th>
				<th>Positive Aspects of Personalities of child</th>
				<th>Action Taken by Institute to improve child performance</th>
				<th>Action to be Taken by the Parent's to improve child performance</th>
				<th>Suggested Course to improve further information</th>
				<th>Other Remarks</th>
				<th>Date</th>
				</tr>
					<?php
				
					$date = date("Y/m/d");
					$ID = $_SESSION['ID'];
					$sql = "select * from weekly_observation_report where s_id='$ID' order by date desc";
					$result = mysql_query($sql);
					while($raw3 = mysql_fetch_assoc($result))
					{
					?>
					<tr>
					
					<td><?php echo $raw3['course'];?></td>
			<td><?php echo $raw3['areas'];?></td>
			<td><?php echo $raw3['positive_aspects'];?></td>
			<td><?php echo $raw3['institute_to_improve'];?></td>
			<td><?php echo $raw3['parents_to_improve'];?></td>
			<td><?php echo $raw3['suggest_course'];?></td>
			<td><?php echo $raw3['other_remarks'];?></td>
			<td><?php echo $raw3['date'];?></td>
									
					</tr>
					<?php }?>
					</table>
		         <?php
				 }
				 ?>
		</div>	
        
	</div>
</div>
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
							Our company's mission is to produce educational materials that emphasize creativity and the pure enjoyment of learning.&nbsp;<a href="../about.php">Read more </a> </p>
                            
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
                        <p>Follow us</p>
                        <ul class="dt-sc-social-icons">
                        	<li class="facebook"><a href="https://www.facebook.com/Mylearningplanet" target="blank"><img src="images/facebook.png" alt="" title=""></a></li>
                            <li class="twitter"><a href="https://twitter.com/Mylearningplane" target="_blank"><img src="images/twitter.png" alt="" title=""></a></li>
                            <li class="gplus"><a href="https://plus.google.com/u/0/b/118178787253037045021/dashboard/overview" target="_blank"><img src="images/gplus.png" alt="" title=""></a></li>
                            <li class="pinterest"><a href="http://www.pinterest.com/mylearningplane" target="_blank"><img src="images/pinterest.png" alt="" title=""></a></li>
							 <li class="twitter"><a href="https://www.linkedin.com/company/my-learning-planet" target="_blank"><img src="images/link1.png" alt="" title=""></a></li>
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

   
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery-easing-1.3.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.inview.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
    <script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>       
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>  
    <script type="text/javascript" src="js/twitter/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>   
    <script type="text/javascript" src="js/shortcodes.js"></script>   
    <script type="text/javascript" src="js/custom.js"></script>
    
    <!-- Layer Slider --> 
    <script type="text/javascript" src="js/jquery-transit-modified.js"></script> 
    <script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script> 
    <script type='text/javascript' src="js/greensock.js"></script> 
    <script type='text/javascript' src="js/layerslider.transitions.js"></script> 
    <!--<script type="text/javascript">var lsjQuery = jQuery;</script>--> 
    <script type="text/javascript">var lsjQuery = jQuery;</script><script type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1240, layerscontainer: 1060, skinsPath: 'js/layerslider/skins/'}) } }); </script>
    
</body>
</html>
