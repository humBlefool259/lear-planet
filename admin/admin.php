<?php
include_once("lock.php");
?> 
<?php
error_reporting(0);
include_once("connection.php");
if(isset($_POST['register']))
{
$username=$_POST['username'];
 
  $result=mysql_query("select * from child_registration where username='$username'");
 $sett=mysql_num_rows($result);
  
  if ($sett > 0) //invalid email returns
  {
    echo "<script type=\"text/javascript\">".
        "alert('This email id is already registered!!');".
        "</script>";
  }
  
 else {

//valid email...
    //filling variables from HTML form
    $to = "gaurav@mylearningplanet.in";//recieving email 
    $subject = "New Account Created";//email subject
    $username = $_REQUEST['username'];//user's email for responding 
  
$register = $_POST['register'];
$child_name = $_POST['child_name'];
$age = $_POST['age'];
$class = $_POST['class1'];
$school = $_POST['school'];
$username = $_POST['username'];
$password = $_POST['password'];
$Confirm_password = $_POST['Confirm_password'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$emrgency_contact = $_POST['emrgency_contact'];
$other_specific_services = $_POST['other_specific_services'];
$how_do_you_come = $_POST['how_do_you_come'];
$date = date("Y/m/d");

//textareaplease
    //combines to form email body
  $message = "A new user create an account,\n User Id:  $username\n Password :$password";
  $header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= "From: My Learning Planet Family";
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

            <p>Dear ".$child_name."  ,</p><p>Welcome to My Learning Planet Family</p>  
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
/* $serviceID = $selected['id'];	 */
$course1 = $_POST['course1'];
foreach($course1 as $selected){	
$query1="INSERT INTO add_service(s_id,new_service,date)VALUES('$id','$selected','$date')";
$res = mysql_query($query1);
} 
$messsg="Submitted Successfully! Please check your inbox for verifying the E-Mail ID. Don't forget to check your SPAM folder in case its not delivered in Inbox.";
}
else
 {
 echo "<script type=\"text/javascript\">".
        "alert('Password not match!!');".
        "</script>";
 }
 
 
}
}




?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Dashboard</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-jvert-tabs-1.1.4.css" />
<link rel="stylesheet" type="text/css" href="css/my-job.css" />
<link rel="shortcut icon" href="favicon.ico" type="../image/x-icon" />
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

<script type="text/javascript">
$(document).ready(function(){
	load_options('','student');
});

function load_options(id,index){
var e = document.getElementById("student");
id= e.options[e.selectedIndex].id;
	$("#loading").show();
	if(index=="course"){
		$("#city").html('<option value="">Select city</option>');
	}
	$.ajax({
		url: "ajax.php?index="+index+"&id="+id,
		complete: function(){$("#loading").hide();},
		success: function(data) {
			$("#"+index).html(data);
		}
	})
}
</script>

<script type="text/javascript">
    $(document).ready(function () {
        var ajaxurl = "http://www.iimjobs.com/includes/getajaxresponse.php";
        var absUrl = 'http://www.iimjobs.com';
        var metaCatId = 0;
        metaPage(ajaxurl,absUrl,metaCatId);
    });
</script>

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

<!--start Weekly obeservation report validation-->

