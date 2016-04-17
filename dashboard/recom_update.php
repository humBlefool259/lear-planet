<?php
session_start();
include_once("connection.php");
$ID = $_SESSION['ID'];
$status = $_POST['status'];
$sql = "update recommendation set status=$status where s_id=$ID";
$result = mysql_query($sql);
?>