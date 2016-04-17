<?php
include("connection.php");
}
?>
<select name="state" id="state" onchange="stateChange(this.value)">
<option value="select">--Select--</option>
<?php
$sql="select * from child_registartion where id='".$_REQUEST['student']."'";
$sql1=mysqli_query($connection,$sql);
while($row=mysqli_fetch_array($sql1))
{?>

<option value="<?php echo $row['id'];?>"><?php echo $row['child_name'];?></option>

<?php } ?>
</select>
