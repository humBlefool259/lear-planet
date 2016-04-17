<?php
include_once("connection.php");
if(isset($_POST['register']))
{
$submit = $_POST['register'];
$child_name = $_POST['child_name'];
$age = $_POST['age'];
$class = $_POST['class'];
$school = $_POST['school'];
$username = $_POST['username'];
$password = $_POST['password'];
$Confirm_password = $_POST['Confirm_password'];
$contact = $_POST['contact'];
$emrgency_contact = $_POST['emrgency_contact'];
$serviceType = implode(',', $_POST['serviceType']);
$other_specific_services = $_POST['other_specific_services'];
$how_do_you_come = $_POST['how_do_you_come'];
$query = "insert into child_registration(child_name,age,class,school,username,password,contact_no,emergency_contact,services_opted_for,other_specific_services,how_do_you_come)values('$child_name','$age','$class','$school','$username','$password','$contact','$emrgency_contact','$serviceType','$other_specific_services','$how_do_you_come')";
$result = mysql_query($query) or die(mysql_error());
if($password!=$Confirm_password)
{

echo '<script language="javascript">';
  echo 'alert("password not matched!!")';  //not showing an alert box.
  echo '</script>';
  exit;
}
else
{
echo "Not Inserted";
}
}
else
{
 header("Loaction: index.php");
}

?>