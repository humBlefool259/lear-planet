<?php
session_start();
include_once("connection.php");
if(isset($_POST['login1']))
{
$username = $_POST['login_username1'];
$password = $_POST['login_password1'];
$sql = "select * from child_registration where username = '$username'";
$result = mysql_query($sql);
$raw = mysql_fetch_array($result);
if((!$raw['verify']=='yes'))
{
header("Location: parents_section.php?token1=a");
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
header("Location: parents_section.php?token2=b");
}
}
?>