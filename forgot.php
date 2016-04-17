<?php
include_once("connection.php");
if(isset($_POST['login']))
{
$email = $_POST['email'];
$sql = "select * from child_registration where username='$email'";
$result = mysql_query($sql);
$raw = mysql_fetch_array($result);
$email_id = $raw['username'];
$password = $raw['password'];
$to = $email;
$email = $_POST['email'];
$subject = 'Your Password';
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= "From: My Learning Planet Family";
$msg = "Your Password is:". $password;
$mail = mail($to,$subject,$msg,$header);	
if($mail)
{
	$mesg = '<h4 style="color:green;">Password has sent to your email</h4>';
	header("refresh:5;url=index.php");
}
else
{
	$mesg = '<h4 style="color:red;">Your Email Id is Not Correct</h4>';
}
}

?>


<!DOCTYPE html>
<html>
<head>


<style>
.login-card input[type=email] {
height: 44px;
font-size: 16px;
width: 100%;
margin-bottom: 10px;
-webkit-appearance: none;
background: #fff;
border: 1px solid #d9d9d9;
border-top: 1px solid #c0c0c0;
/* border-radius: 2px; */
padding: 0 8px;
box-sizing: border-box;
-moz-box-sizing: border-box;
}
</style>
  <meta charset="UTF-8">

  <title>Admin - Mylearningplanet</title>

  <link rel='stylesheet' type="text/css" href='css/jquery-ui1.css'>

    <link rel="stylesheet" href="admin/css/style1.css" media="screen" type="text/css" />
	 <script type="text/javascript" src='js/jquery_and_jqueryui.js'></script>

</head>

<body>
   
  <div class="login-card">
  <?php 
   echo '<h4 style="color:red;">'.$mesg.'</h4>';
  ?>
    <h1>Forgot Password</h1><br>
  <form method="post">
    <input type="email" name="email" placeholder="Email Id">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
  <div class="login-help">
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

 

</body>

</html>