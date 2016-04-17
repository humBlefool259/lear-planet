<?php
 $idds = $_GET['idd'];
include_once("connection.php");

 
// retrive data which you want to export
$query = "SELECT * FROM notification where id=".$idds; 
$export = mysql_query($query );
 
// extract the field names for header 
 
// export data 
$row = mysql_fetch_array( $export );
 $attachment = $row['attachment'];

header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($attachment). "\""); 
readfile('../attachment/'.$attachment); 
?>