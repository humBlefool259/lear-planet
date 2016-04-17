<?php
include_once("lock.php");
?> 
<?php
error_reporting(0);
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
 
header("Location:admin.php"); 
}

}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<!--start facebook widget script-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--end facebook widget script-->

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
<div class="result">
<div class="dashb">
<div id="vtabs1">
	<!-- <div>
		<ul>
			<li><a href="#vtabs-content-a">Edit Student Profile</a></li>
			 <li><a href="#vtabs-content-a">Add Student</a></li>
			<li><a href="#vtabs-content-b">Display Student</a></li>
			<li><a href="#vtabs-content-c">Add Services</a></li>
			<li><a href="#vtabs-content-d">Notification</a></li>
			<li><a href="#vtabs-content-e">Recommendation</a></li>
			<li><a href="#vtabs-content-f">Weekly Observation Report</a></li>
			<li><a href="#vtabs-content-g">History</a></li> 
		</ul>
	</div>  -->
	
	
	     <?php 
	      $sql = "select * from child_registration where id='$edii'";
		  $result = mysql_query($sql);
		  $raw = mysql_fetch_assoc($result);
	     ?>
		  
		<!-- <div id="#vtabs-content-a"> -->
		<form method="post" onsubmit='return formValidator()'>
			<div class="acc"><h3>Edit Student Profile</h3>
            <div class="accdetails">
            <div class="accspan">Child's Name :</div>
            <div class="accspandet"><input type="text" value="<?php echo $raw['child_name'];?>" readonly id="child_name" name="child_name" class="form-control"></div>
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
     <!-- <input type="text" value="<?php echo $raw['age'];?>" id="age" name="age" class="form-control"> -->
			 </div>
            </div>
            <div class="accdetails">
            <div class="accspan">Class :</div>
            <div class="accspandet">
			
	<input type="text" value="<?php echo $raw['class'];?>" id="class1" name="class" class="form-control"></div>
            </div>
            <div class="accdetails">
            <div class="accspan">School :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['school'];?>" id="school1" name="school1" class="form-control"></div>
            </div>
			<div class="accdetails">
            <div class="accspan">User Name :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['username'];?>" readonly id="username" name="username" class="form-control"></div>
            </div>
			<div class="accdetails">
            <div class="accspan">Password :</div>
            <div class="accspandet"> <input type="password" value="<?php echo $raw['password'];?>" readonly id="password" name="password" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Address :</div>
            <div class="accspandet"> <input type="address" value="<?php echo $raw['address'];?>" id="address" name="address" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Contact No :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['contact_no'];?>" id="contact" name="contact" class="form-control"></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Emergency Contact No :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['emergency_contact'];?>" id="emergency_contact" name="emergency_contact" class="form-control" ></div>
            </div>
			
			<div class="accdetails">
            <div class="accspan">Other Specific Services :</div>
            <div class="accspandet"> <input type="text" value="<?php echo $raw['other_specific_services'];?>" id="other_specific_services" name="other_specific_services" class="form-control"></div>
            </div>
			
            <div class="accdetails">
            
            <div class="butsave"> <input name="update" type="submit"  class="sbtn2" value="Update "></div>
            </div>
            </div>
			</form>
    <!--		</div>  -->
		
       	
	
</div>
</div>
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