<script type="text/javascript" >
function formValidator1(){
	// Make quick references to our fields
	var student = document.getElementById('student');
	var course = document.getElementById('course');
	var areas = document.getElementById('areas');
	var positive = document.getElementById('positive');
	var institute_to_improve = document.getElementById('institute_to_improve');
	var parents_to_improve = document.getElementById('parents_to_improve');
	var suggest_course = document.getElementById('suggest_course');
	var other_remarks = document.getElementById('other_remarks');
	
	
	// Check each input in the order that it appears in the form!
	
	 if(notEmpty(student, "Please select student!!")){
	 if(notEmpty(course, "Please select course!!")){
	 if(notEmpty(areas, "Please fill!!")){
	 if(notEmpty(positive, "Please fill!!")){
	 if(notEmpty(institute_to_improve, "Please fill!!")){
	 if(notEmpty(parents_to_improve, "Please fill!!")){
	 if(notEmpty(suggest_course, "Please fill!!")){
	 if(notEmpty(other_remarks, "Please fill!!")){
	 	
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

  
  
</script>


<!--end Weekly obeservation report validation-->

<!--start add service validation-->

<script type="text/javascript" >
function formValidator2(){
	// Make quick references to our fields
	var selectStu = document.getElementById('selectStu');
	var selectService = document.getElementById('selectService');
	
	
	// Check each input in the order that it appears in the form!
	
	 if(notEmpty(selectStu, "Please select student!!")){
	 if(notEmpty(selectService, "Please select Service!!")){
							return true;
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

  
  
</script>


<!--end Add Service validation-->

<!--start notification validation-->

<script type="text/javascript" >
function formValidator3(){
	// Make quick references to our fields
	var select_Student = document.getElementById('select_Student');
	var notification = document.getElementById('notification');
	
	
	// Check each input in the order that it appears in the form!
	
	 if(notEmpty(select_Student, "Please select student!!")){
	 if(notEmpty(notification, "Please fill!!")){
							return true;
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

  
  
</script>


<!--end notification validation-->

<!--start recommendation validation-->

<script type="text/javascript" >
function formValidator4(){
	// Make quick references to our fields
	var select_Student1 = document.getElementById('select_Student1');
	var recommendation = document.getElementById('recommendation');
	
	
	// Check each input in the order that it appears in the form!
	
	 if(notEmpty(select_Student1, "Please select student!!")){
	 if(notEmpty(recommendation, "Please fill!!")){
							return true;
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

  
  
</script>
<!--end recommendation validation-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58838180-1', 'auto');
  ga('send', 'pageview');

</script>

<!--start facebook widget script-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--end facebook widget script-->

<!--start delete confirm-->
<script>
    function ConfirmDelete1()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script>    
<!--end delete confirm-->
</head>

<body>
<div class="header">
<div class="wrapper">

<!--header starts-->
 
		<header>
	  
            <div class="container">
                <div class="logo">
                    <a href="admin.php" title="My Learning Planet"><img src="images/my_learning_planet.png" alt="My Learning Planet" title="My Learning Planet"></a>
                </div>
		        
                <div class="contact-details">
                    
                    <ul>
							<?php
						   if(isset($_SESSION['IDD']))
						   {  
						   ?>   
						   <li><i class="fa fa-user"></i><a href="#"><?php echo "Hi";?>&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></a></li>
							<li><i class="fa fa-lock"></i><a href="logout.php"><?php echo "logout";?></a></li>
		                     <?php
							 } 
                             ?>
							</ul>   					
                </div> 
            </div>
            <!--menu-container starts-->
       <!--menu-container ends-->
        </header>
        <!--header ends-->
</div>
</div>
<div class="miscl">
<div class="clr"></div>
<div class="wrapper">
<div class="c-agent">
<h4>Admin:  <span>Dashboard</span></h4>

</div>
</div>
</div>
<div class="edit-conf">
<!-- <a href="#"> Edit Information</a> <a href="#"> Confirm &amp; Apply</a>  -->
</div>
						<?php 
                            echo '<p style="color:red;float: right;
                            margin-right: 572px;font-size:15px">'.$messsg.'</p>';

						?>
<div class="result">
<div class="dashb">
<div id="vtabs1">
	<div>
		<ul>
			<li><a href="#vtabs-content-a">Add Student</a></li>
			<li><a href="#vtabs-content-b">Display Student</a></li>
			<li><a href="#vtabs-content-c">Add Services</a></li>
			<li><a href="#vtabs-content-h">View Services</a></li>
			<li><a href="#vtabs-content-d">Notification</a></li>
			<li><a href="#vtabs-content-e">Recommendation</a></li>
			<li><a href="#vtabs-content-f">Weekly Observation Report</a></li>
			<li><a href="#vtabs-content-g">History</a></li>
		<!-- <li><a href="#vtabs-content-h">Message</a></li> -->
			
			
            
		</ul>
	</div>
	<div>
	
	
		<div id="#vtabs-content-a">
			<div class="acc">
            <div class="personade">
			<form id="form1" method="post" onsubmit='return formValidator()'>
            <h3>Student Registration</h3>
            <div class="accdetails">
            <div class="accspan">Child's Name: </div>
            <div class="accspandet"><input type="text" name="child_name" id="child_name" class="form-control"> </div>
            </div>
			<div class="accdetails">
            <div class="accspan">Age: </div>
            <div class="accspandet"><select name="age" id="age" class="drop">
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
								</select></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Class: </div>
            <div class="accspandet"><input type="text" name="class1" id="class1" class="form-control"> </div>
            </div>
			<div class="accdetails">
            <div class="accspan">School: </div>
            <div class="accspandet"><input type="text" name="school" id="school" class="form-control"></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Username: </div>
            <div class="accspandet"><input type="text" name="username" id="username" class="form-control" placeholder="Email Id"></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Password: </div>
            <div class="accspandet"><input type="password" name="password" id="password" class="form-control"></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Confirm Password: </div>
            <div class="accspandet"><input type="password" name="Confirm_password" id="Confirm_password" class="form-control"></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Address: </div>
            <div class="accspandet"><input type="address" name="address" id="address" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Contact No: </div>
            <div class="accspandet"><input type="text" name="contact" id="contact" class="form-control"></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Emergency Contact No: </div>
            <div class="accspandet"><input type="text" name="emrgency_contact" id="emrgency_contact" class="form-control"></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Services Opted For: </div>
            <?php
			$query = "select * from all_services";
			$result1 = mysql_query($query);
			while($rows = mysql_fetch_assoc($result1))
			{
			?>
			
			<div class="accspandet">
			<input type="checkbox" name="course1[]" value="<?php echo $rows['service_name'];?>"><?php echo $rows['service_name'];?>
		                        <!-- <input type="checkbox" name="course2" value="Mathematics Classes">Mathematics Classes
								<input type="checkbox" name="course3" value="Special Education">Special Education
								<input type="checkbox" name="course4" value="Language Lab">Language Lab
								<input type="checkbox" name="course5" value="Mind Lab">Mind Lab
								<input type="checkbox" name="course6" value="Topic Teaching/ Remedial Classes">Topic Teaching/ Remedial Classes
								<input type="checkbox" name="course7" value="Learning Material">Learning Material
								<input type="checkbox" name="course8" value="Special Assitance in Project work">Special Assitance in Project work
								
								<input type="checkbox" name="course9" value="Fun evenings">Fun evenings
							<input type="checkbox" name="course10" value="Birthday Parties">Birthday Parties -->
			   <input type="hidden" name="service[]" value="<?php echo $rows['id'];?>">
			   </div>
			<?php } ?>	
            </div>
			<div class="accdetails">
            <div class="accspan">Other Specific Services: </div>
            <div class="accspandet"><input type="text" name="other_specific_services" id="other_specific_services" class="form-control"></div>
            </div>
			<div class="accdetails">
            <div class="accspan">How Do You Come To Know About Us: </div>
            <div class="accspandet"><select class="form-control" id="how_do_you_come" name="how_do_you_come">
							<option value="">--Please Choose--</option>
                               <option value="Friends">Friends</option>
                               <option value="Social Media">Social Media</option>
                               <option value="Website">Website</option>
                               <option value="Brochure">Brochure</option>
                               <option value="Others">Others</option>
                            </select></div>
            </div>
			<div class="accdetails">
            
            <div class="butsave"> <input name="register" type="submit" class="sbtn2" value="ADD STUDENT"></div>
            </div>
			</form>
            </div>
            
            </div>
		</div>
		<div id="#vtabs-content-b">
		    <div class="acc">
            <div class="personade">
            <h3>All Students</h3>
            <div class="accdetails">
            <table class="history">
				<tr>
				   <th class="th1">ID</th>
					<th class="th1">Child's Name</th>
					<th class="th1">Age</th>
					<th class="th1">class</th>
					<th class="th1">School</th>
					<th class="th1">User Name</th>
					<!-- <th class="th1">Password</th> -->
					<th class="th1">Address</th>
					<th class="th1">Contact No</th>
					<th class="th1">Emergency Contact No</th>
					<!-- <th class="th1">Services Opted For</th> -->
					<th class="th1">Other Specific Services</th>
					<th class="th1">How Do You</th>
					<th class="th1">Edit</th>
					<th class="th1">Delete</th>
				</tr>
				<?php
				/* error_reporting(0); */
				$delt = $_GET['del'];
				$sql = "delete from child_registration where id = '$delt'";
				$result = mysql_query($sql);
				
				?>
				
				<?php 
			    
				$sql = "select * from child_registration";
				$result = mysql_query($sql);
				while($raw = mysql_fetch_assoc($result))
				{
					/* $string = implode(',', array($course1, $course2, $course3, $course4, $course5, $course6, $course7, $course8, $course9, $course10)); */
					$course1 = $raw['course1'];
					$course2 = $raw['course2'];
					$course3 = $raw['course3'];
					$course4 = $raw['course4'];
					$course5 = $raw['course5'];
					$course6 = $raw['course6'];
					$course7 = $raw['course7'];
					$course8 = $raw['course8'];
					$course9 = $raw['course9'];
					$course10 = $raw['course10'];
					/* $password = $raw['password']; */
					/* $pass = md5($password); */
				?>
				<tr>
				   <td class="th1"><?php echo $raw['id'];?></td>
					<td class="th1"><?php echo $raw['child_name'];?></td>
					<td class="th1"><?php echo $raw['age'];?></td>
					<td class="th1"><?php echo $raw['class'];?></td>
					<td class="th1"><?php echo $raw['school'];?></td>
					<td class="th1"><?php echo $raw['username'];?></td>
					<!-- <td class="th1"><?php echo $raw['password'];?></td> -->
					<td class="th1"><?php echo $raw['address'];?></td>
					<td class="th1"><?php echo $raw['contact_no'];?></td>
					<td class="th1"><?php echo $raw['emergency_contact'];?></td>
					<!-- <td class="th1"><?php echo $course1." ".$course2." ".$course3." ".$course4." ".$course5." ".$course6." ".$course7." ".$course8." ".$course9." ".$course10;?></td> -->
					<td class="th1"><?php echo $raw['other_specific_services'];?></td>
					<td class="th1"><?php echo $raw['how_do_you_come'];?></td>
					<td class="th1"><a href="edit_student.php?edt=<?php echo $raw['id'];?>">edit</a></td>
					<td class="th1"><a href="admin.php?del=<?php echo $raw['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');"><img src="images/DeleteRed.png" alt="delete" width="35"></a></td>
				</tr>
				<?php
				}
				?>
            </table>
            </div>
            </div>
            
            </div>
		</div>
		
	<?php
		if(isset($_POST['add']))
		{
		  $selectService = $_POST['selectService'];
		  $selectStu = $_POST['selectStu'];
		  $date = date("Y/m/d");
		  $sql1 = "select * from add_service where s_id='$selectStu' and new_service='$selectService'";
		    $res = mysql_query($sql1);
			$raws2 = mysql_fetch_array($res);
		    $new_service = $raws2['new_service'];
			  if(isset($new_service))
				{
					 echo "<script type=\"text/javascript\">".
                     "alert('This service already taken by you..');".
                      "</script>";
			    }
		else{
		  $sql =  $sql = "insert into add_service(s_id,new_service,date)value('$selectStu','$selectService','$date')";
		  $result = mysql_query($sql);
		  echo "<script type=\"text/javascript\">".
                       "alert('Insert Successfully..');".
                        "</script>";
				}
		  
		}
		?>   
		
		
		
		
		<div id="#vtabs-content-c">
			<div class="acc">
            <div class="personade">
			<form method="post" onsubmit='return formValidator2()'>
            <h3>Add Services</h3>
            <div class="accdetails">
            <div class="accspan">Select Student :</div>
			
            <div class="accspandet"><select name="selectStu" id="selectStu">
			<option value="">--Please Select Student--</option>
			<?php
              $sql = "select * from child_registration";
				$result = mysql_query($sql);  			
			 while($raw = mysql_fetch_assoc($result))
			 {
			?>
			<option value="<?php echo $raw['id']?>"><?php echo $raw['child_name']?></option>
			<?php
			}
			?>
			</select>
			</div>
            </div>
			
			
			<div class="accdetails">
            <div class="accspan">Select service :</div>
			
            <div class="accspandet"><select name="selectService" id="selectService">
			<option value="">--Please Select Service--</option>
			<?php
			$query = "select * from all_services";
			$result1 = mysql_query($query);
			while($rows = mysql_fetch_assoc($result1))
			{
			?>
			<option value="<?php echo $rows['service_name'];?>"><?php echo $rows['service_name'];?></option>
			<?php
			} 
			?>
			</select>
			</div>
            </div>
			<div class="accdetails">
            <div class="butsave"> <input name="add" type="submit" class="sbtn2" value="ADD SERVICE"></div>
            </div>
           </form>
            </div>
            
            </div>
		</div>

	
		<?php
	    $del1 = $_GET['del1'];
	    $serv = $_GET['serv'];
	    $sql_add = "delete from add_service where s_id='$del1' and new_service='$serv'";
		$result_add = mysql_query($sql_add);
		?>
		
		<div id="#vtabs-content-h">
			<div class="acc">
            <div class="personade">
            <h3>View Services</h3>
            <div class="accdetails">
            <table class="history">
			<tr>
				<th class="th1">ID</th>
				<th class="th1">Services</th>
				<th class="th1">Date</th>
				<th class="th1">Remove</th>
			</tr>
			<?php 
			    
				$sql_add_serv = "select * from add_service order by date desc";
				$result_add_serv = mysql_query($sql_add_serv);
				while($raws1 = mysql_fetch_array($result_add_serv))
				{
					$s_idd = $raws1['s_id'];
					$new_servicesss = $raws1['new_service'];
				?>

			<tr>
			<td class="th1"><?php echo $s_idd;?></td>
			<td class="th1"><?php echo $new_servicesss;?></td>
			<td class="th1"><?php echo $raws1['date'];?></td>
			<td class="th1"><?php echo '<a href="admin.php?del1='.$s_idd.'&serv='.$new_servicesss.'" Onclick="return ConfirmDelete1();"><img src="images/DeleteRed.png" width="35" alt="delete"></a>';?></td>
			</tr>
			<?php 
			} 
			?> 
			</table> 
            </div>
            </div>
            
            </div>
		</div>
		
		
		<?php
		if(isset($_POST['submit2']))
		{
		  $submit2 = $_POST['submit2'];
		  $date2 = date("Y/m/d");
		  $notification = $_POST['notification'];
		  $select_Student = $_POST['select_Student'];
		  
		 
 $file_name=$_FILES["attachment"]["name"];
   $temp_name=$_FILES["attachment"]["tmp_name"];
          echo $imgtype=$_FILES["attachment"]["type"];

		    if(move_uploaded_file($temp_name, "./attachment/".$file_name)) {        
          $file_name=$file_name ; //if file uploaded into folder then insert into database
        mysql_query($query_upload);
		}			
			else
			    {        
          exit("Error While uploading image on the server");
       }
 
		 $sql = "insert into notification(s_id,notification,date,attachment)value('$select_Student','$notification','$date2','$file_name')";
		  $result = mysql_query($sql);
		  if($result)
		  { 
		   echo "<script type=\"text/javascript\">".
                     "alert('Notification has Added Successfully..');".
                      "</script>";
		  }
		  
		  
		}
		?>
		
		<div id="#vtabs-content-d">
			<div class="acc">
            <div class="personade">
			<form id="form3" method="post" enctype="multipart/form-data" onsubmit='return formValidator3()'>
            <h3>Notification</h3>
			
			<div class="accdetails">
            <div class="accspan">Select Student :</div>
			
            <div class="accspandet"><select name="select_Student" id="select_Student">
			<option value="">--Please Select Student--</option>
			<?php
              $sql = "select * from child_registration";
				$result = mysql_query($sql);  			
			 while($raw = mysql_fetch_assoc($result))
			 {
			?>
			<option value="<?php echo $raw['id']?>"><?php echo $raw['child_name']?></option>
			<?php
			}
			?>
			</select>
			</div>
            </div>
			
            <div class="accdetails">
            <div class="accspan">Event :</div>
            <div class="accspandet"><input type="text" name="notification" id="notification" class="form-control"></div>
            </div>
			 <div class="accdetails">
            <div class="accspan">Attachment :</div>
            <div class="accspandet"><input type="file" name="attachment" id="attachment" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="butsave"> <input name="submit2" type="submit" class="sbtn2" value="SUBMIT"></div>
            </div>
			</form>
           </div>
			</div>
		</div>
		
		<?php
		if(isset($_POST['submit3']))
		{
		  
		  $submit3 = $_POST['submit3'];
		  $date3 = date("Y/m/d");
		  $select_Student1 = $_POST['select_Student1'];
		  $recommendation = $_POST['recommendation'];
		  
		  $sql = "insert into recommendation(s_id,recommendation,date)value('$select_Student1','$recommendation','$date3')";
		  $result = mysql_query($sql);
		  if($result)
		  { 
		   echo "<script type=\"text/javascript\">".
                     "alert('Insert Successfully.');".
                      "</script>";
		  }
		  
		  
		}
		?>
		
		
		<div id="#vtabs-content-e">
			<div class="acc">
            <div class="personade">
			<form id="form4" method="post" onsubmit='return formValidator4()'>
            <h3>Recommendation</h3>
			
			<div class="accdetails">
            <div class="accspan">Select Student :</div>
			
            <div class="accspandet"><select name="select_Student1" id="select_Student1">
			<option value="">--Please Select Student--</option>
			<?php
              $sql = "select * from child_registration";
				$result = mysql_query($sql);  			
			 while($raw = mysql_fetch_assoc($result))
			 {
			?>
			<option value="<?php echo $raw['id']?>"><?php echo $raw['child_name']?></option>
			<?php
			}
			?>
			</select>
			</div>
            </div>
			
            <div class="accdetails">
            <div class="accspan">Recommend :</div>
            <div class="accspandet"><input type="text" name="recommendation" id="recommendation" class="form-control"></div>
            </div>
           <div class="accdetails">
            <div class="butsave"> <input name="submit3" type="submit" class="sbtn2" value="SUBMIT"></div>
            </div>
			</form>
            </div>
            
            </div>
		</div>
		<?php
		$submit1 = $_POST['submit1'];
		if(isset($submit1))
		{
		 $submit1 = $_POST['submit1'];
		 $student = $_POST['student'];
		 $course = $_POST['course'];
		 $areas = $_POST['areas'];
		 $positive = $_POST['positive'];
		 $institute_to_improve = $_POST['institute_to_improve'];
		 $parents_to_improve = $_POST['parents_to_improve'];
		 $suggest_course = $_POST['suggest_course'];
		 $other_remarks = $_POST['other_remarks'];
		 $date4 = date("y/m/d");
		   $sql = "insert into weekly_observation_report(s_id,course,areas,positive_aspects,institute_to_improve,parents_to_improve,suggest_course,other_remarks,date)values('$student','$course','$areas','$positive','$institute_to_improve','$parents_to_improve','$suggest_course','$other_remarks','$date4')";
		   $result = mysql_query($sql);
		   if($result)
		   {
		    echo "<script type=\"text/javascript\">".
        "alert('Your data successfully submitted');".
        "</script>";
		   }
		   else
		   {
		      echo "<script type=\"text/javascript\">".
                    "alert('Not submitted');".
                    "</script>";
		   }
		 
		
		}
		
		?>
		
		<div id="#vtabs-content-f">
			<div class="acc">
            <div class="personade">
			<form id="form2" method="post" onsubmit='return formValidator1()'>
            <h3>Weekly Observation Report</h3>
			<div class="accdetails">
            <div class="accspan">Select Student :</div>
            <div class="accspandet"><select name="student" id="student" onchange="load_options('','course');">
			<option value="">--Please Select Student--</option> 
		    </select></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Course :</div>
            <div class="accspandet">
		    <select id="course" name="course"> 
			<option value="">select course</option>
			</select> 
			</div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Areas of Improvement :</div>
            <div class="accspandet"><input type="text" name="areas" id="areas" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Positive Aspects of Personalities of child :</div>
            <div class="accspandet"><input type="text" name="positive" id="positive" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Action Taken by Institute to improve child performance :</div>
            <div class="accspandet"><input type="text" name="institute_to_improve" id="institute_to_improve" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Action to be Taken by the Parent's to improve child performance :</div>
            <div class="accspandet"><input type="text" name="parents_to_improve" id="parents_to_improve" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Suggested Course to improve further information :</div>
            <div class="accspandet"><input type="text" name="suggest_course" id="suggest_course" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Other Remarks :</div>
            <div class="accspandet"><input type="text" name="other_remarks" id="other_remarks" class="form-control"></div>
            </div>
			<div class="accdetails">
            <div class="butsave"> <input name="submit1" type="submit" class="sbtn2" value="SUBMIT"></div>
            </div>
			
           </form>
           </div>
            
            </div>
		</div>
		
		
		
		<div id="#vtabs-content-g">
		
		<!--popup1 start-->
		
			<!-- <div id="bg" class="popup_bg"></div> 
				<div id="popup1" class="popup"> 
					<form  action="#" method="post">
						<div class="refferal">
							<div class="loginsec">
							<h3>Services</h3>  
							<table>
								<tr>
									<th>ID</th>
									<th>New Service</th>
									<th>Date</th>
								</tr>
								
								
								<?php
								/* $date = date("Y/m/d"); */
								$ch_id = $_GET['ch_id'];
								$sql = "select * from add_service where s_id='$ch_id'";
								$result = mysql_query($sql);
								while($raw1 = mysql_fetch_array($result))
								{
							     /* $s_id = $raw1['s_id'];
							     $string = "Hello!!";
							     echo $string."-".$s_id; */
								?>
								<tr>
									<td><?php echo $raw1['s_id'];?></td>
									<td><?php echo $raw1['new_service'];?></td>
									<td><?php echo $raw1['date'];?></td>
								</tr>
								<?php } ?>
							</table>
							
						 <h3>Nptification</h3>
							<table>
								<tr>
									<th>ID</th>
									<th>Notification</th>
									<th>Date</th>
								</tr>
								
								
								<?php
								/* $date = date("Y/m/d"); */
								$ch_id = $_GET['ch_id'];
								$sql = "select * from notification where s_id='$ch_id'";
								$result = mysql_query($sql);
								while($raw2 = mysql_fetch_array($result))
							    { 
								?>
								<tr>
									<td><?php echo $raw2['s_id'];?></td>
									<td><?php echo $raw2['notification'];?></td>
									<td><?php echo $raw2['date'];?></td>
								</tr>
								<?php } ?>
							</table> 
			                
							</div>
			</div></form>

</div> -->
		
		<!--popup1 end-->
		
		
			<div class="acc">
            <div class="personade">
            <h3>History</h3>
			 <div class="accdetails">
            <div class="accspan"><!-- Other Remarks : --></div>
            <div class="accspandet"></div>
            </div> 
			
			<table class="history">
			<tr>
			    <th class="th1">Name</th>
				<th class="th1">Date</th>
				<th class="th1">Description</th>
				<th class="th1">Details</th>
			</tr>
		     <?php
			 $sql = "select * from child_registration order by date desc";
			 $result = mysql_query($sql);
			 while($raw = mysql_fetch_assoc($result))
			 {
			 ?> 
			<tr>
			<td class="th1"> <?php echo $raw['child_name'];?> </td>
			<td class="th1"> <?php echo $raw['date'];?> </td>
			
			<td class="th1">New Services,<br>
			Notification,<br>
			Recommendation,<br>
			weekly Observation Report</td>
			
			<td class="th1"><a href="child_details.php?ch_id=<?php echo $raw['id'];?>" target="_blank">Details</a><br>
			
			<!-- <td class="th1"><a href="child_details.php?ch_id=<?php echo $raw['id'];?>" onclick="openpopup('popup1')">Details</a><br> -->
		<!--	<a href="#">Notification</a><br>
			<a href="#">Recommendation</a><br>
			<a href="#">weekly Observation Report</a></td>  -->
			</tr>
			<?php } ?>
			</table>
			
            </div>
            
			
                       
            </div>
            
            </div>
	<!-- start message tab  -->		
			<!-- <div id="#vtabs-content-h">
			<div class="acc">
            <div class="personade">
            <h3>Message</h3>
			<table class="history">
			<tr>
				<th class="th1">New Service</th>
				<th class="th1">Notification</th>
				<th class="th1">Recommendation</th>
			</tr>
			</table>
           </div>
            
            </div>
		</div> -->
<!-- end message tab  -->					
			
		</div>
		
		
		
		</div>	
        
	</div>
<!-- </div> -->
<!-- </div> -->
</div>



<footer>
            <!--footer-widgets-wrapper starts-->
            <div class="footer-widgets-wrapper">
                <!--container starts-->
             
            <!--footer-widgets-wrapper ends-->  
            <div class="copyright">
        		<div class="container">
                	<p class="copyright-info" id="copyright1">© 2014 My Learning Planet. All rights reserved. Website by <a href="http://www.webfries.com" title="" target="blank"> Webfries </a></p>
        			
        		</div>
        	</div>  
        </footer>
        <!--footer ends-->
</body>
</html>