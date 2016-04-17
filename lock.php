<?php
include_once('connection.php');
session_start();
$user_check=$_SESSION['ID'];
 
$ses_sql=mysql_query("select id from child_registration where id='$user_check' ");
 
$row=mysql_fetch_array($ses_sql);
 
$login_session=$row['id'];
 
if(!isset($login_session))
{
header("Location: ../parents_section.php");
}
?>