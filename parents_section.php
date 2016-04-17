<?php 
error_reporting(0);
session_start();
include_once("connection.php");
if(isset($_POST['register']))
{
$username=$_POST['username'];
 
  $result=mysql_query("select * from child_registration where username='$username'");
 $sett=mysql_num_rows($result);
  
  if ($sett > 0) //invalid email returns
  {
	  $messssg = "This email id is already registered!!";
    // echo "<script type=\"text/javascript\">".
        // "alert('This email id is already registered!!');".
        // "</script>";
  }
else {

//valid email...
    //filling variables from HTML form
    $to = "shivinder@webfries.com";//recieving email 
    $subject = "New Account Created";//email subject
    $username = $_REQUEST['username'];//user's email for responding
			 
$submit = $_POST['register'];
$child_name = $_POST['child_name'];
$age = $_POST['age'];
$class = $_POST['class'];
$school = $_POST['school'];
$username = $_POST['username'];
$password = $_POST['password'];
$Confirm_password = $_POST['Confirm_password'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$emrgency_contact = $_POST['emrgency_contact'];
$serviceid = $rows['id'];
$other_specific_services = $_POST['other_specific_services'];
$how_do_you_come = $_POST['how_do_you_come'];
$date = date("Y/m/d");

//textareaplease
    //combines to form email body
  $message = "A new user create an account
              User Id:  $username 
			  Password :$password";
  $header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= "From: $to";
$subject1 = "Verify Your Email";//email subject
	 $message1 = "<html>
    <head>
    <style>
        body
        {
            width: 700px;
            height: auto;
        }
        h1
        {
            background-color: blue;
            color:white;
            margin-top: 5px;
            margin-bottom: 5px;
            text-align:center;
        }
        #message
        {
            width: 500px;
            height: auto;
            margin-bottom: 5px;
            margin-left: auto;
            margin-right: auto;
        }
        #sign
        {
           
            color: black;
            margin-top: 5px;
            margin-bottom: 5px;
           
        }
		
    </style>
    </head>
    <body>
     
        <div id = 'message'>

            <p>Dear ".$child_name."  ,</p><p>Welcome to My Learning Planet Family! </p>  
          Click <a href =' http://mylearningplanet.in/verify.php?username=".$username."  
             '  style='text-decoration:underline;'>here</a> to verify your email. We hate spams as much as you do.
        </div>
        <div id = 'sign'> Thanks,</div> <div id = 'sign'>Team My Learning Planet Family. </div> 
    </body>
                </html>";
	

    $from = "http://mylearningplanet.in/";//email sent from (generic user)
  $too=$username;
  if($password==$Confirm_password)
{
    mail($to,$subject,$message,$header);//PHP mail function combines variables
	   mail($too,$subject1,$message1,$header);//PHP mail function combines variables


$query = "insert into child_registration(child_name,age,class,school,username,password,address,contact_no,emergency_contact,other_specific_services,how_do_you_come,date)values('$child_name','$age','$class','$school','$username','$password','$address','$contact','$emrgency_contact','$other_specific_services','$how_do_you_come','$date')";
$result = mysql_query($query) or die(mysql_error());
$id = mysql_insert_id();
$service = $_POST['id'];
$course1 = $_POST['course1'];
foreach($_POST['course1'] as $selected){	
$query1="INSERT INTO add_service(s_id,new_service,date)VALUES('$id','$selected','$date')";
$res = mysql_query($query1);
/* echo $date1."</br>"; */
} 

$messsg="Submitted Successfully! Please check your inbox for verifying the E-Mail ID. Don't forget to check your SPAM folder in case its not delivered in Inbox.";
	
}
 else
 {
 $Pswdmesssg = '<p style="color: red;float: right;margin-right: 660px;font-size: 15px;">Passowrd Not Match!!</p>';
}
}}

?>

<?php
// session_start();
// include_once("connection.php");
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
<!--Start Forgot Password script-->
<?php
if(isset($_POST['forgotPass']))
{
$email = $_POST['forgotEmail'];
$sqls1 = "select * from child_registration where username='$email'";
$results1 = mysql_query($sqls1);
$raws2 = mysql_fetch_array($results1);
$email_id = $raws2['username'];
$password = $raws2['password'];
$to = $email;
$email = trim($_POST['email']);
$subject = 'Your Password';
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= "From: My Learning Planet Family";
$mssg = "Your Password is:". $password;
$mail = mail($to,$subject,$mssg,$header);
if($mail)
{
$mesg = '<h5 style="color:green;">Your Password has sent!!</h5>';	
 echo '<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
                    <script>
                   $(document).ready(function(){
					openpopup("popup2");
				   });
                    </script>';	
}
else
{
	$mesg = '<h5 style="color:red;">Your Email Id Not correct!</h5>';
	echo '<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
                    <script>
                   $(document).ready(function(){
					openpopup("popup2");
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
<title>My Learning Planet - Parent Section</title>
<meta name="description" content="">
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
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
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

<!--start form validation-->
<script type="text/javascript" >
function formValidator(){
	// Make quick references to our fields
	var child_name = document.getElementById('child_name');
	var age = document.getElementById('age');
	var class1 = document.getElementById('class1');
	var school = document.getElementById('school');
	var username = document.getElementById('username');
	var password = document.getElementById('password');
	var address = document.getElementById('address');
	var contact = document.getElementById('contact');
	var emrgency_contact = document.getElementById('emrgency_contact');
	var serviceType = document.getElementById('serviceType');
	var other_specific_services = document.getElementById('other_specific_services');
	var how_do_you_come = document.getElementById('how_do_you_come');
	var confirm_password = document.getElementById('confirm_password');
	
	
	// Check each input in the order that it appears in the form!
	if(isAlphabet(child_name, "Please enter only letters for child Name")){
	 if(notEmpty(age, "Please select Age!!")){
		if(isAlphanumeric(class1, "Please Enter Valid Class!!")){
			if(isAlphabet(school, "Please enter only letters for school Name")){
			if(emailValidator(username, "Please enter a valid email address")){
			if(notEmpty(password, "Please fill password")){
			if(notEmpty(address, "Please fill Address")){
				if(phonenumber(contact, "please enter Valid contact no!!")){
				if(phonenumber(emrgency_contact, "please enter Valid Emergency contact no!!")){
				
				if(notEmpty(other_specific_services, "Please fill other specific service!!")){
				
				<!-- if(lengthRestriction(contact, 10, 12)){ -->
				if(madeSelection(how_do_you_come, "Please Choose!!")){
					if(passwordMissmatch(confirm_password, "Password Mismatch!!")){	
							return true;
						}
					}
					
			 } 
			    } 
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
  
  function passwordMissmatch(elem, helperMsg)  
  {
   var password = document.getElementById("password");
   var confirm_password = document.getElementById("confirm_password");
    if(elem.value.match(password) == elem.value.match(confirm_password))
  {

  return true;  

}
else
{
     
}
}
</script>
<!--End form validation-->


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
<meta name="google-site-verification" content="GF_YQkSHiTZxggdKSymppWZO2ZI5H3bRNgkT1dSl2Dc" />
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
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
							<li class="green current_page_item"> <a href="parents_section.php" class="bol"> Parent`s Section </a> </li>
							
							
							<li class="menu-item-simple-parent menu-item-depth-0 lavender"><a href="blog.php" title="">Blog</a>
                              
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
                	<h1>Parent's Section</h1>
                    <div class="breadcrumb">
                        <a href="index.php">Home</a>
                        <span class="fa fa-angle-double-right"></span>
                        <span class="current">parent's</span>
                    </div>
                </div>
            </div>
            <!--breadcrumb-section ends-->
            <!--container starts-->
            <div class="container">
            	<!--primary starts-->
            	<section id="primary" class="content-full-width">
				
					<!-- <div id="map"> </div> -->
                    
                   <!--  <div class="dt-sc-hr"> </div> -->
                    
                    <!--dt-sc-two-third starts-->
					<?php
					 if(isset($messssg))
						{
                      echo '<p style="color: red;float: right;
                            margin-right: 485px;font-size: 15px;">'.$messssg.'</p>';
                        }
					?>
					
					<?php 
                        if(isset($messsg))
						{
                      echo '<p style="color: green;float: right;
                            margin-right: 485px;font-size: 15px;">'.$messsg.'</p>';
                        }
                     ?>
					 <?php 
                        if(isset($Pswdmesssg))
						{
                      echo $Pswdmesssg;
                        }
                     ?>
                    <div class="column dt-sc-three-fourth first contact_form_outer p_s">
                        <form class="contact-form" method="post" onsubmit='return formValidator()'>
                        	<h2>Registration Form</h2>
                            
						   <table class="p_ss">
							<tr>
								<td class="p_ssl">Child's Name</td>
<td><input type="text" id="child_name" name="child_name" value="<?php echo $_POST['child_name'];?>"></td>
							</tr>
							<tr>
								<td>Age</td>
								<td><select name="age" id="age" class="drop">
								<option value="">--Year--</option>
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
								</td>
							</tr>
							<tr>
								<td>Class</td>
			<td><input type="text" id="class1" name="class" value="<?php echo $_POST['class'];?>" ></td>
							</tr>
							<tr>
								<td>School</td>
								<td><input type="text" id="school" name="school" value="<?php echo $_POST['school'];?>"></td>
							</tr>
							<tr>
								<td>User Name</td>
								<td><input type="text" id="username" name="username" placeholder="Email Id" value="<?php echo $_POST['username'];?>"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" id="password" name="password" value="<?php echo $_POST['password'];?>"></td>
							</tr>
							<tr>
								<td> Confirm Password</td>
								<td><input type="password" id="Confirm_password" name="Confirm_password" value="<?php echo $_POST['Confirm_password'];?>"></td>
							</tr>
							<tr>
								<td> Address</td>
								<td><input type="text" id="address" name="address" value="<?php echo $_POST['address'];?>"></td>
							</tr>
							
							<tr>
								<td>Contact No</td>
								<td><input type="text" id="contact" name="contact" value="<?php echo $_POST['contact'];?>"></td>
							</tr>
							<tr>
								<td>Emergency Contact No</td>
								<td><input type="text" id="emrgency_contact" name="emrgency_contact" value="<?php echo $_POST['emrgency_contact'];?>"></td>
							</tr>
							<tr>
								<td>Services Opted For</td>
								
								<td>
									<table>
									<?php
									$query = "select * from all_services";
									$result1 = mysql_query($query);
									while($rows = mysql_fetch_assoc($result1))
									{
									?>
										<tr><td><input type="checkbox" name="course1[]" value="<?php echo $rows['service_name'];?>"><?php echo $rows['service_name'];?></td>
								<!-- <td><input type="checkbox" name="course2" value="Mathematics Classes">Mathematics Classes</td> --> </tr>
								
									
									<input type="hidden" name="service[]" value="<?php echo $rows['id'];?>">
									
									<?php
                                    /* $id1 = $rows['id'];									
									echo "$id1"; */
									}
									
									?>
								</table></td>
								
							</tr>
							<tr>
								<td>Other Specific Services</td>
								<td><input type="text" id="other_specific_services" name="other_specific_services" value="<?php echo $_POST['other_specific_services'];?>"></td>
							</tr>
							<tr>
							<td>How Do You Come To Know About Us</td>
							<td>
							<select class="drop" id="how_do_you_come" name="how_do_you_come">
							<option value="">--Please Choose--</option>
                               <option value="Friends">Friends</option>
                               <option value="Social Media">Social Media</option>
                               <option value="Website">Website</option>
                               <option value="Brochure">Brochure</option>
                               <option value="Others">Others</option>
                            </select>
							</td>
							</tr>
						   </table>
						   
                            <p>
                                <input name="register" type="submit" class="dt-sc-button medium" value="Submit Detail">
                            </p>
                        </form>
                    </div>
                    <!--dt-sc-two-third ends-->
                    
                    <!--dt-sc-one-third starts-->
					
					<!--popup2 start-->
		
			 <div id="bg" class="popup_bg"></div> 
				<div id="popup2" class="popup">
                           			
				<form action="parents_section.php" method="post">
                    	<h2>Forgot Password</h2>
						   <?php 
				            echo $mesg;
				             ?>	
                        <ul class="class_hours">
                        <li><input type="email" name="forgotEmail" placeholder="username" required></li>
                            <li><input type="submit" name="forgotPass" value="SUBMIT"></li>
                            </ul>
						</form>	
				</div>
		
		<!--popup2 end-->	
                    <div class="column dt-sc-one-fourth class_hours">
					
					<form action="login.php" method="post">
                    	<h2>Sign In</h2>
                        <ul class="class_hours">
                        	<li><input type="email" name="login_username1" placeholder="username"></li>
                            <li><input type="password" name="login_password1" placeholder="password"></li>
                            <li><a href="#" onclick="openpopup('popup2')">Forgot Password</a></li>
							
							<?php 
							if(isset($_GET['token1']))
							{
								echo '<p style="color:red;font-size:12px;margin-left: -34px;">Username or Password not Match!</p>';
							}
							?>
							<?php 
							if(isset($_GET['token2']))
							{
								echo '<p style="color:red;font-size:12px;margin-left: -69px;">Please verify your email!</p>';
							}
							?>
							
                            <li><input type="submit" name="login1" value="LOGIN"></li>
                            
                        </ul>
						</form>
                        <div class="dt-sc-hr-small"></div>
                        <p><strong><span class="highlighter">We care</span> about your dearest kids!</strong></p><ul class="dt-sc-social-icons">
                        	<li class="facebook"><a href="https://www.facebook.com/Mylearningplanet" target="blank"></a></li>
                            <li class="twitter"><a href="https://twitter.com/Mylearningplane" target="_blank"></a></li>
                            <li class="gplus"><a href="https://plus.google.com/u/0/b/118178787253037045021/dashboard/overview" target="_blank"></a></li>
                            <li class="pinterest"><a href="http://www.pinterest.com/mylearningplane" target="_blank"></a></li>
							 <li class="linke"><a href="https://www.linkedin.com/company/my-learning-planet" target="_blank"></a></li>
                        </ul>
                    </div>
                    <!--dt-sc-one-third ends-->
                    
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
<div class="fb-like-box" data-href="https://www.facebook.com/mylearningplanet" data-width="200px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
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

    <script type="text/javascript" src="js/shortcodes.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
    <script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/twitter/jquery.tweet.min.js"></script>    
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/jquery.gmap.min.js"></script> 
    <script type="text/javascript" src="js/shortcodes.js"></script>      
    <script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>




