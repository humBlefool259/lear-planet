<?php
session_start();
ob_start();
include_once('functions.php');

include_once("../config/db.inc.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
     <link rel="stylesheet" type="text/css" href="../css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../css/demo.css" media="all" />
       <link rel="stylesheet" type="text/css" href="../css/layout.css" />
	</head>
<body>
<div class="header">
<div class="wrapper">
<div class="logo-block"><img src="images/jobtwon-logo.jpg" alt="" /></div>
<div class="nav">
<ul>
<li><a href="#" class="active">Home</a></li>
<li><a href="#">Jobs</a></li>
<li><a href="#">Candidates</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Register</a></li>
<li><a href="#">Shortcodes</a></li>
</ul>
</div>
<div class="login"><a href="logout.php">Logout</a></div>

</div>
</div>
<div class="miscl">
<h3><span>Miss</span>Call Details </h3>
<div class="clr"></div>
<div class="wrapper">
<div class="c-agent">
<h4>customer support agent:  <span><?php echo $_SESSION['user'];?></span></h4>
<p>Date: <?php echo date('d-m-y');?></p>
<?php 
 if(isset($_SESSION['msg'])){
   echo'<div id="error">';
      echo $msg1=message();
   echo '</div>';
 }
 if(isset($_SESSION['msger'])){
   echo'<div id="error">';
      echo $msg1=msger();
   echo '</div>';
 }
?>
</div>
</div>
</div>
		
			
<!-- <div class="data">
<div id="top_header">
<div class="title">
 
<div id="agent"><div class="tims"><b>CUSTOMER SUPPORT AGENT:  <?php //echo $_SESSION['user'];?></b> </div><div class="tims"style="border-right:none;"><b><?php //echo date('d-m-y');?></b></div>

 </div>


</div>-->
<div id="rows">
 <div class="ul_heading">
    <div class="ul_heading1 a bor bg" ><b>Sr</b></div>
    <div class=" ul_heading1 b bor bg" ><b>Mobile No</b></div>
     <div class="ul_heading1 c bor bg" ><b>Date</b></div>
      <div class="ul_heading1 d bor bg" ><b>Operator</b></div>
    <div class="ul_heading1 e bor bg" ><b>Telecom Circle</b></div> 
    <div class="ul_heading1 f bor bg" ><b>No type</b></div>
    <div class=" ul_heading1 g bg" ><b>DND Status</b></div>
</div>
</div>
	
 <div id="rowss"> 
 <?php 

 //$dt=date("y-d-m h:i:s")
 //$qur="select * from phone_records";
 $qur="SELECT * FROM phone_records WHERE verification_call_time >=DATE_SUB(NOW(), INTERVAL 1 MONTH) ORDER BY call_id DESC";
 $fun=mysqli_query($conn,$qur);
 $a=0;
 while($data=mysqli_fetch_assoc($fun))
  { 
$a++;$mons=$data['verified_number'];
   $sel="SELECT *FROM center_registration_1 where calling_id='$a'";
    $funs=mysqli_query($conn,$sel);
        while($ta=mysqli_fetch_assoc($funs))
			{ $mob=$ta['calling_id'];
			}
			if($mob==$a){
			
		  /*  echo '<div class="row_inners"onclick="sho('.$a.')" style="background:red;">';
			 echo '<div class="row_inner a">'.$a.'</div>
          <div class="row_inner b">'.$data["verified_number"].'</div>
          <div class="row_inner c">'.$data["verification_call_time"].'</div>
          <div class="row_inner d">'.$data["phone_operator"].'</div>
          <div class="row_inner e">'.$data["telco_circle"].'</div>
          <div class="row_inner f">'.$data["number_type"].'</div>
          <div class="row_inner g">'.$data["dnd_status"].'</div>
		
        </div>';*/
			 continue;
		}else{
		     echo '<div class="row_inners"onclick="show('.$a.')">';
			  echo '<div class="row_inner a">'.$a.'</div>
          <div class="row_inner b">'.$data["verified_number"].'</div>
          <div class="row_inner c">'.$data["verification_call_time"].'</div>
          <div class="row_inner d">'.$data["phone_operator"].'</div>
          <div class="row_inner e">'.$data["telco_circle"].'</div>
          <div class="row_inner f">'.$data["number_type"].'</div>
          <div class="row_inner g">'.$data["dnd_status"].'</div>
		
        </div>';
          }
		 
	if($a==23){
	break;
	}
 ?>
   
 
<script>
function show(ac){
 document.getElementById('forms_show'+ac).style.display='block';
}

function clos(ab){
 document.getElementById('forms_show'+ab).style.display='none';
}
</script>

 <div  class="form" id="forms_show<?php echo $a;?>"style="display:none;" ><!--popoup form-->
	        <div class="close"onclick="clos('<?php echo $a;?>')"style="cursor:pointer;"><a href="">Close</a></div> 
    		<form id="contactform"  action="registrationdb.php" method="post"> 
		    <!--select class="select-style gender" name="des">
            <option value="">i am..</option>
            <option value="fresher">Fresher</option>
            <option value="accountant">Accountant</option>
            <option value="artist">Artist</option>
            </select-->
			<div class="left_fo">
    			<div class="frroww"><label>Name</label> <div id="cleaner"></div>
    			<input id="name" name="name" placeholder="First and last name"  tabindex="1" type="text"required> 
				<div id="cleaner"></div></div>
				
				
    			<div class="frroww"><label>Email</label> 
    			<div id="cleaner"></div>
				<input id="email" name="email" placeholder="example@domain.com" required type="email"> 
				<div id="cleaner"></div>
                </div>
				<div class="frroww"><label>City</label> 
    			<div id="cleaner"></div>
				<input id="email" name="citys"  required type="text"> 
				<div id="cleaner"></div></div>
               
			   <div class="frroww"><label>Date Of Birth</label> 
    			<div id="cleaner"style="height:10divx;"></div>
				<input id="email" name="dob" placeholder="DOB" required type="text"> 
				<div id="cleaner"></div></div>
				
               <div class="frroww"> <label>Phone</label><div id="cleaner"></div>
    			<input id="email" name="phone" value="" required type="text"> 
				<div id="cleaner"></div></div>
			<div class="frroww" style="width:65%;overflow: hidden;float: left;"> 	<label class="label"style="width:30%;">Gender</label><div id="cleaner"></div>
             
			  
    			 <div style="float:left;" class="label_gen">Male
				<input id="rad" name="gen"value="male" type="radio"></div>
    			<div style="float:left;" class="label_gen">Female</div>
				<input id="rad" name="gen"  value="female"type="radio">
				<div id="cleaner"></div></div>
              
			  <!--div class="contact"><label>current company</label></div> <div id="cleaner"></div>
    			<input id="email" name="cur_comp" value="" required type="text"> <div id="cleaner"></div-->			   
				
				<div class="frroww"><label>current job title</label> <div id="cleaner"></div>
    			<input id="email" name="cur_jobtitle" value=""  type="text"> <div id="cleaner"></div></div>
				
				<div class="frroww"><label>current industry type</label> <div id="cleaner"></div>
    			<input id="email" name="cur_indust" value=""  type="text"> <div id="cleaner"></div></div>
				
				<div class="frroww"><label>current job description</label> <div id="cleaner"></div>
    			<input id="email" name="cur_jobdes" value=""  type="text"> <div id="cleaner"></div></div>
				
				<!--div class="contact"><label>current job expereince</label></div> <div id="cleaner"></div>
    			<input id="email" name="cur_jobexp" value=""type="text"> <div id="cleaner"></div-->
				
				<div class="frroww"><label>current job  experience</label> <div id="cleaner"></div>
    			<select name="cur_jobexp"  class="select-style gender">
			  <option value="0">  </option>
			  <option value="1"> <1 </option>
			  <option value="2"> <2 </option>
			  <option value="3"> <3 </option>
			  <option value="4"> <4 </option>
			  <option value="5"> 5+ </option>
			 </select><div id="cleaner"></div></div>
				
				<div class="frroww"><label>prefer location</label> <div id="cleaner"></div>
    			<input id="email" name="prefer_loc" value=""  type="text"> <div id="cleaner"></div></div>
				
				<div class="frroww">
				<label>prefer industry</label><div id="cleaner"></div>
    			<input id="email" name="prefer_indust" value=""  type="text"> <div id="cleaner"></div></div> 
				<div class="frroww">
				<label>current salary</label><div id="cleaner"></div>
    			<input id="email" name="cur_sal" value=""  type="text"> <div id="cleaner"></div></div> 
				<div class="frroww">
				<label>adhar</label> <div id="cleaner"></div>
    			<input id="email" name="aadhar" value=""  type="text"> <div id="cleaner"></div></div>
			</div><!--left-->
			<div class="right_fo">	
               <div class="frroww"><label>Qualification</label> <div id="cleaner"></div>
    		<select name="qualific"  class="select-style gender">
			  <option value=""> </option>
			  <option value="10+2"> 10+2 </option>
			  <option value="BCA"> BCA </option>
			  <option value="PG"> PG </option>
			  <option value="DIPLOMA"> DIPLOMA </option>
			 </select><div id="cleaner"></div></div>
				
               <div class="frroww"><label>Specialization</label> <div id="cleaner"></div>
    			<input id="email" name="special" value="" required type="text"> <div id="cleaner"></div></div>
				
               <div class="frroww"><label>Institute</label> <div id="cleaner"></div>
    			<input id="email" name="instit" value="" required type="text"> <div id="cleaner"></div></div>
				
               <div class="frroww"><label>Profession</label> <div id="cleaner"></div>
    			<input id="email" name="profes" value="" required type="text"> <div id="cleaner"></div></div>
				
               <div class="frroww"><label>Skills</label> <div id="cleaner"></div>
    			<input id="email" name="skill" value="" required type="text"> <div id="cleaner"></div></div>
				
				<div class="frroww"><label>previous company</label><div id="cleaner"></div>
    			<input id="email" name="pre_comp" value=""  type="text"> <div id="cleaner"></div></div> 
				
               <div class="frroww"><label>previous job title</label> <div id="cleaner"></div>
    			<input id="email" name="pre_jobtit" value="" required type="text"> <div id="cleaner"></div></div>
				
               	<div class="frroww"><label>previous job industry</label> <div id="cleaner"></div>
    			<input id="email" name="pre_jobindust" value="" required type="text"> <div id="cleaner"></div></div>
				
				<div class="frroww"><label>previous job description</label><div id="cleaner"></div>
    			<input id="email" name="pre_jobdes" value="" type="text"> <div id="cleaner"></div></div> 
				<div class="frroww"><label>previous job experience </label> <div id="cleaner"></div>
    			<select name="pre_jobexp"  class="select-style gender">
			  <option value="">  </option>
			  <option value="<1"> <1 </option>
			  <option value="<2"> <2 </option>
			  <option value="<3"> <3 </option>
			  <option value="<4"> <4 </option>
			  <option value="<5"> 5+ </option>
			 </select><div id="cleaner"></div></div>
				
				
				<div class="frroww"><label>total experience </label> <div id="cleaner"></div>
    			<input id="email" name="total_exp" value=""  type="text"> <div id="cleaner"></div></div>
				
				<div class="frroww"><label>expected salary</label><div id="cleaner"></div>
    			<input id="email" name="expect_sal" value="" type="text"> <div id="cleaner"></div></div> 
				
				<div class="frroww">
				<label>langauage</label>
				<select name="lang1"  class="select-style gender" style="float:left;">
					<option value=""> select </option>
					<option value="Punjabi"> punjabi </option>
				</select>
				<div style="float:left; width:180px;">
					<span style="float:left; width:70px; margin-left:10px;">read
					<input style="margin-right:5px; margin-top:8px" id="email" value="read" name="lang1_read" type="checkbox"></span>
					<span style="float:left; width:70px; margin-left:10px;">write
					<input style="margin-right:5px; margin-top:8px" id="email" value="write" name="lang1_write" type="checkbox"></span>
				<div id="cleaner"></div></div>
				</div>
				<div class="frroww"><label>language</label>
					<select name="lang2"  class="select-style gender">
					 <option value=""> select </option>
					 <option value="hindi"> hindi </option>
					</select>
				<div id="cleaner"></div>
				<span style="margin-right:10px;">read</span>
					<input id="email" value="read" name="lang2_read" type="checkbox">
					<span>write</span>
					<input id="email" value="write" name="lang2_write" type="checkbox">
					<div id="cleaner"></div></div>
				
				<div class="frroww">
					<label>language</label> 
					<select name="lang3"  class="select-style gender">
					<option value=""> select </option>			  
					<option value="english"> english </option>
					</select>
					<div id="cleaner"></div></div>
				<div class="frroww"><label style="margin-right:10px;">read</label>	
					<input id="email" value="read"name="lang3_read" type="checkbox">
					<span>write</span>
					<input id="email"value="write" name="lang3_write" type="checkbox">
					<div id="cleaner"></div></div>
				</div><!--right--->
			<input type="hidden" name="calling_id" value="<?php echo $a;?>"/>
			<input type="hidden" name="addedby" value="<?php echo $a;?>"/>
           <input class="buttom" name="submit_calling" id="submit" tabindex="5" value="Sign me up!" type="submit" > 	 
   </form> 
  </div>  <!--end popoup--> 
  <?php } ?>	
 </div> <!--rowss -->   
</div> <!--top header-->
</div><!--end top-border-->
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
