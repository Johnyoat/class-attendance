<?php
include 'tconslocal.php';
$msg = 'Teacher';
$ucont=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucont']));
$ucontz=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucontz']));
$ucontcat=htmlspecialchars(mysqli_real_escape_string($con,$_GET['ucontcat']));
if ($ucont=="" or $ucontz=="" or $ucontcat=="") 
{
	echo "All Information Must Be Valid.";
	return;
}
$sql="UPDATE studz SET studlev='$ucontz',studper='$ucontcat' WHERE studidz='$ucont'";
$result=mysqli_query($con,$sql);


echo "UPDATED SUCCESSFULLY..PLEASE RELOAD RECORDS";
?>