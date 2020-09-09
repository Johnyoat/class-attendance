<?php
include 'tconslocal.php';
$msg = 'Teacher';
$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));
if ($ucont=="") 
{
	echo "No ID Specified.";
	return;
}
$sql="DELETE from studz where studidz='$ucont'";
$result=mysqli_query($con,$sql);


echo "DELETED SUCCESSFULLY..PLEASE RELOAD RECORDS";
?>