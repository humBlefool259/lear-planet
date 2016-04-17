<?php
error_reporting(0);
session_start();
include_once("connection.php");
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = "select * from admin where username = '$user' and password = '$pass'";
$result = mysql_query($sql);
$raw = mysql_fetch_array($result);
$count=mysql_num_rows($result);
if($count==1)
{
$_SESSION['IDD'] = $raw['id'];
$_SESSION['username'] = $raw['username'];
header("Location: admin.php");
}
?>


<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">

  <title>Admin - My Learning Planet</title>

  <link rel='stylesheet' type="text/css" href='css/jquery-ui1.css'>

    <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
	 <script type="text/javascript" src='js/jquery_and_jqueryui.js'></script>

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="#" method="post">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="forgot.php">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

 

</body>

</html>