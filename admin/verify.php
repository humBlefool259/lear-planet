
<div class="short-content">
<div class="uslogin">
<div class="short-wrapper">
<h1 class="b-signup__title">Verify email and password</h1>
<div id="errormsg"></div>	<div id="erro"></div>
<div class="userlogin">
<?php
include("connection.php");
$username=$_REQUEST['username'];
$ress=mysql_query("select * from child_registration where username='$username'");
$rows=mysql_fetch_array($ress);
$verif=$rows['verify'];
$verif_pass=$rows['password'];
$verif_email=$rows['username'];
$verif_name=$rows['child_name'];

if($verif==yes)
{
echo "Your account is already verified";
}

else if($verif_email==$username)
{

$username=$_REQUEST['username'];
$to="$username";
	
 $subject ="Welcome to My Learning Planet Family";
  $header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= "From: sales@webfries";

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
           
            color:black;
            margin-top: 5px;
            margin-bottom: 5px;
          
        }
		
    </style>
    </head>
    <body>
     
        <div id = 'message'>

            <p>Dear ".$verif_name."  ,</p><p>Thank you for signing up with My Learning Planet Family. Your account details are as below: </p>  
			<p>Username-".$username." </p>  
			<p>Password-".$verif_pass."</p>  
			
			 

<p>To unsubscribe from our mailing list please write to us at <a href ='sales@webfries.com' style='color:blue;'>sales@webfries.com</a></p>
 </div>
        <p> Get ready for a better services!!</p> 
		<p>Thanks & Regards,</p> 
		<p>Team My Learning Planet Family.</p> 
    </body>
                </html>";

mail($to,$subject,$message1,$header);
$set=mysql_query("update child_registration set verify='yes' where username='$username'");

echo "Your Email and Password verified";
}
else
{
echo "you have a problem your create account";
}




?>
   	
					

	</div>
</div>
</div>
</div>
 
