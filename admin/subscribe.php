<?php
if(isset($_POST['btnsubscribe']))
{
$to = "shivinder@webfries.com";
$email = $_POST['mc_email'];
$subject = 'new user subscribe';
$header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= "From: My Learning Planet Family";
$msg = "<html>
<body>
Hello Admin,<br>
New user Subscribed: &nbsp;$email
</body>
</html>";
$mail = mail($to,$subject,$msg,$header);
if($mail)
{
	header("Location: admin.php?token=y");
	
// echo '<script type=\"text/javascript\">'.
        // "alert('Subscribe Successfully!!');".
        // "</script>";
}
}
?>