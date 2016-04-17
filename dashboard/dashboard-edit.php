<?php
include_once("../lock.php");
include_once("connection.php");
$edii = $_GET['edt'];
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
$other_specific_services = $_POST['other_specific_services'];

$sql = "update child_registration set age='$age',class='$class',school='$school1',password='$password',address='$address',contact_no='$contact',emergency_contact='$emergency_contact',other_specific_services='$other_specific_services' where id='$edii'";
$result = mysql_query($sql);
if($result)
{
/* echo "<script type=\"text/javascript\">".
        "alert('successfully updated');".
        "</script>"; */
		header("Location: index.php");
}

}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Parent's Dashboard</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
<link rel="stylesheet" type="text/css" href="css/jquery-jvert-tabs-1.1.4.css" />
<!-- Include JQuery Core-->
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
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

<script type="text/javascript" src="js/tabcontent.js">

</script>
<style>.vtabs-content-panel{
	min-height:420px !important;
}</style>

<!--start form validation-->
<script type="text/javascript" >
function formValidator(){
	// Make quick references to our fields
	var age = document.getElementById('age');
	var class1 = document.getElementById('class1');
	var school1 = document.getElementById('school1');
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
<!--End form validation-->



</head>

<body>
<div class="header">
<div class="wrapper">
<div class="logo-block"><img src="images/logo.png" alt="" id="logokids"/></div>
<div id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="index.php">Home</a></li>
  <li><a href="#">About Us</a></li>
  
  
   <li><a href="#">How it works</a></li>
  <!-- <li><a href="#">For Job Seekers</a>
    <ul>
      <li><a href="#">Sub Menu 1</a></li>
      <li><a href="#">Sub Menu 2</a></li>
      <li><a href="#">Sub Menu 3</a></li>
    </ul>
  </li> -->
  <!-- <li><a href="#">For Employers</a>
    <ul>
      <li><a href="#">About us</a></li>
      <li><a href="#">Sub Menu 2</a></li>
      <li><a href="#">Sub Menu 3</a></li>
    </ul>
  </li> -->
  
  
</ul>
</div>

<div style="float:left; width:21%;">
<ul class="navigation">
  <a class="main" href="index.php">Back</a>
  
</ul>
<ul class="navigation">
  <a class="main" href="../logout.php">Logout</a>
 
</ul>
<span><?php echo "Welcome:";?> <?php echo $_SESSION['child_name'];?></span>
</div>

</div>
</div>
<div class="miscl">
<div class="clr"></div>
<div class="wrapper">
<div class="c-agent">
<h4>Parent's:  <span>Dashboard</span></h4>

</div>
</div>
</div>
<div class="result">
<div class="dashb">
<div id="vtabs1">
	<div>
		<ul>
			<li><a href="#vtabs-content-a">Edit Account Details</a></li>
			<li><a href="index.php#vtabs-content-b">Opt For New Service</a></li>
			<li><a href="#vtabs-content-c">Notification</a></li>
			<li><a href="#vtabs-content-d">Weekly Observation Report</a></li>
			<li><a href="#vtabs-content-e">Recommendation</a></li> 
            
		</ul>
	</div>
	<div>
	
	
	
	
			<?php 
	      $sql = "select * from child_registration where id='$edii'";
		  $result = mysql_query($sql);
		  $raw = mysql_fetch_assoc($result);
		  
		  
	      ?>
	
		
		<div id="#vtabs-content-a">
		<form method="post" onsubmit='return formValidator()'>
			<div class="acc"><h3>Your Accounts </h3>
            <div class="accdetails">
            <div class="accspan">Child Name :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['child_name'];?>" readonly name="child_name" id="child_name" class="form-control "></div>
            </div>
            <div class="accdetails">
            <div class="accspan">Age :</div>
            <div class="accspandet"><input type="text" value="<?php echo $raw['age'];?>" name="age" id="age" class="form-control"></div>
            </div>
            <div class="accdetails">
            <div class="accspan">Class :</div>
            <div class="accspandet"><input type="text" value="<?php echo $raw['class'];?>" name="class" id="class1" class="form-control"></div>
            </div>
            <div class="accdetails">
            <div class="accspan">School :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['school'];?>" name="school1" id="school1" class="form-control"></div>
            </div>
			
			 <div class="accdetails">
            <div class="accspan">Username :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['username'];?>" readonly name="school" id="school" class="form-control"></div>
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
            <div class="accspan">Other Specific Services :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['other_specific_services'];?>" name="other_specific_services" id="other_specific_services" class="form-control"></div>
            </div>
			
			
            <div class="accdetails">
            
            <div class="butsave"> <input name="update" type="submit" class="sbtn2" value="Update"></div>
            </div>
            </div>
			</form>
		</div>
	
		
		
	
        
	</div>
</div>
</div>
</div>


<div class="footer">
<div class="wrapper">
<div class="foot1">
<h3>For Employers</h3>
<ul>
<li><a href="#">Advantage Job Town</a></li>
<li><a href="#">Plan & Pricing</a></li>
<li><a href="#">Talk to Us</a></li>
<li><a href="#">Trading</a></li>
</ul>
</div>
<div class="foot1">
<h3>Job Seekers</h3>
<ul>
<li><a href="#">Advantage Job Town</a></li>
<li><a href="#">Plan & Pricing</a></li>
<li><a href="#">Talk to Us</a></li>
<li><a href="#">Career Consulting</a></li>
<li><a href="#">Knowledge Center</a></li>
</ul>
<h3>Partner With Us</h3>
<ul>

<li><a href="#">Talk to Us</a></li>
<li><a href="#">Career Consulting</a></li>
<li><a href="#">Knowledge Center</a></li>
</ul>
</div>
<div class="foot1">
<h3>Job Opening</h3>
<ul>
<li><a href="#">Advantage Job Town</a></li>
<li><a href="#">Plan & Pricing</a></li>
<li><a href="#">Talk to Us</a></li>
<li><a href="#">Career Consulting</a></li>
<li><a href="#">Knowledge Center</a></li>
</ul>
<h3>About Us</h3>
<ul>

<li><a href="#">Talk to Us</a></li>
<li><a href="#">Career Consulting</a></li>
<li><a href="#">Knowledge Center</a></li>
</ul>
</div>
<div class="newsletter">
<h3>Sign Up for Newsletter</h3>
<p>Stay informed on our latest news!</p>
<div class="newsletter-form">
<input name="" class="newsinput" placeholder="Email Id" type="text" />
<input name="" type="button" class="nsubtn" value="Submit" />	
</div>
</div>
</div>
</div>
<div class="footer-bar">
<div class="wrapper">
<div class="copyright">
<p>Copyright © JobTown. All Rights Reserved</p>
</div>
<div class="designedby">
  <p>Website Designed By <a href="http://www.webfries.com/" target="_blank">Webfries</a></p></div>
</div>
</div>
</body>
</html>
