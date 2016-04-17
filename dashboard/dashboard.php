<?php
error_reporting(0);
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
<link href="../css/shortcodes.css" rel="stylesheet" type="text/css">
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
function formValidator(){
	// Make quick references to our fields
	var age = document.getElementById('age');
	var class1 = document.getElementById('class1');
	var school1 = document.getElementById('school');
	var password = document.getElementById('password');
	var address = document.getElementById('address');
	var contact = document.getElementById('contact');
	var emergency_contact = document.getElementById('emergency_contact');
	var other_specific_services = document.getElementById('other_specific_services');
	
	
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
/* 
function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
} */

/* function madeSelection(elem, helperMsg){
	if(elem.value == "Please Choose"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
} */

/* function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
} */

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

<!--start addService validation-->

<script type="text/javascript" >
function formValidator2(){
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


<!--end addService validation-->

<script>
function myFunction() {
    location.reload();
}
</script>

<!--start Notification Ajax-->
<script>
$(document).ready(function(){
$("#notyfi").click(function(){
var status=1;
//alert("test" + text);
var datas='status='+status;
$.ajax({
url:'http://mylearningplanet.in/dashboard/noty_update.php',
type:'post',
data:datas,
success:function(e){
$("#counter").hide();
}
});
});
});
</script>
<!--End Notification Ajax-->

<!--start Recommendation Ajax-->
<script>
$(document).ready(function(){
$("#recommend").click(function(){
var status=1;
//alert("test" + text);
var datas='status='+status;
$.ajax({
url:'http://mylearningplanet.in/dashboard/recom_update.php',
type:'post',
data:datas,
success:function(e){
$("#counters").hide();
}
});
});
});
</script>
<!--End Recommendation Ajax-->

<!-- start logout flip script-->

<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<!-- end logout flip script-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body>
<div class="header">
<div class="wrapper">
<header>
	  
            <div class="container">
                <div class="logo">
                    <a href="http://www.mylearningplanet.in/" title="My Learning Planet"><img src="images/my_learning_planet.png" alt="My Learning Planet" title="My Learning Planet"></a>
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
				            echo $msg;
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
							<li style="color: #fff;"><a href="#" style="color: #fff;margin-left: 13px;"><?php echo "Edit Profile";?></a></li>
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



</div>
</div>
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
<!-- Start Notification query-->
<?php
$ID = $_SESSION['ID'];
$sqla = "select * from notification where s_id=$ID AND status=0";
$ress = mysql_query($sqla);
$rowss = mysql_fetch_array($ress);
$counts = mysql_num_rows($ress); 
?>
<!-- End Notification query-->

<!--Start Recommendation query-->
<?php
$ID = $_SESSION['ID'];
$queryr = "select * from recommendation where s_id=$ID AND status=0";
$resr = mysql_query($queryr);
$raw9 = mysql_fetch_array($resr);
$counters = mysql_num_rows($resr);
?>
<!--End Recommendation query-->

<div class="result">
<div class="dashb">
<div id="vtabs1">
	<div>
		<ul>
			<li><a href="#vtabs-content-a">Update Account Details</a></li>
			<li><a href="#vtabs-content-b">Opt For New Service</a></li>
			<li><a href="#vtabs-content-c" id="notyfi">Notification</a>
			<?php
			if($counts != 0)
			{
			?>
			<span id="counter" style="padding:5px;color:#fff; background:#c00; width:16px; height:16px; font-size:12px; margin-left:15px;" ><?php echo $counts;?></span>
			<?php
			}
			?>
			</li>
			<li><a href="#vtabs-content-d">Weekly Observation Report</a></li>
			<li><a href="#vtabs-content-e" id="recommend">Recommendation</a>
			<?php
			if($counters != 0)
			{
			?>
			<span id="counters" style="padding:5px;color:#fff; background:#c00; width:16px; height:16px; font-size:12px; margin-left:15px;" ><?php echo $counters;?></span>
			<?php
			}
			?>
			</li>
            <li><a href="#vtabs-content-f">History</a></li>
		</ul>
	</div>
	<div>
	
	<?php 
	include_once("connection.php");
	$ID = $_SESSION['ID'];
	$sql = "select * from child_registration where id = $ID";
	$result = mysql_query($sql);
	$raw = mysql_fetch_assoc($result);
	?>
	
	<?php
	
	if(isset($_POST['update']))
{

$update = $_POST['update'];

$age = $_POST['age'];
$class = $_POST['class'];
$school1 = $_POST['school1'];
$password = $_POST['password'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$emergency_contact = $_POST['emergency_contact'];
/* $other_specific_services = $_POST['other_specific_services']; */

$sql = "update child_registration set age='$age',class='$class',school='$school1',password='$password',address='$address',contact_no='$contact',emergency_contact='$emergency_contact' where id='$ID'";
$result = mysql_query($sql);
if($result)
{
$mssg = 'Your Information Successfully Updated!!';	
// echo "<script type=\"text/javascript\">".
        // "alert('successfully updated');".
        // "</script>";
		// header("Location: index.php");
		/* header('Refresh: 2; url=index.php'); */
}

}
	
	?>
	<?php 
          echo '<h4 style="color:red;float: right;
          margin-right: 644px;">'.$mssg.'</h4>';
	?>
		<div id="#vtabs-content-a">
			<!--popup8 start-->
		
			<div id="bg" class="popup_bg"></div> 
			
				<div id="popup8" class="popup"> 
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit='return formValidator()'>
						<div class="refferal">
							<div class="loginsec">
							  
							<div class="accdetails">
            <div class="accspan">Child Name :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['child_name'];?>" readonly name="child_name" id="child_name" class="form-control "></div>
            </div>
            <div class="accdetails">
            <div class="accspan">Age :</div>
            <div class="accspandet">
			<select id="age" name="age">
			    <option value="<?php echo $raw['age'];?>"><?php echo $raw['age'];?></option>
								
								<option value="5 Year">5</option>
								<option value="6 Year">6</option>
								<option value="7 Year">7</option>
								<option value="8 Year">8</option>
								<option value="9 Year">9</option>
								<option value="10 Year">10</option>
								<option value="11 Year">11</option>
								<option value="12 Year">12</option>
								<option value="13 Year">13</option>
								<option value="14 Year">14</option>
								<option value="15 Year">15</option>
								
			</select>
	<!-- <input type="text" value="<?php echo $raw['age'];?>" name="age" id="age" class="form-control"> -->
	</div>
            </div>
            <div class="accdetails">
            <div class="accspan">Class :</div>
            <div class="accspandet"><input type="text" value="<?php echo $raw['class'];?>" name="class" id="class1" class="form-control"></div>
            </div>
            <div class="accdetails">
            <div class="accspan">School :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['school'];?>" name="school1" id="school" class="form-control"></div>
            </div>
			
			 <div class="accdetails">
            <div class="accspan">Username :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['username'];?>" readonly name="username" id="username" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Password :</div>
            <div class="accspandet"> <input type="password" value="<?php echo $raw['password'];?>" name="password" id="password" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Address :</div>
            <div class="accspandet"><input type="address" name="address" id="address" value="<?php echo $raw['address'];?>" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Contact No :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['contact_no'];?>" name="contact" id="contact" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Emergency Contact No :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['emergency_contact'];?>" name="emergency_contact" id="emergency_contact" class="form-control"></div>
            </div>
			<div class="accdetails">
            
            <div class="butsave"> <input name="update" type="submit" class="sbtn2" value="Update"></div>
            </div>
			                
			 </div>
			</div></form>

</div>
		
		<!--popup8 end-->
		
			<div class="acc">
            <div class="personade">
            <h3>Your Accounts  <span><a href="#" onClick="openpopup('popup8')">(edit)</a></span></h3>
            <div class="accdetails">
            <div class="accspan">Child Name: </div>
            <div class="accspandet"> <?php echo $raw['child_name'];?></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Age: </div>
            <div class="accspandet"> <?php echo $raw['age'];?></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Class: </div>
            <div class="accspandet"> <?php echo $raw['class'];?></div>
            </div>
			<div class="accdetails">
            <div class="accspan">School: </div>
            <div class="accspandet"> <?php echo $raw['school'];?></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Username: </div>
            <div class="accspandet"> <?php echo $raw['username'];?></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Password: </div>
            <div class="accspandet"> <?php echo $raw['password'];?></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Address: </div>
            <div class="accspandet"> <?php echo $raw['address'];?></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Contact No: </div>
            <div class="accspandet"> <?php echo $raw['contact_no'];?></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Emergency Contact No: </div>
            <div class="accspandet"> <?php echo $raw['emergency_contact'];?></div>
            </div>
			
			<!-- <div class="accdetails">
            <div class="accspan">Services Opted For: </div>
            <div class="accspandet"> <?php echo $raw5['new_service'];?></div>
            </div> -->
			<div class="accdetails">
            <div class="accspan">Other Specific Services: </div>
            <div class="accspandet"> <?php echo $raw['other_specific_services'];?></div>
            </div>
			<div class="accdetails">
            <div class="accspan">How Do You Come To Know About Us: </div>
            <div class="accspandet"> <?php echo $raw['how_do_you_come'];?></div>
            </div>
            </div>
            
            </div>
		</div>
		
		<?php 
		if(isset($_POST['add1']))
		{
			$selectService1 = $_POST['selectService1'];
			$ID = $_SESSION['ID'];
			$sql1 = "select * from add_service where s_id='$ID' and new_service='$selectService1'";
		    $res = mysql_query($sql1);
			$raws2 = mysql_fetch_array($res);
		    $new_service = $raws2['new_service'];
			  if(isset($new_service))
				{
					 echo "<script type=\"text/javascript\">".
                     "alert('This service already taken by you..');".
                      "</script>";
			    }
			    else
			    {
			     $to = "gaurav@mylearningplanet.in";//recieving email 
                 $subject = "New Service Opted";//email subject
		         $username = $_SESSION['username'];
			     $add1 = $_POST['add1'];
			     $date1 = date("Y/m/d");
			     $selectService1 = $_POST['selectService1'];
			     $ID = $_SESSION['ID'];
			     $message = "New Service Opted for,\n User Id:  $username\n Service :$selectService1";
			     $header  = 'MIME-Version: 1.0' . "\r\n";
                 $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                 $header .= "From: My Learning Planet Family";
				 mail($to,$subject,$message,$header);//PHP mail function combines variables			
		         $sql = "insert into add_service(s_id,new_service,date)values('$ID','$selectService1','$date1')";
		         $result = mysql_query($sql);
			     echo "<script type=\"text/javascript\">".
                       "alert('Insert Successfully..');".
                        "</script>";
			    }
		}
		?>
		
		<!--start delet query-->
		      <?php
			   $delt = $_GET['del'];
				$ID = $_SESSION['ID'];
				$sql = "delete from add_service where s_id='$ID' and new_service='$delt'";
				$result = mysql_query($sql);
				?>
		<!--end delet query-->
		
		<div id="#vtabs-content-b">
		    <div class="acc">
            <div class="personade">
			
            <h3>Services</h3>
			 <table class="history">
			<tr>
				<th class="th1">Services</th>
				<th class="th1">Date</th>
				<th class="th1">Remove</th>
			</tr>
			<?php 
			    
				$sql = "select * from add_service where s_id='$ID' order by date desc";
				$result = mysql_query($sql);
				while($raws1 = mysql_fetch_array($result))
				{
				/* echo $raws1['new_service'];	 */
				?>
			<tr>
			<td class="th1"><?php echo $raws1['new_service'];?></td>
			<td class="th1"><?php echo $raws1['date'];?></td>
			<td class="th1"><a href="index.php?del=<?php echo $raws1['new_service'];?>" onclick="return confirm('Are you sure you want to delete this item?');"><img src="images/DeleteRed.png" alt="delete" width="35"></a></td>
			</tr>
			
			<?php } ?> 
			</table> 
			<form method="post" onSubmit="return formValidator2()">
			<div class="accdetails">
            <div class="accspan">Add New Service:</div>
            <div class="accspandet">
			<select name="selectService1" id="selectService1">
			<option value="">--Please Select Service--</option>
			<?php
			$sql = "select * from all_services";
			$result = mysql_query($sql);
			while($raws = mysql_fetch_array($result))
			{
			?>
			<option value="<?php echo $raws['service_name'];?>"><?php echo $raws['service_name'];?></option>
			<?php } ?>
			</select>
			
			</div>
			<div class="accdetails">
            <div class="butsave"> <input name="add1" id="add1" type="submit" class="sbtn2" value="ADD SERVICE"></div>
            </div>
	        
			</div>
           </form>
            </div>
            
            </div>
		</div>
		
		<div id="#vtabs-content-c">
			<div class="acc">
            <div class="personade">
            <h3>Notification</span></h3>
            <div class="accdetails">
            <div class="accspan"><!-- Event : --></div>
            <div class="accspandet"><!-- <?php echo $raw['notification'];?> --></div>
            </div>
			
			   <table class="history">  
				<tr>
				<th class="th1">Date</th> 
				<th class="th1">Notification</th>
				<th class="th1">Attachment</th>
				</tr>
				<?php 
				$ID = $_SESSION['ID'];
				$date1 = $raw['notification'];
				$date = date("Y/m/d");
				$sql = "select * from notification where s_id='$ID' order by date desc";
				$result = mysql_query($sql);
				while($raw = mysql_fetch_assoc($result))
				{
				?>
				<tr>
				 <td class="th1"><?php echo $raw['date'];?></td> 
				<td class="th1"><?php echo $raw['notification'];?></td>
				<td class="th1"><a target="_blank" href="http://mylearningplanet.in/admin/attachment/<?php echo $raw['attachment'];?>"><?php echo $raw['attachment'];?></a></td>
				</tr>
				<?php }?>
			   </table>		
				
            
            </div>
            
            </div>
		</div>
		
		<div id="#vtabs-content-d">
			<div class="acc">
            <div class="personade">
            <h3>Weekly Observation Report</h3>
            <div class="accdetails">
            <div class="accspan"></div>
            <div class="accspandet"><!--Sachin@gmail.com --></div>
            </div>
			
			<table class="history">
			<tr>
				<th class="th1">Sr. No</th>
				<th class="th1">course</th>
				<th class="th1">Areas of Improvement </th>
				<th class="th1">Positive Aspects of Personalities of child</th>
				<th class="th1">Action Taken by Institute to improve child performance</th>
				<th class="th1">Action to be Taken by the Parent's to improve child performance</th>
				<th class="th1">Suggested Course to improve further information</th>
				<th class="th1">Other Remarks</th>
				<th class="th1">Date</th>
			</tr>
			<?php 
			$sr=1;
			$ID = $_SESSION['ID'];
			$sql = "select * from weekly_observation_report where s_id='$ID' order by date desc";
			$result = mysql_query($sql);
			while($raw = mysql_fetch_assoc($result))
			{
			?>
			<tr>
		 	<td class="th1"><?php echo $sr++;?></td>  
			<td class="th1"><?php echo $raw['course'];?></td>
			<td class="th1"><?php echo $raw['areas'];?></td>
			<td class="th1"><?php echo $raw['positive_aspects'];?></td>
			<td class="th1"><?php echo $raw['institute_to_improve'];?></td>
			<td class="th1"><?php echo $raw['parents_to_improve'];?></td>
			<td class="th1"><?php echo $raw['suggest_course'];?></td>
			<td class="th1"><?php echo $raw['other_remarks'];?></td>
			<td class="th1"><?php echo $raw['date'];?></td>
			
			</tr>
			<?php  } ?>
			</table>
			
            
            </div>
            
            </div>
		</div>
		
		
		<div id="#vtabs-content-e">
			<div class="acc">
            <div class="personade">
            <h3>Recommendation</h3>
			<div class="accdetails">
            <div class="accspan"></div>
            <div class="accspandet"><!--Sachin@gmail.com --></div>
            </div>
            <table class="history">  
				<tr>
			 	<th class="th1">Date</th> 
				<th class="th1">Recommendation</th>
				</tr>
				<?php 
				$ID = $_SESSION['ID'];
				$sql = "select * from recommendation where s_id='$ID' order by date desc";
				$result = mysql_query($sql);
				while($raw = mysql_fetch_assoc($result))
				{
				?>
				
				<tr>
				 <td class="th1"><?php echo $raw['date'];?></td> 
				<td class="th1"><?php echo $raw['recommendation'];?></td>
				</tr>
				<?php }?>
			   </table>	
           
            </div>
            
            </div>
		</div>
		
		<div id="#vtabs-content-f">
		<!--start popup1 new service
		
			 <div id="bg" class="popup_bg"></div> 
				<div id="popup1" class="popup"> 
					<form  action="#" method="post">
						<div class="refferal">
							<div class="loginsec">
							  
							<table>
								<tr>
									<th>Sr.No</th>
									<th>New Services</th>
									<th>Date</th>
								</tr>
								<?php
								$sr=1;
								$date = date("Y/m/d");
								$sql = "select * from add_service where s_id='$ID' order by date desc";
								$result = mysql_query($sql);
								while($raw = mysql_fetch_assoc($result))
								{
								?>
								<tr>
									<td><?php echo $sr++;?></td>
									<td><?php echo $raw['new_service'];?></td>
									<td><?php echo $raw['date'];?></td>
									
								</tr>
								<?php }?>
							</table>
			                
							</div>
			</div></form>

</div> 
		
		 end popup1 new service-->
		
		<!--start popup2 notification-->
		
		<!--end popup2 notifuication-->
		
		
		<!--start popup3 recommendation-->
		
		<!--end popup3 recommendation-->
		
		<!--start popup4 weekly observation report-->
		
		<!--end popup4 weekly observatopn report-->
		
		
			<div class="acc">
            <div class="personade">
            <h3>History</h3>
			 <div class="accdetails">
            <div class="accspan"><!-- Other Remarks : --></div>
            <div class="accspandet"></div>
            </div> 
			
			<table class="history">
			<tr>
				<th class="th1">Date</th>
				<th class="th1">Description</th>
				<th class="th1">Details</th>
			</tr>
			
			<tr>
			<td class="th1"><?php echo $_SESSION['date'];?></td>
			<td class="th1">New Services,<br>
			Notification,<br>
			Recommendation,<br>
			weekly Observation Report</td>
			<td class="th1" width="120px"><!-- <a href="#" onclick="openpopup('popup1')">New Services</a><br>
			<a href="#" onclick="openpopup('popup2')">Notification</a><br>
			<a href="#" onclick="openpopup('popup3')">Recommendation</a><br>
			<a href="#" onclick="openpopup('popup4')">weekly Observation Report</a> --> <a href="details.php" target="_blank">Details</td>
			</tr>
			
			</table>
			
            </div>
			
			
			
			<!-- <div class="accdetails">
            <table>
				<tr>
					<td></td>
				</tr>
            </table>
            </div> -->
            
			
                       
            </div>
            
            </div>
		</div>
		
		
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
							<?php
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
                	<p class="copyright-info">© 2014 My Learning Planet. All rights reserved. Website by <a href="http://www.webfries.com" title="" target="blank"> Webfries </a></p>
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
